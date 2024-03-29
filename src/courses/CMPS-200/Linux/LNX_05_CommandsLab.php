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
  <p><kbd>history -c</kbd> - clear the history list by deleting all the entries</p>    
</li>

<li>
  <code>find</code> - serch for files in a directory hierarchy
  <p><kbd>find -warn</kbd> or <kbd>-nowarn</kbd> - turn warning messages <b>on</b> or <b>off</b></p>  
</li>
<li>  
  <code>ssh</code> - open SSH Client to log into a remote machine
  <p><kbd>ssh -q</kbd> - quiet mode - causes most warning and diagnostic messages to be suppressed</p>    
</li>
<li>
  <code>scp</code> - secure file copy (remote file copy)
  <p><kbd>scp -p</kbd> - preserves modification times, access times, and modes form the original file</p>    
</li>
<li>
  <code>vi</code> - VIM - Vi IMproved - a programmer\'s text editor
  <p><kbd>vi -x</kbd> - use encryption when writing files. Will prompt for a crypt key</p>    
</li>
<li>
  <code>grep</code> - print lines matching a pattern
  <p>
    <kbd>grep -i</kbd> or <kbd>--ignore-case</kbd> - ignore case distinctions in both the PATTERN and 
    the input files
  </p>     
</li>
<li>
  <code>useradd</code> - create a new user or update default new user information
  <p><kbd>useradd -m</kbd> or <kbd>--create-home</kbd> - create the user\'s home directory if it does not exist</p>  
</li>
<li>
  <code>userdel</code> -  delete a user account and related files
  <p>
    <kbd>userdel -r</kbd> or <kbd>--remove</kbd> - files in the user\'s home directory will be removed along with 
    the home directory itself and the user\'s mail spool
  </p>     
</li>
<li>
  <code>usermod</code> - modify a user account
  <p>
    <kbd>usermod -e</kbd> or <kbd>--expire-date EXPIRE_DATE</kbd> - the date on which the user account wil be disabled.
    The date is specified in the format <b>YYY-MM-DD</b>
  </p>     
</li>

<li>
  <code>passwd</code> - update user\'s authentication tokens (password)
  <p>
    <kbd>passwd -d</kbd> or <kbd>--delete</kbd> - this is a quick way to delete a password for an account.
    It will set the named account passwordless. Available to root only
  </p>  
</li>
<li>
  <code>groupadd</code> - create a new group
  <p><kbd>groupadd -r</kbd> or <kbd>--system</kbd> - creates a system group</p>     
</li>
<li>
  <code>groupdel</code> - delete a group <br>
  (can not remove the primary group of any existing user. Remove the user before the group)
  <p>
    <kbd>groupdel -R</kbd> or <kbd>--root</kbd> - apply changes in the CHROOT_DIR directory and 
    use the configuration files from the CHROOT_DIR directory
  </p>    
</li>
<li>
  <code>df</code> - report file system disk usage 
  <p><kbd>df -h</kbd> or <kbd>--human-readable</kbd> - print sizes in human readable format</p>    
</li>
<li>
  <code>du</code> - estimate file space usage
  <p><kbd>du -h</kbd> or <kbd>--human-readable</kbd> - print sizes in human readable format</p>    
</li>
<li>
  <code>date</code> - print or set the system date and time
  <p>
    <kbd>date -R</kbd> or <kbd>--reference=FILE</kbd> - output date and time in RFC 3339 format<br>
    <b>2006-08-07 12:34:56-06:00</b>
  </p>      
</li>
<li>
  <code>alias</code> - either print all the aliases that are set or set an alias
  <p><kbd>alias [alias_name]=\'[command]\'</kbd> - set the command to the alias [alias_name]</p>      
</li>
<li>
  <code>gzip</code> - compress a file
  <p>
    <kbd>gzip -l</kbd> or <kbd>--list</kbd> - for each compressed file, list the following fields:
    <ul>
      <li>compressed size</li>
      <li>uncompressed size</li>
      <li>ratio of compression</li>
      <li>uncompressed_name</li>
    </ul>
  </p>         
</li>
<li>
  <code>gunzip</code> - decompress a file 
  <p><kbd>gunzip -r</kbd> or <kbd>--recursive</kbd> - travel the directory structure recursively, decompressing all items</p>   
</li>
<li>
  <code>ps</code> -  report a snapshot of the current processes
  <p><kbd>ps -e</kbd> - report <b>every</b> process running on the system</p>  
</li>
<li>
  <code>kill</code> -  terminate a process
  <p><kbd>kill -s</kbd> or <kbd>--signal SIGNAL</kbd> - specify the signal to send. May be given as a signal name or number</p>  
</li>
<li>
  <code>jobs</code> - lists all active jobs
  <p><kbd>jobs -s</kbd> - restrict output to stopped jobs</p>   
</li>
<li>
  <code>top</code> - display Linux processes
  <p>
    <kbd>top -i</kbd> - <b>:Idle-process TOGGLE</b> - starts top with the last remembered \'i\' state reversed. When this is <b>off</b>
    tasks that have not used any CPU since the last update will not be displayed
  </p>     
</li>
<li>
  <code>chmod</code> - change file mode bits
  <p><kbd>chmod -R</kbd> or <kbd>--recursive</kbd> - change files and directories recursively</p>     
</li>
<li>
  <code>chown</code> - change file owner and group
  <p><kbd>chmod -R</kbd> or <kbd>--recursive</kbd> - operate on files and directories recursively</p>     
</li>
<li>
  <code>diff</code> - compare files line by line
  <p><kbd>diff -q</kbd> or <kbd>--brief</kbd> - report only when files differ</p>       
</li>
<li>
  <code>sort</code> - sort lines of text files
  <p><kbd>sort -b</kbd> or <kbd>--ignore-leading-blanks</kbd> - ignore leading blank characters</p>        
</li>
<li>
  <code>head</code> - output the first part of files
  <p>
    <kbd>head -n</kbd> or <kbd>--lines=[-]K</kbd> - print the first K lines instead of the first 10;<br>
    with the leading \'-\', print all but the last K lines of each file
  </p>          
</li>
<li>
  <code>wget</code> - Wget - the non-interactive network downloader
  <p><kbd>wget -i FILE</kbd> or <kbd>--input-file=FILE</kbd> - read URLs from a local or external file</p>          
</li>
<li>
  <code>yum</code> - YUM - Yellowdog Updater Modified - an interactive, rpm based, package manager 
  <p><kbd>yum install [package1] -y</kbd> or <kbd>--assumeyes</kbd> - assume <b>yes</b> to all following prompts</p>          
</li>
<li>
  <code>ping</code> - send ICMP ECHO_REQUEST to network hosts
  <p><kbd>ping -4</kbd> - use IPv4 only</p>           
</li>
<li>
  <code>ifconfig</code> - configure a network interface
  <p><kbd>ifconfig -a</kbd> - display all interfaces which are currently available</p>          
</li>
<li><code>ifup</code> - bring a network interface up</li>
<li><code>ifdown</code> - take a network interface down</li>
<li>
  <code>dhclient</code> - Dynamic Host Configuration Protocol Client - provides a means for configuring one or 
  more network interfaces using the Dynamic Host Configuration Protocol, BOOTP protocol, or 
  by statically assigning an address
  <p><kbd>dhclient -v</kbd> - enable verbose log messages</p>            
</li>


</ul>

';

      return $returnValue;
    }

  }
}