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
  <li>Note that the correct folder was shared and click <kbd>Done</kbd></li>
  <li>Navigate to the folder and right-click it and choose <kbd>Properties</kbd> from the context menu</li>

</ol>
<hr>

<h2>Grant Access to Directory</h2>
<ol>
  <li>Navigate to the <kbd>Sharing</kbd> tab and select and <b>copy</b> the <b>Network Path</b> of the folder</li>
  <li>Click <kbd>Cancel</kbd> to exit the Properties window</li>
  <li>Open the app <kbd>Acitve Directory User and ...</kbd></li>
  <li>
    Navigate to the user or group that you would like to give access to, right-click them, and choose 
    <kbd>Properties</kbd> from the context menu
  </li>
  <li>
    Navigate to the <kbd>Profile</kbd> tab and <b>copy the Network Path</b> into the <kbd>Profile path</kbd> 
    textbox and append it with <code>\%username%</code><br>
    ie. <code>\\James_Win10\Roaming\%username%</code>
  </li>
  <li>
    Choose <b>Connect</b> for the <kbd>Home Folder</kbd>, select a <b>drive letter</b> to represent the home drive, 
    and copy the <kbd>Profile Path</kbd> into the <kbd>To</kbd> textbox
  </li>
  <li>Click <kbd>Apply</kbd> - the <code>%username%</code> placeholder should resolve to the current user/group name</li>
  <li>Click <kbd>OK</kbd> to close the wizard</li>
</ol>

';

      return $returnValue;
    }

  }
}