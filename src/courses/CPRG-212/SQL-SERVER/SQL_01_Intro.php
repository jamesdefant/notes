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
<h2>What is it?</h2>
<p>Microsoft SQL Server is a Relational Database Management System (RDBMS) that stores and retrieves data</p>      
      
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
<hr/>
      

CONTENT;

      return $returnValue;
    }

  }
}