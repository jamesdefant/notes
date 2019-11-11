<?php

namespace J\ClassNotes {

  class WIN_08_RoamingProfile extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Roaming Profile
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Create a Roaming Profile & Home Drive
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Create a Roaming Directory</h2>
<ol>
  <li>Open the <kbd>Network Drives</kbd> partition and create a new folder called <b>Roaming</b></li>
  <li>Right-click the new folder and select <kbd>Share with</kbd> -> <kbd>Specific people...</kbd></li>
  <li>
    Type in the <b>Group</b> or <b>User</b> you would like to grant access to this folder and click <kbd>Add</kbd><br>
    Set their <kbd>Permission Level</kbd> to <b>Read/Write</b><br>    
  </li>
  <li>Repeat as necessary and click <kbd>Share</kbd></li>
</ol>


';

      return $returnValue;
    }

  }
}