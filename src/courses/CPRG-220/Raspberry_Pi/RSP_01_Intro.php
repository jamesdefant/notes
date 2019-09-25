<?php

namespace J\ClassNotes {

  class RSP_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Intro to Raspberry Pi
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p><a href="https://www.raspberrypi.org/" target="_blank">https://www.raspberrypi.org/</a> </p>
<p>Raspberry Pi is a tiny form-factor, Linux based computer that was originally designed for students to prototype</p>
<p>Runs a compact version of Linux:</p>
<ul>
  <li>Runs <b>Raspian</b> - a Linux distro based on Debian</li>
  <li><b>NOOBS</b> - New Out Of the Box Software - package</li>
  <li>Has <b>Python</b> and <b>Java</b> installed</li>
</ul>
<p>Uses a Micro-SD card instead of a HDD/SDD</p>
<p>Has many extension ports and pins to facilitate connecting many different sensors, LEDs, motors, etc</p>
<hr>

<h2>OS Installation</h2>
<p>
  Download the latest version of <b>Raspian</b> - <a href="https://www.raspberrypi.org/downloads/raspbian/" 
  target="_blank">
    https://www.raspberrypi.org/downloads/raspbian/
  </a>
</p>
<p>
  Download a <b>SD card formatter</b> - <a href="https://www.sdcard.org/downloads/formatter/" target="_blank">
    https://www.sdcard.org/downloads/formatter/
  </a>
</p>
<p>
  Download an <b>SD image copier</b> - <a href="https://sourceforge.net/projects/win32diskimager/" target="_blank">
    https://sourceforge.net/projects/win32diskimager/
  </a> 
</p>
<ol>
  <li>Plug the SD card into your Windows computer</li>
  <li>Format it if necessary</li>
  <li>Run <b>Win32DiskImager</b> to copy the image to the SD card</li>
  <li>Plug the SD card into the Raspberry Pi and boot it up</li>
  <li>Follow the prompts to setup the OS</li>
</ol>

<h2>Setup</h2>
<p>
  Download <b>IP Scanner</b> for your Windows computer here: <a href="https://www.advanced-ip-scanner.com/" target="_blank" >
    https://www.advanced-ip-scanner.com/
  </a> 
</p>
<p>
  Download <b>Tight VNC</b> for your Windows computer here: <a href="https://www.tightvnc.com/" target="_blank">
    https://www.tightvnc.com/
  </a> 
</p>
<ol>
  <li>Open <kbd>Pi</kbd> => <kbd>Preferences</kbd> => <kbd>Respberry Pi Configuration</kbd></li>
  <li>On the <b>System</b> tab</li>
  <li>
    Set the following:
    <ul>
      <li><b>Password</b> - change it to something - <b>P@ssw0rd</b></li>
      <li><b>Hostname</b> - change it to something unique - <b>JD</b></li>
  </li>
  <li>Navigate to the <b>Interfaces</b> tab</li>
  <li>
    Enable the following:
    <ul>
      <li><b>Camera</b></li>
      <li><b>SSH</b></li>
      <li><b>VNC</b></li>
      <li><b>SPI</b></li>
      <li><b>I2C</b></li>
      <li><b>1-Wire</b></li>
    </ul>
    ...and click <kbd>OK</kbd>
  </li>
  <li>Open the <b>Terminal</b> and type <code>ifconfig</code> to determine the IP of the Pi - <b>10.163.37.227</b></li>
  <li>Run <b>VNC Viewer</b> on your Windows machine, and type in the IP to access the Pi remotely</li>
  <li>
    Run the command following commands to update the system:
    <pre><code>
sudo apt-get update
sudo apt-get upgrade
sudo apt-get update
    </code></pre>
  </li>
  <li>Install <code>vsftpd</code> by running the following command: <kbd>sudo apt-get install vsftpd</kbd></li>
  <li>
    Edit the <code>vsftpd.conf</code> file by running: <kbd>sudo vi /etc/vsftpd.conf</kbd> and alter the following lines:
    <ul>
      <li><code>anonymous_enable=NO</code></li>
      <li><code>local_enable=YES</code></li>
      <li><code>write_enable=YES</code></li>
      <li><code>local_unmask=022</code></li>
    </ul>
  </li>
  <li>Restart the <code>vsftpd</code> service by running the command: <kbd>sudo systemctl restart vsftpd</kbd></li>
  <li>Install <code>Apache</code> by running the following command: <kbd>sudo apt install apache2</kbd></li>
</ol>
<p>
  Download <b>FileZilla FTP Client</b> for Windows here: <a href="https://filezilla-project.org/" target="_blank">
    https://filezilla-project.org/
  </a> 
</p>
<p>
  Run <b>FileZilla</b> and insert the IP address (<b>10.163.37.227</b>), username (<b>pi</b>), and password 
  (<b>P@ssw0rd</b>)
</p>

<h2>Set the time</h2>
<p>The time may not be set properly so open the terminal and run the following command:</p>
<pre><code>
-- displays the current time set by the system
$ date

-- set the current date/time to 2:30 pm - sept 25 2019
$ date -s "SEP 25 2019 14:30:00"
</code></pre>

';

      return $returnValue;
    }

  }
}