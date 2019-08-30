<?php

namespace J\ClassNotes {

  class LNX_06_Directories extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Directories
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Directory structure
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<h2>File System</h2>
<p>There are many standard directories that Linux sets up:</p>
<ul>
  <li><code>/</code> - <b>root directory</b> (the base directory that parents all other directories)</li>
  <li><code>/bin</code> - <b>binaries</b> (holds all the binary files for the programs you install)</li>
  <li><code>/boot</code> - <b>boot directory - DO NOT TOUCH</b> ()</li>
  <li><code>/dev</code> - <b>device files</b> - generated on the fly, for instance when you plug in a webcam</li>
  <li><code>/etc</code> - <b>"Everything To Configure"</b> - system-wide config files</li>
  <li><code>/home</code> - <b>uers parent diretory</b> - all user\'s personal files reside within this directory (<code>/home/james</code>)</li>
  <li><code>/lib</code> - <b>libraries</b> - specifically all the kernel modules that the system uses</li>
  <li><code>/media</code> - <b>external storage</b> is mounted here when a USB drive is plugged in</li>
  <li><code>/mnt</code> - <b>mount</b> used to mount physical volumes. (not used very much)</li>
  <li><code>/opt</code> - <b>compiled software</b> that a user generates is usually placed here (depending on compilation settings)</li>
  <li><code>/proc</code> - <b>process</b> & kernel information</li>
  <li><code>/root</code> - <b>home directory of the superuser - DO NOT TOUCH</b></li>
  <li><code>/run</code> - <b>temp data - DO NOT TOUCH</b></li>
  <li><code>/sbin</code> - <b>superuser binaries</b> - programs that only the superuser can run</li>
  <li><code>/usr</code> - <b>user directory</b> - where users kept their stuff before /home came along</li>
  <li><code>/srv</code> - <b>servers directory</b> - if you\'re running a web-server, your HTML files would go in <code>/srv/http</code> or <code>/srv/www</code></li>
  <li><code>/sys</code> - <b>system data - DO NOT TOUCH</b></li>
  <li><code>/tmp</code> - <b>temporary files</b></li>
  <li><code>/var</code> - <b>variety</b> - for example, logs are created in <code>/var/log</code></li>
</ul>
<hr>

<h2>View Structure with tree</h2>
<p><code>tree</code> is a command that will show a directory structure in a format of a tree</p>
<p>It is not installed by default on CentOS, so you\'ll have to install it first:</p>
<ol>
  <li>
    Type:<br>
    <kbd>yum install tree -y</kbd>
  </li>
  <li>
    Then run it like so:<br>
    <kbd></kbd>
  </li>
</ol>

<h2>Partitioning with mkfs</h2>
<p>To create a new partition, use the <code>fdisk</code> command:</p>
<ol>
  <li>Open a terminal</li>
  <li>Run <code>su</code> to switch to root user (admin privileges)</li>
  <li>
    Run <code>fdisk -l</code> to list out all the current disks on the system and identify the one you want
    <br>or pipe it through grep to get only the info you want <code>fdisk -l | grep /dev/sd</code>
    <br><em>We\'ll call it /dev/sde</em>
  </li>
  <li>Run <code>fdisk /dev/sde</code> to run the fdisk program</li>
  <li>Type <code>m</code> to get a list of available commands</li>
  <li>
    Type <code>n</code> to create a new partition
    <ol>
      <li>Type <code>p</code> for Primary partition or press <kbd>Enter</kbd> to use the default</li>
      <li>Choose the partition number (1-4) or press <kbd>Enter</kbd> to use the default</li>
      <li>Choose the first sector to use or press <kbd>Enter</kbd> to use the default</li>
      <li>
        Choose the last sector to use, choose the size or press <kbd>Enter</kbd> to use the default (use the whole partition)
        <br>Type <code>+200M</code> for 200 Megabytes
      </li>
    </ol>    
  </li>
  <li>Repeat for as many partitions you want to make</li>
  <li>
    Type <code>p</code> to print the partition table - review it to make sure that there is no overlap and 
    to take note of your partition ids
  </li>
  <li>Type <code>w</code> to write the partition table to disk and <b>exit</b> <code>fdisk</code></li>
  <li>
    Run <code>mkfs</code> to format the partitions
    <ol>
      <li>
        The syntax is <code>mkfs.[file_system] [partition]</code> or in our case
        <br><code>mkfs.ext3 /dev/sde1</code>
      </li>
      <li>Keep your eye out for errors</li>
    </ol>
  </li>
  <li>
    Run <code>mkdir</code> to create the mount points
    <ol>
      <li>
        The syntax is <code>mkdir [file_path]</code> or in our case
        <br><code>mkdir /2GB</code>
        <br><code>mkdir /2GB/apps</code>
        <br>or use the <code>-p</code> flag to make parent directories
      </li>
    </ol>
  </li>
  <li>
    Edit the <code>fstab</code> file to map the partitions to the directories (make a backup first)
    <ol>
      <li>Create a backup - <code>cp /etc/fstab /etc/fstab_BAK</code></li>
      <li>Open gedit to edit fstab - <code>gedit /etc/fstab</code></li>
      <li>
        Add the partition information to the file in the format:
        <br><code>[partition] [mount_point] [file_system] defaults 0 0</code> or in our case
        <br><code>/dev/sde1 /2GB/apps ext3 defaults 0 0</code> 
      </li>
      <li>Save and exit <code>gedit</code></li>
    </ol>
  </li>
  <li>
    Mount the drives to test whether or not they were set up properly:
    <br><code>mount -a</code>
  </li>
</ol>

<h2>Partitioning with LVM</h2>
<ol>
  <li>Open a terminal</li>
  <li>Run <code>su</code> to switch to root user (admin privileges)</li>
  <li>
    Run <code>fdisk -l</code> to list out all the current disks on the system and identify the one you want
    <br>or pipe it through grep to get only the info you want <code>fdisk -l | grep /dev/sd</code>
    <br><em>We\'ll call it /dev/sde</em>
  </li>

  <li>
    Create the physical volumne - <code>pvcreate [volume_name]</code> or in our case
    <br><code>pvcreate /dev/sdc</code>
  </li>
  <li>
    Create the volume group - <code>vgcreate [volume_group_name] [volume_name]...</code> or in our case
    <br><code>vgcreate vg_data /dev/sdc /dev/sdd</code>
  </li>
  <li>
    Create the Logical Volume - <code>lvcreate -n [logical_volume_name] --size [size] [volume_group_name]</code> or in our case
    <br><code>lvcreate -n lv_app --size 12G vg_data</code>
  </li>
  <li>
    Print info about the Volume Group - <code>lvdisplay [volume_group_name]</code> or in our case
    <br><code>lvdisplay vg_data</code>
  </li>
  <li>Format the Logical Volumes - <code>mkfs.ext4 /dev/vg_data/lv_app</code></li>
  <li>Create the directory - <code>mkdir -p /lvm/app</code></li>
  <li>
    Edit the <code>fstab</code> file - <code>gedit /etc/fstab</code>
    <br>/dev/vg_data/lv_app /lvm/app ext4 defaults 0 0
  </li>
    <li>
    Mount the drives to test whether or not they were set up properly:
    <br><code>mount -a</code>
  </li>
</ol>


';

      return $returnValue;
    }

  }
}