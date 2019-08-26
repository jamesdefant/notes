<?php

namespace J\ClassNotes {

  class LNX_02_FileSystem extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
File System
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Linux File System
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Physical drives are represented as folders, not drive letters</p>
<p>Linux splits a drive into the following partitions:</p>
<ul>
  <li><code>/</code> - root (necessary)</li>
  <li><code>/boot</code>-  (necessary)</li>
  <li><code>swap</code> - like a pagefile/virtual memory  (necessary)</li>
  <li><code>/lib</code></li>
  <li><code>/bin</code></li>
  <li><code>/sbin</code></li>
  <li><code>/opt</code></li>
  <li><code>/usr</code></li>
</ul>
<hr>

<h2>Users</h2>
<ul>
  <li>Root - Administrator user</li>
  <li>Admin - </li>
  <li>Regular users</li>
</ul>
<h3>CHange user/permission levels</h3>
<ul>
  <li>
    <code>su [user]</code> - "Switch User" - if nothing after <code>su</code>, 
    Linux assumes you want to change to the root user (prompts for [user] password)
  </li>
  <li>
    <code>sudo [command]</code> - "Switch User and DO" - perform the command as the root user 
    (prompts for current users password) - safer
  </li>
</ul>
<hr>

<h2>Packages</h2>
<p>If you need a package, install it</p>

<h2>Make a VM</h2>
<ol>
  <li>Open VM Workstation</li>
  <li>Create new Virtual machine</li>
  <li>Choose custom</li>
  <li>Select Workstation compatibility - min Workstation 8</li>
  <li>Choose installer disc image file and select your ISO</li>
  <li>Name your VM (automatically names the folder that it will reside in)</li>
  <li>Choose your processor/cores and ram - <b>2 cpus and 4096 mb ram works well</b></li>
  <li>Select the Network type - Bridge works well (connects directly to the SAIT network)</li>
  <li>Select I/O Controller Type - <b>LSI Logic</b></li>
  <li>Disk Type - <b>SCSI</b></li>
  <li>Create a New Virtual DIsk</li>
  <li>Select Disk Capacity - 30 GB - store as a single file</li>
  <li></li>
  <li>Select <b>Test Media & Install CentOS</b></li>
  <li>Select keyboard layout and language</li>
  <li>Set Timezone, Installation Source (Local Media), Software Selection (<b>Server With GUI (GNOME)</b>)</li>
  <li>Set Network - <b>turn ON - will show IP</b></li>
  <li>Set Installation Destination
    <ul>
      <li>Other Storage Options - Set "I will configure partitioning"</li>
      <li>Click Done</li>
      <li>Set Maual Partitioning (LVM)</li>
      <li>Click <kbd>Click here to create them automatically</kbd></li>
      <li>Reduce the size of <code>/</code> (root) - <b>10 GB</b></li>
      <li>Reduce the size of the swap to <b>2 GB</b></li>
      <li>Add a new Mount Point - <code>/home</code> - <b>11 GB</b></li>
      <li>Add a new Mount Point - <code>/opt</code> - <b>5 GB</b></li>
      <li>Change <code>/home</code> file system to <b>ext4</b></li>
      <li>Click <kbd>Done</kbd></li>
    </ul>
  </li>
  <li>Click <kbd>Begin Installation</kbd></li>
  <li>Set Root password - Click Done</li>
  <li>Create User - <b>Check</b> <kbd>make this user administrator</kbd></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ol>
<hr>


';

      return $returnValue;
    }

  }
}