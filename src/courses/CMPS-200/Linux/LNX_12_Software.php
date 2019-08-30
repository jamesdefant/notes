<?php

namespace J\ClassNotes {

  class LNX_12_Software extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Software
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Installing Software on Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Red Hat vs Debian</p>
<p>YUM vs APT</p>
<p>RPM vs DEB</p>

<h2>The Process</h2>
<ol>
  <li>Install</li>
  <li>Configure</li>
  <li>Start</li>
  <li>Enable</li>
</ol>

<h2>YUM</h2>
<p><code>yum install [package]</code> or <code>yum install [local.rpm]</code></p>
<p><code>yum update [package]</code></p>

<h2>Configure</h2>
<ol>
  <li></li>
</ol>

<h2>Install Software</h2>
<p>
  <a href="https://devops.ionos.com/tutorials/how-to-set-up-apache-web-server-on-centos-7/" target="_blank">
    Install a web server on CentOS 7 
  </a> 
</p>

<h2>cron</h2>
<p>Use <kbd>cron</kbd> to schedule a task to run at a specific interval or time</p>
<p>Edit <kbd>/etc/crontab</kbd> to schedule a custom task</p>
<p>Add a script to any of these folders to have it automatically scheduled for you:</p>
<ul>
  <li><kbd>/etc/cron.d</kbd></li>
  <li><kbd>/etc/cron.daily</kbd></li>
  <li><kbd>/etc/cron.deny</kbd></li>
  <li><kbd>/etc/cron.hourly</kbd></li>
  <li><kbd>/etc/cron.monthly</kbd></li>
  <li><kbd>/etc/cron.weekly</kbd></li>
</ul>
<hr>

<h2>at</h2>
<p><code>at</code> is a program that allows you to schedule something to happen once</p>
<p>This will write "Testing" to a text file named test.txt in 1 minute</p>
<p><em>Press <kbd>ctrl-D</kbd> to close <code>at</code></em></p>
<pre><code>
[admin@localhost]# at now + 1 minute
at> echo "Testing" > test.txt
</code></pre>
<hr>

<h2>tar</h2>
<p><kbd>tar</kbd> is an archiving utility that will save many files together as a single file</p>
<p>
  Usage:<br>
  <kbd>tar [OPTION]... [FILE]...</kbd><br>
  For example:<br>
  <code>tar -cf backup.tar /personal</code>  
</p>
<hr>

<h2>gzip</h2>
<p><kbd>gzip</kbd> is a file compression utility</p>
<p>
  Usage:<br>
  <kbd>gzip [OPTION] [FILE]</kbd><br>
  For example:<br>
  <code>gzip backup.tar</code>  
</p>
';

      return $returnValue;
    }

  }
}