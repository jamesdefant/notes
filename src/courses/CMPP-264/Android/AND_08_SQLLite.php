<?php

namespace J\ClassNotes {

  class AND_08_SQLLite extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SQLite
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQLite on Android
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $dataTypes = [
        ["TYPE", "DESCRIPTION"],
        ["TEXT", "Similar to Java - String"],
        ["INTEGER", "Simliar to Java - long"],
        ["REAL", "Similar to Java - double"]
      ];

      $returnValue = '
<h2>Intro</h2>
<p><a href="http://www.sqlite.org" target="_blank">http://www.sqlite.org</a> </p>
<p><a href="https://www.sqlitetutorial.net/" target="_blank">https://www.sqlitetutorial.net/</a> </p>
<p>Android\'s built-in database is <b>SQLLite</b></p>
<p>There are a limited number of data-types:</p>
' . \WriteHTML::getTable($dataTypes) . '
<p>SQLLite doesn\'t validate data - you can put text in numeric columns</p>
<p>Packages:</p>
<ul>
  <li><code>android.database</code></li>
  <li><code>android.database.sqlite</code></li>
</ul>

<h2>Setup</h2>
<ol>
  <li>
    Subclass <code>SQLiteOpenHelper</code><br>
    <b>override <code>onCreate()</code> and <code>onUpgrade()</code> methods</b>
  </li>
  <li>
    Create a datasource class with methods to create, update, and delete rows<br> 
    <b>or</b><br>
    Create a data access object to act as a model for storing the data for an object that is retrieved from the database
  </li>
  <li>Set up event handlers in the app that will respond to user interaction with displayed data</li>
</ol>
<hr>

<h2>SQLite Database Browser</h2>
<p>Data management utility to manipulate SQLite files</p>
<p><a href="https://sqlitebrowser.org/" target="_blank">https://sqlitebrowser.org/</a> </p>

';

      return $returnValue;
    }

  }
}