<?php

namespace J\ClassNotes {

  class MVC_02_Database extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Database
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Manipulate the Database in MVC
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>LocalDB is a lightweight version of the SQL Server Express Database Engine</p>
<p>Runs in a special execution mode that allows working with a database as well as .mdf files</p>
<p>Can be migrated to SQL Server or Azure for production</p>

<h2>Create a Database</h2>
<ol>
  <li>Open <b>Server Explorer</b> panel and click <kbd>Connect to Database</kbd> button</li>
  <ul><li>Identify the SQL Server instance (If you supply a database name that does not exist, it will be created)</li></ul>
  <li><b>Right-click</b> on <kbd>Tables</kbd> (in <b>Server Explorer panel</b>) and click <kbd>Add New Table</kbd></li>
  <li>Type in an SQL command or use the <b>Design</b> view to create your table, rename it in the script and click <kbd>Update</kbd></li>
  <li>Click <kbd>Update Database</kbd> to generate the table</li>
  <li>In the <b>Server Explorer</b> panel, <b>right-click</b> the table and click <kbd>Show Table Data</kbd></li>
  <li>Add data into the data grid (after every row entry the row will be commited to the database)</li>
  <ul><li>Check the database in SQL Server</li></ul>
</ol>
<hr/>

<h2>Controllers</h2>
<p>Every Entity (model) should have it\'s own controller</p>
<hr/>

<h2>Validation</h2>
<p>Use annotations (atrributes) to validate public properties within the model class</p>
<h3>Useful annotations:</h3>
<ul>
  <li><code>[Required]</code></li>
  <li><code>[DataType(DataType.Date)]</code></li>
  <li><code>[DisplayFormat(DataFormatString = "{0:yyy-MM-dd}", ApplyFormatInEditMode = true)]</code></li>
  <li><code>[Range(1, 100)]</code></li>
  <li><code>[DataType(DataType.Currency)]</code></li>
  <li><code>[StringLength(5)]</code></li>
</ul>
<p>Stack the annotations:</p>
<pre><code>
[Column("FirstName")]
[Display(Name = "Given Name")]
[StringLength(20, ErrorMessage = "Given name can have up to 20 letters")]
public string GivenName { get; set; }
</code></pre>
';

      return $returnValue;
    }

  }
}