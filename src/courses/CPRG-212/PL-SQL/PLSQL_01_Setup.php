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

<h2>File System</h2>
<p>To backup the data of the Oracle system, navigate to:<br><kbd>c:\app\Administrator\oradata</kbd></p>
<p>
  To check out the packages that are installed in the Oracle system navigate to:<br> 
  <kbd>c:\app\Administrator\product\[version]\dbhome_1\RDBMS\ADMIN</kbd>
</p>
<p><code>dbmsotpt.sql</code> - holds all the methods to print a line, read a line</p>
<p><code>utlfile.sql</code> - perform IO operations</p>

<p>
  To view detailed documentation, visit <a href="http://psoug.org/" target="_blank">http://psoug.org/</a> or 
  go directly to their <a href="http://psoug.org/reference/library.html" target="_blank">reference</a>
</p>

<h2>Defrag</h2>
<ol>
  <li>Create temporary table</li>
  <li>Copy fragmented data</li>
  <li>Put data back into main table</li>
</ol>
<ol>
  <li>Import the package: <kbd>utlchain</kbd></li>
  <li>Call the analyze function - <code>ANALYZE TABLE [tablename] LIST CHAINED ROWS;</code></li>
  <li>Create the temp table - <code>CREATE TABLE fragstuff AS SELECT * FROM demostuff WHERE rowid IN (SELECT head_rowid FROM chained_rows);</code></li>
  <li>Remove the fragmented data from main table - <code>DELETE FROM demostuff WHERE rowid IN (SELECT head_rowid FROM chained_rows);</code></li>
  <li>Put the data back in to the main table - <code>INSERT INTO demostuff SELECT * FROM fragstuff;</code></li>
  <li>Test if the fragments are gone - <code>DELETE FROM chained_rows;</code></li>
  <li>Analyze the table - 
  <pre><code>
  ANALYZE TABLE [tablename] LIST CHAINED ROWS;
  SELECT COUNT(*) FROM chained_rows;
  </code></pre></li>
</ol>
';

      return $returnValue;
    }

  }
}