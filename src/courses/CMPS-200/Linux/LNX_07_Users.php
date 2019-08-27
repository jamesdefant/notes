<?php

namespace J\ClassNotes {

  class LNX_07_Users extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Users
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Managing Users
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Users</h2>
<h3><kbd>useradd</kbd></h3>
<p>
  In the terminal, as the administrator or root, type <kbd>useradd</kbd> to add a new user to the system. 
  This also creates a /home folder for that user. Then run <kbd>passwd</kbd> to set a password for that user.
</p>
<h5>useradd flags</h5>
<ul>
  <li>
    <kbd>-b [BASE_DIR]</kbd> or <kbd>--base-dir [BASE_DIR]</kbd><br>
    <code>useradd -b /home/geeks/James James</code><br>
    <b>The default base directory for the system if <kbd>-d HOME_DIR</kbd> is not specified</b>
  </li>
  <li>
    <kbd>-c [COMMENT]</kbd> or <kbd>--comment [COMMENT]</kbd><br>
    <code>useradd -c "James Defant" James</code><br>
    <b>Any text string</b><br>
    It is generally a short description of the login, and is currently used as the field for the user\'s full name.
  </li>
  <li>
    <kbd>-d [HOME_DIR]</kbd> or <kbd>--home-dir [HOME_DIR]</kbd><br>
    <code>useradd -d /home/geeks/James James</code><br>
    <b>The new user will be created using <kbd>HOME_DIR</kbd> as the value for the user\'s login directory</b>
  </li>
  <li>
    <kbd>-e [EXPIRE_DATE]</kbd> or <kbd>--expiredate [EXPIRE_DATE]</kbd><br>
    <b>The date on which the user account will be disabled. The date is specified in the format YYYY-MM-DD</b>
  </li>
  <li>
    <kbd>-g [GROUP_ID]</kbd> or <kbd>--gid [GROUP_ID]</kbd><br>
    <b>The group name or number of the user\'s initial login group</b>
  </li>
  <li>
    <kbd>-G [GROUP1],[GROUP2],...</kbd> or <kbd>--groups [GROUP1],[GROUP2],...</kbd><br>
    <b>A list of supplemetary groups which the user is also a member of.</b><br>
     Each group is seperated by a comma, with no intervening whitespace
  </li>
  <li>
    <kbd>-k [SKEL_DIR]</kbd> or <kbd>--skel [SKEL_DIR]</kbd><br>
    <b>The skeleton directory to be copied to the user\'s home directory upon account creation</b>
  </li>
  <li>
    <kbd>-r</kbd> or <kbd>--system</kbd><br>
    <b>Create a system account.</b><br> A system account won\'t
    expire and won\'t, by default, create a home directory 
  </li>  
  <li>
    <kbd>-s [SHELL]</kbd> or <kbd>--shell [SHELL]</kbd><br>
    <b>The name of the user\'s login shell.</b><br> The default is to leave this field blank, which causes the 
    system to select the default login shell specified by the <b>SHELL</b> variable in /etc/default/useradd 
  </li> 
  <li>
    <kbd>-u [UI_D]</kbd> or <kbd>--uid [UI_D]</kbd><br>
    <b>The numerical value of the user\'s ID.</b><br>
    This value must be unique, unless the <b>-o</b> option is used. The value must be non-negative     
  </li>  
</ul>

<h3><kbd>usermod</kbd></h3>
<p>Adjust group memberships with <kbd>usermod</kbd></p>
<h5>usermod flags</h5>
<ul>
  <li>
    <kbd>-a</kbd> or <kbd>--append</kbd><br>
    <b>Add the user to the supplementary group(s).</b> Use only with the -G option
  </li>
  <li>
    <kbd>-d [HOME_DIR]</kbd> or <kbd>--home [HOME_DIR]</kbd><br>
    <b>The user\'s new login directory.</b> If the -m option is given, the contents of the current home directory will be
    moved to the new home directory, which is created if it does not already exist. If the current home directory does 
    not exist, the new home directory will not be created
  </li>
  <li>
    <kbd>-e [EXPIRE_DATE]</kbd> or <kbd>--expiredate [EXPIRE_DATE]</kbd><br>
    <b>The date on which the user account will be disabled.</b> The date is specified in the format YYYY-MM-DD
  </li>
  <li>
    <kbd>-g [GROUP_ID]</kbd> or <kbd>--gid [GROUP_ID]</kbd><br>
    <b>The group name or number of the user\'s initial login group</b>
  </li>
  <li>
    <kbd>-G [GROUP1],[GROUP2],...</kbd> or <kbd>--groups [GROUP1],[GROUP2],...</kbd><br>
    <b>A list of supplemetary groups which the user is also a member of.</b><br>
     Each group is seperated by a comma, with no intervening whitespace. The groups are subject to the same restrictions
     as teh group given the <b>-g</b> option
  </li>  
  <li>
    <kbd>-L</kbd> or <kbd>--lock</kbd><br>
    <b>Lock a user\'s password.</b> This puts a \'!\' in front of the encrypted password, effectively disabling the password.
    You can\'t use this option with -p or -U. Note: if you wish to lock the account (not only access with a password), 
    you should also set the EXPIRE_DATE to 1
  </li>
  <li>
    <kbd>-m</kbd> or <kbd>--move-home</kbd><br>
    <b>Move the content of the user\'s home directory to the new location.</b> If the current home directory does not exist
    , the new home directory will not be created. This option is only valid in combination with the -d (or --home) option
  </li>  
</ul>

<p>
  Delete a user with <kbd>userdel</kbd>. Does not delete the /home directory - 
  only removes it from the config files. Generally orphans files. Disable the account instead
</p>

<h3><kbd>passwd</kbd></h3>
<p>Update a user\'s authentication tokens (password) with <kbd>passwd</kbd></p>
<ul>
  <li>
    <code>passwd James</code><br>
    Then follow the prompts to input a new password
  </li>
</ul>

<h2>Groups</h2>
<h3><kbd>groupadd</kbd></h3>
<p>Add a new group - <kbd>groupadd</kbd></p>
<ul>
  <li>
    <kbd>-r</kbd> or <kbd>--system</kbd><br>
    <code>groupadd -r Admin</code><br>
    <p><b>Create a system group</b></p>
  </li>
  <li>
    <kbd>-g [GID]</kbd> or <kbd>--gid [GID]</kbd><br>
    <code>groupadd -g 3003 Admin</code><br>
    <p>
      <b>The numerical value of the group\'s ID.</b><br>
      This value must be unique, unless the <b>-o</b> option is used. The value must be non-negative 
    </p>
  </li>  
</ul>

<p>Modify a group - <kbd>groupmod</kbd></p>
<p>Delete a group - <kbd>groupdel</kbd> - disable group instead</p>

<h2>Management</h2>
<p>
  Type <kbd>tail [file]</kbd> to show either /etc/passwd, /etc/group, or /etc/shadow and display the permission, 
  password, groups, etc.
</p>

<h2>Sym(bolic)-links</h2>
<p>Type <kbd>ln -s TARGET LINK_NAME</kbd> to create a sym-link (alias/shortcut) to another location</p>
<ul>
  <li>
    <kbd>-s</kbd> or <kbd>--symbolic</kbd><br>
    <code>ln -s /etc/sysdata Sysdata</code><br>
    <p><b>Creates a symbolic link instead of a hard link</b></p>
  </li>
</ul>


<h2>Permissions</h2>
<p>Type <kbd>chown</kbd> to change file owner and group</p>
<ul>
  <li>
    <kbd>chown USER:GROUP FILENAME</kbd><br>    
  </li>
</ul>

<p>Type <kbd>chmod</kbd> to change file mode bits</p>
<ul>
  <li>
    <kbd>chmod [ugorwx] FILENAME</kbd><br> 
    <code>chmod u=rwx,g=rw,o=r file.txt</code>   
  </li>
</ul>

<h2>ACL with facl</h2>
<p>
  Type <kbd>setfacl</kbd> to set Access Control Lists (permissions):<br>
  <kbd>setfacl -m [u/g]:NAME:[-/r/x/x] FILENAME/DIRECTORY</kbd><br>
  For example: Give User Larry read+write permission
  <code>setfacl -m u:Larry:rw /tmp/ACL</code>
</p>
<p>
  Type <kbd>getfacl</kbd> to display ACL permissions:<br>
  <kbd>getfacl FILENAME/DIRECTORY</kbd><br>
  <code>setfacl /tmp/ACL</code>
</p>

';

      return $returnValue;
    }

  }
}