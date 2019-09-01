<?php

namespace J\ClassNotes {

  class WIN_03_Firewall extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Firewall
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Firewall in MS-Server
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<ol>
  <li>Open the <kbd>Server Manager</kbd></li>
  <li>Click the <kbd>Tools</kbd> menu item and select <b>Windows Firewall with Advanced Security</b></li>  
</ol>

<H2>Add a Rule</H2>
<ol>
  <li>In the left-hand panel of <kbd>Windows Firewall</kbd> click <b>Inbound Rules</b></li>
  <li>In the right-hand panel - <kbd>Actions</kbd>, click <b>New Rule...</b></li>
  <li>A dialog will pop up - <kbd>Rule Type</kbd> - select <kbd>Custom</kbd> and click <b>Next ></b></li>
  <li>For the <kbd>Program</kbd> leave the selection on <kbd>All Programs</kbd> and click <b>Next ></b></li>
  <li>For the <kbd>Protocol and Ports</kbd> change the <kbd>Protocol type:</kbd> to <b>ICMPv4</b> and click <b>Next ></b></li>
  <li>For the <kbd>Scope</kbd> leave the settings as they are and click <b>Next ></b></li>
  <li>For the <kbd>Action</kbd> leave the settings as they are and click <b>Next ></b></li>
  <li>For the <kbd>Profile</kbd> uncheck the <kbd>Public</kbd> checkbox and click <b>Next ></b></li>
  <li>For the <kbd>Name</kbd> enter a name (in our case <b>Allow Ping</b>) and click <b>Finish</b></li>
  <lki>The dialog will close - verify the new rule in the list of <kbd>Inbound Rules</kbd></lki> 
</ol>


';

      return $returnValue;
    }

  }
}