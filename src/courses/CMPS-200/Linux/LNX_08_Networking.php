<?php

namespace J\ClassNotes {

  class LNX_08_Networking extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Networking
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Networking in Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Linux deals with networking in much the same was as a windows system</p>

<h2>Config files</h2>
<p><kbd>/etc/sysconfig</kbd> - multiple configuration files</p>
<p><kbd>/etc/resolv.conf</kbd> - contains the DNS servers for domain resolution</p>
<p><kbd>/etc/hosts</kbd> - list of hosts to be resolved without the use of DNS</p>
<p>
  <kbd>/etc/nsswitch.conf</kbd> - the order of how to search for hosts. For example, lookups will refer to 
  local files, then the NIS server, then DNS server. You can set the behavior as you like in this file
</p>
<hr>

<p>
  <kbd>/etc/sysconfig/network-scripts/ifcfg-[ens33]... BOOTPROTO=dhcp, static or none</kbd><br>
  Enable the interface on system boot:<br>ONBOOT=yes
</p>
<p>
  <kbd>/etc/resolv.conf</kbd><br>
  Usually set by Network Manager
</p>
<p>Testing using <kbd>dig</kbd> or <kbd>nslookup</kbd></p>
<p>Set host lookup in <kbd>/etc/nsswitch.conf</kbd></p>
<p><kbd>/etc/hosts</kbd> contains local IP to hostname mappings</p>

<h2>Tools</h2>
<p><kbd>ifconfig</kbd> - interface configuration</p>
<p><kbd>route</kbd> - displays / sets routing information</p>
<p><kbd>ping</kbd> - tests connectivity to remote host</p>
<p><kbd>netstat</kbd> - displays network connectivity (port info) and routing information</p>
<p><kbd>dhclient</kbd> - renews the ip address from the DHCP server</p>

';

      return $returnValue;
    }

  }
}