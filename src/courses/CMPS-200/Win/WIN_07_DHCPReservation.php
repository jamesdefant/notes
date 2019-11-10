<?php

namespace J\ClassNotes {

  class WIN_07_DHCPReservation extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DHCP Reservation
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Create a DHCP Reservation
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>DHCP reservations are for things like printers, that you would like to have a consistent (static) IP address</p>

<h2>Create a Reservation</h2>
<ol>
  <li>Open the <kbd>DHCP</kbd> app <b>as Administrator</b></li>
  <li>Navigate to the left panel and expand the <b>Scope</b> that was just created</li>
  <li>Right-click <kbd>Reservations</kbd> and select <kbd>New Reservation...</kbd></li>
  <li>
    Enter the following: 
    <ul>
      <li><b>Reservation Name</b></li>
      <li><b>IP address</b></li> to be reserved
      <li><b>MAC Address</b> of the device</li>
      <li><b>Description</b></li>
    </ul>
    ...and click <kbd>Add</kbd> 
  </li>
  <li>Either repeat as necessary or click <kbd>Close</kbd></li>
</ol>
<hr>

<h2>Confirm on the Client</h2>
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