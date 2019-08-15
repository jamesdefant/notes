<?php

namespace J\ClassNotes {

  class PLSQL_01_Setup extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ORACLE
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Oracle - PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Setup</h2>
<p>Before you begin, you\'ll need to do the following:</p>
<ul>
  <li>Install the Java SDK - 32bit | <a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">jdk_8u221-32bit</a></li>
  <li>Change the start property of SQL Plus to <code>C:\\SQL</code></li>
  <li>Change target property of SQL developer to use <code>.exe</code> (not <code>.bat</code>)</li>
</ul>


<p>Under Command Prompt run: <code>lsnrctl status</code> to check if the database is running</p>


<h2>Run SQL Plus</h2>
<ol>
  <li>login: un: system  | pw: oracle</li>
  <li>type <code>password</code> to change the password of the current useralter user </li>
  <li>type <code>alter user scott account unlock;</code> to alter the user <em>scott</em></li>
  <li>type <code>password</code> to alter the password to "tiger"(keep it from expiring)</li>
</ol>

<h2>Run SQL Developer</h2>
<ol>
  <li>Locate the <code>java.exe</code> in the <kbd>ProgramFilesx86/Java/JDK/</kbd> path</li>
  <li>Don\'t migrate any settings (or do it if you want - FML!)</li>
  <li>Confirm that this is an old Piece of Oracle Software</li>
  <li>
    Define your connection:
    <ul>
      <li>Connection Name: <code>Name your connection</code></li>
      <li>Username: <code>scott</code></li>
      <li>Password: <code>tiger</code></li>
      <li>SID: <code>orcl</code></li>
    </ul>
  </li>
</ol>

<h2>Run SQL Scripts</h2>
<p>In <kbd>SQL Plus</kbd> use the <code>START</code> command to run a .sql script</p>
<ol>
  <li>AR</li>
  <li>getXML</li>
  <li>3ClearWater</li>
</ol>
<pre><code>
START c:\sql\AR
...
</code></pre>
<hr>

<h2>Customize your SQL Plus</h2>
<p>Navigate to <kbd>c:\app\Administrator\product\11.2.0\dbhome_1\sqlplus\admin</kbd></p>
<p>Alter glogin.sql to set variables that you would every single session:</p>
<pre><code>
set linesize 60
set pagesize 80

set serveroutput on
show errors
</code></pre>

';

      return $returnValue;
    }

  }
}