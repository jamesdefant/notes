<?php

namespace J\ClassNotes {

  class CSDB_08_LINQ extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
LINQ
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Language Integrated Query
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p><b>LINQ</b> is a querying language construct within the .NET Framework itself</p> 
<p>It allows for proper debugging</p>
<p>It defines a common syntax for querying various data sources</p>
<ul>
  <li>Databses - LINQ to DataSets, LINQ to SQL, LINQ to Entities</li>
  <li>XML</li>
  <li>Collections</li>
</ul>
<p>
  This makes it easier to use objects with relational data sources by providing  
  designer tools to create object-relational mappings
</p>
<hr/>

<h2>3 Stages of LINQ</h2>
<ol>
  <li>Get the data source</li>
  <li>Define the query expression</li>
  <li>Execute the query to get ressults (deferred execution)</li>
</ol>
<hr/>

<h3>For example - an array:</h3>
<pre><code>
// Define the array
decimal[] numbers = { 2.5, 7.8, 4.3, -3.2, 5.1, 0 };

// Define the query - use the var keyword to handle whatever the query may return
var numberList = from num in numbers
                 where num > 0
                 orderby num descending
                 select num;

</code></pre>
<hr/>

<h2>Clauses</h2>
<ul>
  <li><code>from</code></li>
  <li><code>in</code></li>
  <li><code>where</code></li>
  <li><code>orderby</code></li>
  <li><code>select</code></li>
  <li><code>let</code></li>
  <li><code>join</code></li>
  <li><code>on</code></li>
  <li><code>equals</code></li>  
  <li><code>group</code></li>
  <li><code>new</code></li>
</ul>
<hr/>

<h2>from / in</h2>
<pre><code>
from [type] elementName in collectionName
</code></pre>
<hr/>

<h2>Methods</h2>
<ul>
  <li><code>Single()</code></li>
</ul>
<hr/>

<h2>LINQ to SQL</h2>

<div class="alert alert-danger" role="alert">
  <b>Only works with Microsoft SQL Server</b>
</div>
<ol>
  <li>Add a new item to you Forms project</li>
  <li>Select the <kbd>Data Panel</kbd> from the add new item window</li>
  <li>Choose <kbd>LINQ to SQL Classes</kbd> and name your new class (ProductsData) and click OK</li>
  <li>Navigate to the <b>Server Explorer</b> panel and select your database</li>
  <li>Unfold the database to expose the tables and drag your table(s) to the Design surface</li>
  <ul><li>This creates a UML class diagram</li></ul>
  <li>Navigate to the <b>Data Sources</b> panel and create a new data source <b>OBJECT</b></li>
  <li>Choose the <b>LINQToSQL</b> table and click <kbd>Finish</kbd></li>
  <li>From the <b>Data Sources</b> panel, drag the table onto the form to create a DataGrid</li>
  <li>Code a form event to load data into the DataGrid</li>
  <pre><code>
private void Form1_Load()
{
  using(ProductsDataDataContext dbContext = new ProductsDataDataContext())
  {
    productDataGridView.DataSource = dbContext.Products;
  }
}  
  </code></pre>
</ol>
<hr/>

<h2>INSERT Function</h2>
<pre><code>
// Button Add event handler
private void btnAdd_Click(object sender, EventArgs e)
{
  if(--Validates--)
  {
    // Create a new object from provided data
    Product newProduct = new Product
    {
      ProductCode = productCodeTextBox.Text,
    };
  }
}
</code></pre>

';

      return $returnValue;
    }

  }
}