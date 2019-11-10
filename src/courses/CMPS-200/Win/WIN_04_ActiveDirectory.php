<?php

namespace J\ClassNotes {

  class WIN_04_ActiveDirectory extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Active Directory
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Active Directory
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $paths = [
        ['FOLDER', 'PATH'],
        ['Database folder:', ':/ActiveDirectory/ADDB'],
        ['Log files folder:', ':/ActiveDirectory/Logs'],
        ['SYSVOL folder:', ':/ActiveDirectory/Sysvol']
      ];
      $returnValue = '
<h2>Intro</h2>
<ol>
  <li>Pin the app <kbd>Acitve Directory User and ...</kbd> to the <b>Start menu</b></li>
</ol>

<h2>Create the role</h2>
<ol>
  <li>Open <kbd>Server Manager</kbd> and navigate to the <b>Dashboard</b> panel</li>
  <li>Under the <kbd>Quick Start</kbd> => <kbd>Configure this local server</kbd> click <b>Add roles and features</b></li>
  <li>
    The wizard dialog will pop up ensuring that you have first done the following:
    <ol>
      <li>The Administrator account has a strong password</li>
      <li>Network settings, such as static IP addresses, are configured</li>
      <li>The most current security updates from Windows Update are installed</li>
    </ol>
    If they are, click <b>Next ></b>
  </li>
  <li>
    For the <kbd>Installation Type</kbd> leave the selection on <b>Role-based or feature-based installation</b> and
    click <b>Next ></b> 
  </li>
  <li>For the <kbd>Server Selection</kbd> ensure this server is selected and click <b>Next ></b></li>
  <li>
    For the <kbd>Server Roles</kbd> select <b>Active Directory Domain Services</b>
    <ul>
      <li>
        A dialog will pop up to confirm whether you want to add the additional features that are required - 
        click <b>Add Features</b>
      </li>
    </ul>  
    Click <b>Next ></b>
  </li>
  <li>For the <kbd>Features</kbd> click <b>Next ></b></li>
  <li>For the <kbd>AD DS</kbd> click <b>Next ></b></li>
  <li>For the <kbd>Confirmation</kbd> click <b>Install</b> and close the dialog when it is done</li>
</ol>

<h2>Promote the server to a Domain Controller</h2>
<ol>
  <li>
    Once the installation is finished navigate to the <b>flag icon</b> in the top-right corner of the screen. It 
    should have an <b>alert icon</b> next to it indicating that some action is required. Click it and the link that 
    says <b>Promote this server to a domain controller</b> 
  </li>
  <li>For the <kbd>Deployment Configuration</kbd> select <b>Add a new forest</b> from the radio buttons</li>
  <li>Enter a <kbd>Root domain name</kbd> - in our case <code>Test.Tek</code> and click <b>Next ></b></li>
  <li>For the <kbd>Domain Controller Options</kbd> enter and confirm a password and click <b>Next ></b></li>
  <li>For the <kbd>DNS Options</kbd> click <b>Next ></b></li>
  <li>
    For the <kbd>Additional Options</kbd> wait until the system displays a <b>NetBIOS domain name</b>, confirm that
    it is to your liking, and click <b>Next ></b> 
  </li>
  <li>
    For the <kbd>Paths</kbd> set the server folders to their appropriate folders/partitions:'.
    \WriteHTML::getTable($paths).'
    Click <b>Next ></b>
  </li>
  <li>
    For the <kbd>Review Options</kbd> confirm your selections, click <b>View Script</b>, save the file as 
    <b>DCPROMO.txt</b> in the ActiveDirectory/Logs folder and click <b>Next ></b>
  </li>
  <li>
    For the <kbd>Prerequisites Check</kbd> wait until the system has determined if you meet all the requirements.
    If you have, click <b>Install</b>
  </li>
  <li>Restart you computer</li>
</ol>
<hr>

<h2>Create a Reverse Lookup zone on the DNS</h2>
<ol>
  <li>Open the <kbd>DNS Manager</kbd> as <b>Administrator</b></li>
  <li>In the left-hand panel right-click <kbd>Reverse Lookup Zones</kbd> and click <b>New Zone...</b></li>
  <li>This will open the <kbd>New Zone Wizard</kbd> - click <b>Next ></b></li>
  <li>
    Select the <b>Zone Type</b> (in our case <b>Primary</b>), make sure the <b>Store the zone in the Acitve 
    Directory</b> is checked and click <b>Next ></b>
  </li>
  <li>
    Leave the <kbd>Zone Replication Scope</kbd> as is:<br> <b>To all DNS servers running on domain controllers</b>
    in this domain<br>
    Click <b>Next ></b>
  </li>
  <li>Select <b>IPv4 Reverse Lookup Zone</b> and click <b>Next ></b></li>
  <li>Type in the IP we used for the static IP (192.168.138.) into the <kbd>Network ID:</kbd> and click <b>Next ></b></li>
  <li>
    For ease of use <b>- NOT FOR PRODUCTION</b> - select <b>Allow both nonsecure and secure dynamic updates</b> 
    and click <b>Next ></b>
  </li>
  <li>Click <b>Finish</b></li>
</ol>

<h2>Add a host</h2>
<ol>
  <li>
    In the <kbd>DNS Manager</kbd> right-click the <kbd>Forward Lookup Zones</kbd> => <kbd>[domain_name]</kbd> and
    choose <b>New Host (A or AAAA)...</b> from the context menu 
  </li>
  <li>
    Enter the <b>Name</b> of the server and it\'s <b>IP address</b> in the fields and check the 
    <b>Create associated pointer (PTR) record</b> checkbox
  </li>
  <li>
    Verify that the <b>A</b> record was created in the <kbd>Forward Lookup Zone</kbd> and that the <b>PTR</b>
    record was created in the <kbd>Revese Lookup Zone</kbd> - right-click and choose <b>Refresh</b>. Both IPs
    should match
  </li>
</ol>

<h2>Add an alias</h2>
<ol>
  <li>
    In the <kbd>DNS Manager</kbd> right-click the <kbd>Forward Lookup Zones</kbd> => <kbd>[domain_name]</kbd> and
    choose <b>New Alias (CNAME)...</b> from the context menu 
  </li>
  <li>Enter a <b>Name</b> for the alias</li>
  <li>Enter the <b>Fully qualified domain name (FQDN) for target host:</b> in the field and click <b>OK</b></li>
  <li>
    Right-click the <kbd>Reverse Lookup Zones</kbd> => <kbd>[our_zone]</kbd> anc select <b>New Pointer (PTR)...</b>
    from the context menu
  </li>
  <li>Complete the <b>Host IP Address:</b> and enter a <b>Host name:</b> anc click <b>OK</b></li>
  <li>
    Confirm that the <b>A</b> record in the <kbd>Forward Lookup Zone</kbd> matches the <b>PTR</b> record
    in the <kbd>Reverse Lookup Zone</kbd>
  </li>
</ol>


';

      return $returnValue;
    }

  }
}