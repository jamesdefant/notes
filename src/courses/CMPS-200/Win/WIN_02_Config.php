<?php

namespace J\ClassNotes {

  class WIN_02_Config extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Config
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Initial Config of MS-Server
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $ipTable = [
        ['FIELD', 'VALUE'],
        ['IP address:', '192.168.138.253'],
        ['Subnet mask:', '255.255.255.0'],
        ['Default gateway:', '192.168.138.2'],
        ['Prefered DNS server:', '192.168.138.253']
      ];
      $newUser = [
        ['FIELD', 'VALUE'],
        ['User name:', 'Admin'],
        ['Full name:', 'Admin'],
        ['Description:', 'Admin Account'],

      ];
      $returnValue = '
<h2>General Config</h2>
<ol>
  <li>Open the <kbd>Taskbar settings</kbd> by <b>right-clicking</b> the taskbar</li>
  <li>Set <kbd>Combine taskbar buttons</kbd> to <b>never</b></li>
</ol>
<hr>

<h2>Create Partitions</h2>
<ol>
  <li></li>
</ol>

<h2>Set a static IP</h2>
<ol>  
  <li>
    Open Server Manager - notice on the <b>Local Server</b> page that the <b>Ethernet</b> setting says 
    <b>Assigned by DHCP</b> 
  </li>
  <li>
    Navigate to the <kbd>Network Connections</kbd> and configure the <b>Properties</b> of 
    the wired ethernet connection
    <ol>
      <li><b>uncheck the TCP/IPv6 protocol</b></li>
      <li>
        Click the TCP/IPv4 protocol and click the <b>Properties</b> button to alter the DHCP settings'.
        \WriteHTML::getTable($ipTable). '
      </li>  
      <li>Click <b>OK</b></li>    
    </ol>
  </li>
  <li>Click <b>Close</b></li>
  <li>Refresh the <b>Server Manager</b> window - the <b>Ethernet</b> should now display the IP that 
  was just inputted</li>
</ol>
<hr>

<h2>Add a new Admin user</h2>
<ol>
  <li>In <b>Server Manager</b>, navigate to the <b>Tools</b> menu item and choose <b>Computer Management</b></li>
  <li>In the left-most panel, navigate to <b>Local Users and Groups</b> and click <b>Users</b></li>
  <li><b>Right-click</b> somewhere in the middle panel and choose <b>New User...</b> from the context menu</li>
  <li>Fill in the fields for <b>User name:</b>, <b>Full name:</b>, <b>Description:</b>, and <b>Password:</b></li>
  <li><b>Un-check</b> the <kbd>User must change password at next login</kbd> box</li>
  <li><b>Check</b> the <kbd>User cannot change password</kbd> box</li>
  <li><b>Check</b> the <kbd>Password never expires</kbd> box</li>
  <li>Click <b>Create</b></li>
  <li>Click <b>Close</b></li>
  <li>Right-click the new Admin user and click <b>Properties</b> from the context menu</li>
  <li>Choose the <b>Member Of</b> tab and click <b>Add...</b></li>
  <li>Click <b>Advanced</b></li>
  <li>Click <b>Find Now</b> to display a list of User Groups</li>
  <li>Choose <b>Administrators</b> from the list and click <b>OK</b></li>
  <li>Click <b>OK</b> to close the <b>Select Groups</b> window</li>
  <li>Click <b>Apply</b> and <b>OK</b> to close the <b>Admin Properties</b> window</li>
</ol>
<hr>

<h2>Change the Computer Name</h2>
<ol>
  <li>
    In <kbd>Server Manager</kbd> click the <b>Computer Name</b> link to bring up the 
    <kbd>System Properties</kbd> window
  </li>
  <li>Alter the <b>Computer description</b> field to <b>Domain Controller</b></li>
  <li>Click the <b>Change...</b> button</li>
  <li>Alter the <b>Computer name:</b> field to <b>DC1</b> or some such</li>
  <li>Click <b>OK</b> to close the <b>Computer Name/Domain Changes</b> window</li>
</ol>

<h2>Adjust Performance</h2>
<ol>  
  <li>
    While the <b>System Properties</b> window is still open, click the <kbd>Advanced</kbd> tab and click the 
    <kbd>Performance</kbd> => <kbd>Settings...</kbd> button
  </li>
  <li>Select the <b>Adjust for best performance</b> radio button and click <b>Apply</b> and <b>OK</b></li>
  <li>
    From the <b>System Properties</b> window, click the <kbd>Remote Desktop</kbd> tab and select the 
    <b>Allow remote connections to this computer</b> radio button and click <b>OK</b>
  </li>
  <li>Follow the prompts to restart the computer</li>
</ol>


';

      return $returnValue;
    }

  }
}