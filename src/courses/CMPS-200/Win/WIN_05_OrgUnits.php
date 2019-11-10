<?php

namespace J\ClassNotes {

  class WIN_05_OrgUnits extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Organizational Units
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Organizational Units
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Add an OU</h2>
<ol>
  <li>Open the app <kbd>Acitve Directory User and ...</kbd></li>
  <li>In the far left panel, navigate to the domain we have set up - <code>Test.Tek</code> and expand it</li>
  <li><b>Right-click</b> the domain, and select <kbd>New</kbd> -> <kbd>Organizational Unit</kbd> to create a new <b>OU</b></li>
  <li>Name it <b>Users&Groups@Test.Tek</b> (make sure <b>Protect container from accidental deletion</b> is checked)</li>
  <li>Within the <b>Users&Groups@Test.Tek</b> OU, add a new OU and name it <b>Groups</b></li>
  <li>Within the <b>Users&Groups@Test.Tek</b> OU, add a new OU and name it <b>Users</b></li>
</ol>
<hr>

<h2>Add a user</h2>
<ol>
  <li>
    Select <b>Users</b> from the left panel and right-click the right panel and choose <kbd>New</kbd> -> <kbd>User</kbd> 
    from the context menu
  </li>
  <li>Name the user and give them a <b>User logon name</b> and click <kbd>Next ></kbd></li>
  <li>
    Enter a password, confirm it, and select password options (<b>Password never expires, etc</b>) and click <kbd>Next ></kbd>
  </li>
  <li>Confirm the details are correct and click <kbd>Finish</kbd></li>
  <li>Repeat as necessary</li>
</ol>
<hr>

<h2>Add a group</h2>
<ol>
  <li>
    Select <b>Groups</b> from the left panel and right-click the right panel and choose <kbd>New</kbd> -> <kbd>Group</kbd> 
    from the context menu
  </li>
  <li>Name the group and click <kbd>OK</kbd></li>
  <li>Repeat as necessary</li>
</ol>
<hr>

<h2>Add user to group</h2>
<ol>
  <li>Open the group properties by double clicking one of the groups you have created</li>
  <li>Navigate to the <kbd>Members</kbd> tab and click <kbd>Add...</kbd></li>
  <li>
    In the <kbd>Enter the object names to select</kbd> textbox, enter the name of a user you want to add to this group 
    and click <kbd>Check Names</kbd><br>
    If the correct full name replaces the name you have entered, click <kbd>OK</kbd>
  </li>
  <li>Repeat as necessary</li>
</ol>


';

      return $returnValue;
    }

  }
}