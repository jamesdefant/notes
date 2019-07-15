<?php

namespace J\ClassNotes {

  class ADO_04_ADONET extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ADO.NET
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
ADO.NET in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Working with ADO.NET seperates the application into various layers:</p>
<ol>
  <li>The <strong>Presentation</strong> layer</li>
  <li>The <strong>Business Logic</strong> layer</li>
  <li>The <strong>Database Access</strong> layer</li>
</ol>
<hr/>

<h2>Define Classes</h2>
<p>Presentation classes</p>
<ul>
  <li>As needed for various GUI screens</li>
  <li>May add service classes, forexample containing validation methods that may be used on various forms</li>  
</ul>
<p>Business clases</p>
<ul>
  <li><strong>One</strong> busineess class for each enetity</li>
  <li>
    In database application, a good start is to make entity class for <strong>each relevant database table</strong>
    (but this is not an absolute requirement)
  </li>  
</ul>
<p>Data Access classes</p>
<ul>
  <li>One data access class for ht ewhole database (establishes connection)</li>
  <li>A seperate data access class for each enetity</li>  
</ul>
<hr>

<h2>Database Connection</h2>
<p>Start by providing tools for establishing a database connection:</p>
<h3>Two constructors for the SqlCOnnection class</h3>
<ul>
  <li><code>new SqlConnection()</code></li>
  <li><code>new SqlConnection(connectionString)</code></li>
</ul>
<h3>Common properties and methods of the SqlConnection class</h3>
<ul>
  <li><code>ConnectionString</code></li>
  <li><code>Open()</code></li>
  <li><code>Close()</code></li>
</ul>
<p>Two Connection strings for the SQL Server provider</p>
<h3>For a SQL Server Express LocalDB database</h3>
<pre><code>
Data Source=(LocalDB)\\MSSQLLocalDB;
AttachDbFilename=C:\\Databases\\MMABooks.mdf;
Integrated Security=True
</code></pre>
<h3>A connection string for a SQL Server Express database</h3>
<pre><code>
Data Source=localhost\\SqlExpress;
Initial Catalog=MMABooks;
Integrated Security=True
</code></pre>
<hr/>

<h2>Commands</h2>
<p>To retrieve and update data, we need to create command objects - specifically SqlCommand objects</p>
<h3>Three constructors for the SqlCommand class:</h3>
<ul>
  <li><code>new SqlCommand()</code></li>
  <li><code>new SqlCommand(commandText)</code></li>
  <li><code>new SqlCommand(commandText, connection)</code></li>
</ul>
<h3>Common properties of the SqlCommand class</h3>
<ul>
  <li><code>Connection</code></li>
  <li><code>CommandText</code></li>
  <li><code>CommandType</code></li>
  <li><code>Parameters</code></li>
</ul>
<h3>Common methods of the SqlCommand class</h3>
<ul>
  <li><code>ExecuteReader()</code> - to retrieve multiple rows</li>
  <li><code>ExecuteNonQuery()</code> - to execute commands <strong>INSERT, UPDATE,</strong> or <strong>DELETE</strong></li>  
  <li><code>ExecuteScalar()</code> - To retrieve single value</li>
</ul>


';

      return $returnValue;
    }

  }
}