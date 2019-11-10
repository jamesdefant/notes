<?php

namespace J\ClassNotes {

  class WIN_06_DHCPRole extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DHCP Role
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Install & Configure DHCP Role
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Install DHCP Role</h2>
<ol>
  <li>
    Open <kbd>Server Manager</kbd> and when the <kbd>Dashboard</kbd> panel is selected, click <kbd>Add roles and features</kbd>
  </li>
  <li>The <b>Add Roles and Features Wizard</b> will open - click <kbd>Next ></kbd></li>
  <li>For the <kbd>Insallation Type</kbd> select <b>Role-based or feature based installation</b></li>
  <li>
    For the <kbd>Server Selection</kbd> choose <kbd>Select a server from the server pool</kbd> and choose our server - 
    <code>Test.Tek</code> and click <kbd>Next ></kbd>
  </li>
  <li>
    For the <kbd>Server Roles</kbd> select the role <b>DHCP Server</b> from the list<br>
    (a popup will open - click <kbd>Add Features</kbd>)<br>
    then click <kbd>Next ></kbd>
  </li>
  <li>For the <kbd>Features</kbd> click <kbd>Next ></kbd></li>
  <li>For the <kbd>DHCP Server</kbd> click <kbd>Next ></kbd></li>
  <li>
    For the <kbd>Confirmation</kbd> click <kbd>Install</kbd><br>
    once it is finished, click <kbd>Close</kbd>
  </li>
  <li>
    In the <kbd>Server Manager</kbd> app, notice the flag with the warning in the top right corner - click 
    <kbd>Complete DHCP configuration</kbd> as something is still requred for the DHCP server
  </li>
  <li>This will open the <kbd>DHCP Post-Install configuration wizard</kbd> window - click <kbd>Next ></kbd></li>
  <li>Select which users credentials to use for authorization (the Administrator is fine) and click <kbd>Commit</kbd> </li>
  <li>Notice that authorization <b>failed</b></li>
</ol>
<hr>

<h2>Create a Scope</h2>
<ol>
  <li>Open the <kbd>DHCP</kbd> app <b>as Administrator</b></li>
  <li>
    Navigate to the panel on the left side and expand the server and right-click <kbd>IPv4</kbd> and choose 
    <kbd>New Scope...</kbd> from the context list
  </li>
  <li>This opens the <kbd>New Scope</kbd> wizard - enter a <b>Name</b> (in our case <b>Test</b>) and click <kbd>Next ></kbd></li>
  <li>Enter the <kbd>Start IP address</kbd> as <b>192.168.1.1</b></li>
  <li>Enter the <kbd>End IP address</kbd> as <b>192.168.1.254</b> and click <kbd>Next ></kbd></li>
  <li>
    Enter any exclusions you want (IPs you don\'t want made available to the DHCP server)<br>
    In our case enter the <br>
    <kbd>Start IP address</kbd> as <b>192.168.1.1</b> and the <br>
    <kbd>End IP address</kbd>  as  <b>192.168.1.10</b> and click <kbd>Add</kbd> to not serve the first 10 IP addresses 
    to client computers<br>
    Click <kbd>Next ></kbd>
  </li>
  <li>Set the <kbd>Lease Duration</kbd> to <b>1 day</b> and click <kbd>Next ></kbd></li>
  <li>Select <b>Yes, I want to configure these options now</b> and click <kbd>Next ></kbd></li>
  <li>Enter the IP address of the router - <b>192.168.1.2</b> and click <kbd>Add</kbd> then click <kbd>Next ></kbd></li>
  <li>
    Enter the <kbd>Server name</kbd> as <b>DC1</b> or whichever the server computer is named, and click <kbd>Resolve</kbd> 
    to see that the IP address it pulls is the address of the server and click <kbd>Add</kbd> to add it to the list of DNS servers<br>
    Click <kbd>Next ></kbd>
  </li>
  <li>Don\'t change anything for the <b>WINS</b> configuration and click <kbd>Next ></kbd></li>
  <li>Select <kbd>Yes, I want to activate this scope now</kbd> and click <kbd>Next ></kbd></li>
  <li>Click <kbd>Finish</kbd></li>
</ol>
<hr>

<h2>Confirm the Scope</h2>
<ol>
  <li>Open the <kbd>DHCP</kbd> app and navigate to the new scope</li>
  <li>Select <kbd>Scope Options</kbd> and confirm that all the values are correct</li>
</ol>

<h2>Confirm the client</h2>
<ol>
  <li>On the client computer, open a command prompt and type <code>ipconfig</code> to display the IP address of the client</li>
  <li>Type <code>ipconfig /release</code> to release the old lease</li>
  <li>
    Type <code>ipconfig /renew</code> to drop the IP, renew it, and display the new value. It should now have an IP in 
    the range defined by the scope
  </li>
</ol>
';

      return $returnValue;
    }

  }
}