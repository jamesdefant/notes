<?php

namespace J\ClassNotes {

  class ADO_07_DataSources extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Object Data Sources
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Data Sources in ADO.NET
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>When working with Data Sources, you must put your data access logic into class libraries</p>
<ol>
  <li>Build your solution so that your class libraries are compiled</li>
  <li>Add a Reference within the GUI project to the class library</li>
  <li>From the GUI project, select a datasource and select <strong>OBJECT</strong></li>
  <li>Select the entity (The class library) that you built</li>
  <li>The <strong>entity</strong> shows up as a data source in the <strong>Data Sources</strong> panel</li>
  <li>You can drag the table into the Form to create a DataGrid or a Detals list</li>  
</ol>
<hr/>

<h2>Bind The Data</h2>
<p>
  To fill the <b>DataGrid</b> with values from the databse, use the <b>DataSource property</b> of the 
  <b>DataGrid</b> object:
</p>
<pre><code>
// Get the list from the database class library
List&lt;Invoice&gt; _invoiceList = new List&lt;Invoice&gt;();

// Assign it to the GUI component\'s DataSource property 
invoiceDataGridView.DataSource =  _invoiceList;
</code></pre>
<p>When you need to refresh the DataGrid, use a <code>CurrencyManager</code> object</p>
<pre><code>
// If the update was accepted by the database
if(result == DialogResult.OK)   
{
  // Refresh the grid view 
  CurrencyManager cm = (CurrencyManager)invoiceDataGridView.BindingContext[_invoiceList];
}
</code></pre>

';

      return $returnValue;
    }

  }
}