<?php

namespace J\ClassNotes {

  class SQL_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL SERVER Intro
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Introduction</h2>
<a href="https://www.microsoft.com/en-us/learning/mcsa-sql2016-database-development-certification.aspx" target="_blank">Microsoft SQL SERVER Certification</a>
<hr>

<h2>Transact-SQL</h2>
<ul>
  <li>Data definition language statements</li>
  <li>data control language statements</li>
  <li>Data manipulation language statements</li>
</ul>

<h2>Define the database object</h2>

<h2>Comments</h2>
<pre><code>
SELECT * FROM table -- this is a comment
</code></pre>
<hr>

<h2>Attach a Database</h2>
<p>To import a *.mdf file:</p>
<ol>
  <li>right-click the <kbd>Databases</kbd> icon and select <kbd>Attach...</kbd></li>
  <li>Click <kbd>Add...</kbd> to add a database to the list</li>
  <li>Click <kbd>OK</kbd> to import the databases</li>
</ol>
<hr>

<h2>Create a .txt SQL script</h2>
<p>Open notepad and type:</p>
<pre><code>
USE demo
SELECT * FROM category
</code></pre>
<p>Save it as cat.txt</p>
<p>Grab the name of the server by right-clicking the server, selecting properties and copying it</p>
<p>Mine is: ICTVM-AHBC4DH7R/SAIT</p>
<p>Open up the command prompt (<kbd>cmd.exe</kbd>) then type:</p>
<pre><code>
osql -S ICTVM-AHBC4DH7R/SAIT -i c:\__SQL\cat.txt -E
</code></pre>
<p>...to run the command as a script</p>

<h2>Commands</h2>
<p>There are many keywords in SQL:</p>
<ul>
  <li><strong>SELECT</strong> - extracts data from a database</li>
  <li><strong>UPDATE</strong> - updates data in a database</li>
  <li><strong>DELETE</strong> - deletes data in a database</li>
  <li><strong>INSERT INTO</strong> - inserts new data into a database</li>
  <li><strong>CREATE DATABASE</strong> - creates a new database</li>
  <li><strong>ALTER DATABASE</strong> - modifies a database</li>
  <li><strong>CREATE TABLE</strong> - creates a new table</li>
  <li><strong>ALTER TABLE</strong> - modifies a table</li>
  <li><strong>DROP TABLE</strong> - deletes a table</li>
  <li><strong>CREATE INDEX</strong> - creates an index (search key)</li>
  <li><strong>DROP INDEX</strong> - deletes an index</li>
</ul>

CONTENT;



      return $returnValue;
    }

  }
}