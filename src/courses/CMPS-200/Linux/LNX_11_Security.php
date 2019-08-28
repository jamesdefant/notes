<?php

namespace J\ClassNotes {

  class LNX_11_Security extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Security
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Security in Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Users</h2>
<ul>
  <li>Password aging</li>
  <li>Management</li>
</ul>
<p>Difficult with muiltiple machines</p>
<p>Configuration managers - Cfengine, Puppet, Ansible</p>
<hr>

<h2>Expire Users</h2>
<h3><code>chage</code></h3>
<p><code>chage -l [username]</code> - lists current info</p>
<p><code>chage -M # [username]</code> - # is the maximum days between changes</p>
<p>
  <code>chage -E YYY-MM-DD [username]</code> - sets the expiry date on the account 
  (set -E -1 to cancel the expiration date)
</p>
<ol>
  <li>Create the user</li>
  <li>Set the password expiry</li>
  <li>Set the password</li>
</ol>
<hr>

<h2>System</h2>
<p><code>systemctl -a</code> - gives everything on the system (use with grep)</p>
<p><code>systemctl restart network</code> (can also call start, stop, status, etc)</p>

<h3>SELinux</h3>
<p>Security Enhanced Linux</p>
<p><kbd>/etc/selinux/config</kbd> - config file that controls the state of SELinux</p>
<p><code>getenforce</code> - print the current setting</p>
<p><code>setenforce [enforcing/permissive/disabled]</code> - set the setting</p>
<ul>
  <li><code>enforcing</code> - enforces the policy</li>
  <li><code>permissive</code> - logs actions, but doesn\'t enforce</li>
  <li><code>disabled</code> - no policy is loaded</li>
</ul>

<h2>Remote Access</h2>
<p>Services allow remote access</p>
<ol>
  <li>ssh</li>
  <li>Vnc-server</li>
  <li>Systemctl stop sshd</li>
</ol>

<h2>systemctl</h2>
<h4>Syntax:</h4>
<p><b>systemctl [status/stop/start/restart/enable/disable] [service_name]</b></p>
<ul>
  <li><code>status</code> - </li>
  <li><code>stop</code> - immediate, does not survive restart</li>
  <li><code>start</code> - immediate, does not survive restart</li>
  <li><code>restart</code> - </li>
  <li><code>enable</code> - only takes effect on reboot</li>
  <li><code>disable</code> - only takes effect on reboot</li>
</ul>
<hr>

<h2>Network Security</h2>
<h4>IPTables</h4>
<p><code>IPTables</code> - a firewall used in the linux kernel from 2000 as a "front end" to netfilter</p>
<h4>firewalld</h4>
<p>Replacement for IPtables introduced with RHEL</p>

';

      return $returnValue;
    }

  }
}