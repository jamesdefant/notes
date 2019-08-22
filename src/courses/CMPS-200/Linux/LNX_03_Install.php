<?php

namespace J\ClassNotes {

  class LNX_03_Install extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Installs
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Printer & GUI
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Install a printer by:</p>
<ol>
  <li>Clicking the <kbd>Applications</kbd> button at the top-left of the screen</li>
  <li>From <kbd>Sundry</kbd> choose <kbd>Print Settings</kbd></li>
  <li>Click <kbd>Add</kbd></li>
  <ul>
    <li>Network Printer: Enter the hostname and press <kbd>Forward</kbd></li>
    <li>Corded Printer:</li>
  </ul>
</ol>
<hr>

<h2>Install Cinnamon GUI</h2>
<p>Install the GUI package by Open <b>Terminal</b> and type<br>:</p>
<ol>
  <li><code>su -</code> - to switch to the root user and enter the password</li>
  <li><code>yum install epel-release -y</code></li>
  <li><code>yum install cinnamon -y</code></li>
</ol>

';

      return $returnValue;
    }

  }
}