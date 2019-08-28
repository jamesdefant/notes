<?php

namespace J\ClassNotes {

  class LNX_10_RemoteAccess extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Remote Access
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Remote Access in Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>SSH</h2>
<p><b>Port 422</b></p>
<ul>
  <li>Encrypted, reliable remote acces</li>
  <li>Authentication required by default</li>
</ul>

<h2>Telnet</h2>
<p><b>TCP port 23</b></p>
<ul>
  <li>No encription by default</li>
  <li>No authentication by default</li>
  <li>"quick and dirty" way to access a remote network resource</li>
  <li>Often blocked by system admins</li>
</ul>

<h2>VNC</h2>
<p><b>Virtual Network Computing</b></p>
<ul>
  <li>Requires the installation of a VNC server application on your linux installation</li>
  <li>Many client packages available</li>
</ul>

<h2>Remote X Session</h2>
<ul>
  <li>Requires the use of third party software (xming) for Windows</li>
</ul>

<h2>Create an SSH key</h2>
<p><code>ssh keygen</code> - generate a pair of keys</p>
<p><code>ssh-copy-id [user]@[IP]</code> - copy the generated ssh key to the remote machine to expediate logging in</p>

';

      return $returnValue;
    }

  }
}