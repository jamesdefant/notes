<?php

namespace J\ClassNotes {

  class WIN_01_OS_Intro extends Page
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
Windows Operating System
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A DNS server keeps a list of website neames and IP addresses</p>
<p></p>

<h2>Name the computer</h2>
<p>MyName_OSVersion - James_Win10</p>

<p>WSUS - Sindows Server Update Services</p>
<p>Simplifies the diestribution fo Windows updates</p>
<p>Updates are downloaded to the server which tehn can vbe configured</p>

<h2>Maintain security on your system</h2>

<h2>Page File</h2>
<p>The system uses the page file as memory if/when your system runs out of physical memory.</p>
<p>If there is no page file, your system will crash.</p>
<p>A good guideline for page files is:</p>
<p><b>Minimum: 1.5 x RAM</b></p>
<p><b>Maximum: 2.0 x RAM</b></p>
<p>...which should reside in a space that has <b>3 x RAM</b></p>
<p>
  Using a page file allows a log to be created when there is a crash - otherwise, the RAM (which is volatile)
  will be dumped (emptied)
</p>
<hr/>

<h2>Permissions</h2>
<p>Windows has 2 types of permissions - <b>security</b> (local) and <b>share</b> (network)</p>
<p><b>The FAT32 filesystem cannot implement system (local) permissions</b></p>
<p>
  Deny permissions by eliminating <b>inheritance</b> by bringing up the properties of a drive or folder,
  click the <kbdSecurity</kbd> tab, click <kbd>Advanced</kbd> and click <kbd>Disable Inheritance</kbd>
</p>
<p>
  Be very careful about migrating sensitive data from an NTFS partition to a FATxx partition - FATxx has no local permissions
  and migrating back to NTFS <b>all your original permissions will have been lost</b>
</p>

<h3>Create a backup admin account just in case you lose access</h3>

<div class="alert alert-warning">
  <p><b>Make sure the server has a static IP set up</b></p>
</div>

<h2>Create a new role</h2>
<p>Within <b>Server Manager</b>, click <kbd>Add roles and features</kbd></p>
<p></p>

';

      return $returnValue;
    }

  }
}