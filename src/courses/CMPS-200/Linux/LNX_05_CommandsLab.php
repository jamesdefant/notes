<?php

namespace J\ClassNotes {

  class LNX_05_CommandsLab extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
More Commands
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More Commands in Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Lab 3</h2>
<ul>
<li>
  <code>whoami</code> - print the user name associated with the current effective user ID
  <p><kbd>whoami --version</kbd> - outputs version information</p>
</li>
<li>
  <code>pwd</code> - print the full filename of current working directory
  <p><kbd>pwd -L</kbd> or <kbd>--logical</kbd> - includes all symlinks</p>
</li>
<li>
  <code>mkdir</code> - create a directory
  <p><kbd>mkdir -p</kbd> - <kbd>--parents</kbd> - no error if existing, make parent directories as needed</p>
</li>
<li>
  <code>rmdir</code> - remove the directory(ies) <b>if</b> they are empty
  <p><kbd>rmdir -p</kbd> or <kbd>--parents</kbd> - remove DRECTORY and it\'s ancestors;</p>
  <p>(ie. <kbd>rmdir -p a/b/c</kbd> is similar to <kbd>rmdir a/b/c a/b a</kbd>)</p>  
</li>
<li>
  <code>rm</code> - remove files or directories
  <p><kbd>rm -r</kbd> or <kbd>--recursive</kbd> - remove directories and their contents recursively</p>
</li>
<li>
  <code>mv</code> - move/rename file
  <p><kbd>mv -i</kbd> or <kbd>--interactive</kbd> - prompt before overwrite</p>
</li>
<li>
  <code>cp</code> - copy files and directories
  <p><kbd>cp -r</kbd> or <kbd>--recursive</kbd> - copy directories recursively</p>  
</li>
<li>
  <code>touch</code> - create a new, empty file or alter the <em>timestamps</em> of the selected file
  <p><kbd>touch -a</kbd>  - change only the access time</p> 
</li>
<li>
  <code>echo</code> - display a line of text
  <p><kbd>echo -n</kbd>  - do not output the trainling newline</p>
</li>
<li>
  <code>ls</code> - list directory contents
  <p><kbd>ls -a</kbd> or <kbd>-all</kbd> - do not ignore entries starting with .</p>
</li>
<li>
  <code>less</code> - a filter for paging through text on a screen which allows forward and backward movement
  <p>
    <kbd>less -N</kbd> or <kbd>--LINE-NUMBERS</kbd> - causes a line number to be displayed at the 
    beginning of each line in the display
  </p>   
</li>
<li>
  <code>more</code> - a filter for paging through text on screen at a time
  <p><kbd>more -s</kbd> - squeeze multiple blank lines into one</p>
</li>
<li>
  <code>cat</code> - concatenate files and print on the standard output
  <p><kbd>cat -b</kbd> or <kbd>--number-nonblank</kbd> - number nonempty output lines, overrides -n</p>  
</li>
<li>
  <code>su</code> - substitute user
  <p>
    <kbd>su -</kbd> or <kbd>-l</kbd> or <kbd>--login</kbd> - starts the shell as login shell with an environment 
    similar to a real login:\
    <ul>
      <li>clears all environment variables except for <b>TERM</b></li>
      <li>initializes the environment variables <b>HOME, SHELL, USER, LOGNAME, PATH</b></li>
      <li>changes to hte target user\'s home directory</li>
      <li>sets argv[0] of the shell to \'-\' in order to make the shell a login shell</li>
    </ul>
  </p>    
</li>
<li>
  <code>history</code> - print a list of the commands that have been issued in shell
  <p><kbd>histroy -c</kbd> - clear the history list by deleting all the entries</p>    
</li>

<li>
  <code>find</code> - serch for files in a directory hierarchy
  <p><kbd>find -warn</kbd> or <kbd>-nowarn</kbd> - turn warning messages <b>on</b> or <b>off</b></p>  
</li>
<li>  
  <code>ssh</code> - open SSH Client to log into a remote machine
  <p><kbd>find -warn</kbd> or <kbd>-nowarn</kbd> - turn warning messages <b>on</b> or <b>off</b></p>    
</li>
<li><code>scp</code></li>
<li><code>vi</code></li>
<li><code>grep</code> - </li>
<li><code>useradd</code> - </li>
<li><code>userdel</code> - </li>
<li><code>usermod</code> - </li>

<li><code>passwd</code> - </li>
<li><code>groupadd</code> - </li>
<li><code>groupdel</code> - </li>
<li><code>df</code> - </li>
<li><code>du</code> - </li>
<li><code>date</code> - </li>
<li><code>alias</code> - </li>
<li><code>gzip</code> - </li>
<li><code>gunzip</code> - </li>
<li><code>ps</code> - </li>
<li><code>kill</code> - </li>
<li><code>jobs</code> - </li>
<li><code>top</code> - </li>
<li><code>chmod</code> - </li>
<li><code>chown</code> - </li>
<li><code>diff</code> - </li>
<li><code>sort</code> - </li>
<li><code>head</code> - </li>
<li><code>wget</code> - </li>
<li><code>yum</code> - </li>
<li><code>ping</code> - </li>
<li><code>ifconfig</code> - </li>
<li><code>ifup</code> - </li>
<li><code>ifdown</code> - </li>
<li><code>dhclient</code> - </li>


</ul>

';

      return $returnValue;
    }

  }
}