<?php

namespace J\ClassNotes {

  class LNX_04_Commands extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Commands
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Command Line Interface
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>

<h2>Help</h2>
<p>To get a description for a command type <code>whatis [command_name]</code></p>
<p>To get help for most commands, type <code>man [command_name]</code></p>
<p><code>apropos [command_name]</code> is another good option</p>
<p>use <code>mandb</code> if apropos fails</p>
<p>For instance:</p>
<pre><code>
// Show all the command line options for the ls (list) command
[admin@localhost ~]$ man ls
</code></pre>
<hr>

<h2>The Shell</h2>
<p>The shell is a command line interpreter. These include:</p>
<ul>
  <li>Sh - bourne shell</li>
  <li>Csh - C shell (part of BSD)</li>
  <li>Ksh - (Bell labs)</li>
  <li>Bash - standard</li>
  <li>Powershell - Windows</li>
</ul>
<hr>

<h2>Commands</h2>
<ul>
  <li><code>pwd</code> - Print Working Directory (<code>/home/admin</code>)</li>
  <li><code>ls</code> - LiSt current directory contents</li>
  <li><code>cd [directory]</code> - Change Directory (relative)</li>
  <li><code>cd /[directory]</code> - Change Directory (absolute)</li>
  <li><code>touch [filename]</code> - Create or edit a file</li>
  <li><code>rm [filename]</code> - ReMove (Delete)</li>
  <li><code>cp [filename]</code> - CoPy file</li>
  <li><code>mv [filename]</code> - MoVe/Rename file/directory</li>
  <li><code>mkdir [directory]</code> - MaKe DIRectory (create a new directory)</li>
  <li><code>rmdir [directory]</code> - ReMove DIRectory (delete directory)</li>
</ul>

<h2>Flags</h2>
<p>Use flag options to alter the way a command is executed:</p>
<ul>
  <li><code>ls -l</code> - use a long listing format</li>
  <li><code>ls -al</code> - <b>--list all</b> (including .*), use a long listing format</li>
  <li><code>rm -f</code> - <b>--force</b> (deletes without prompt)</li>
  <li>
    <code>rm -rf</code> - <b>--recursive</b> remove directories and their contents recursively, 
    <b>--force</b> (deletes without prompt)
  </li>
  <li><code></code></li>
  
</ul>
<hr>

<h2>File Ownership and Permissions</h2>
<ul>
  <li><code>chown [user:group] [filename]</code> - CHange the user/group access for a file</li>
  <li>
    <code>chmod [UGOA [+-=] rwxXst] [filename]</code> - CHange/MODify permissions (User/Group/Others/All) 
    (+) (read/write/execute/allready has execute perms/set user/restricted) (<code>man chmod</code>)
  </li>
</ul>
<hr>

<h2>Handle files</h2>
<p><code>grep [pattern] [filename]</code> - match a pattern using RegEx</p>
<p><code>[command] > [filename]</code> - <b>replace</b> the file with the contents of the command</p>
<p><code>[command] >> [filename]</code> - <b>append</b> the file with the contents of the command</p>
<p><code>cat [OPTION] [filename]</code> - concatenate files and print to standard output</p>
<pre><code>
// Run the concatenate command and filter it with regex
$ cat /etc/ssh/ssh_config | grep -l
</code></pre>
<p><code>grep [pattern] [filename]</code> - </p>

<h2>Text Editors</h2>
<h4>VIM</h4>
<p><code>vi [filename]</code></p>
<ul>
  <li><code>i</code> - <b>INSERT</b> mode</li>
  <ul>
    <li><code>a</code> - <b>append</b></li>
    <li><code>:w</code> - <b>write</b> (save)</li>
    <li><code>:q</code> - <b>quit</b></li>
  </ul>
</ul>
<h4>NANO</h4>
<p><code>nano [filename]</code></p>
<h4>gEdit</h4>
<p><code>gedit [filename]</code></p>


';

      return $returnValue;
    }

  }
}