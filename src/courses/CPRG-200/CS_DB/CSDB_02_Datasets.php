<?php

namespace J\ClassNotes {

  class CSDB_02_Datasets extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Datasets
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Adding Datasets to Visual Studio Projects
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Database File</h2>
<p>To add a database file (.mdf) to a VS project:</p>
<ol>
  <li>
    <strong>Right-click</strong> the current project in the <strong>Solution Explorer</strong> and choose:<br/>
    <kbd>Add</kbd> => <kbd>Existing Item...</kbd> and choose the .mdf file you would like to import
  </li>
  <li>In the <strong>Data Sources</strong> panel, select <kbd>Add New Data Source...</kbd></li>
  <li>Select <strong>Database</strong> and click <kbd>Next ></kbd></li>
  <li>Select <strong>Dataset</strong> and click <kbd>Next ></kbd></li>
  <li>Click the <kbd>New Connection...</kbd> button and choose the Data source by clicking <kbd>Change...</kbd></li>
  <li>Choose <kbd>Microsoft SQL Server Database File</kbd> and click <kbd>OK</kbd></li>
  <li>Choose the Database file name by clicking <kbd>Browse...</kbd></li>
  <li>Navigate to the new file that was added to the project and click <kbd>Open</kbd></li>
  <li>Choose your type of <strong>Authentication</strong> - in this case Windows</li>
  <li>Click <kbd>OK</kbd> to add the database</li>
  <li>
    Click the checkbox <kbd>Show the connection string...</kbd> to view the connection string and
    to verify that it is a relative path
  </li>
  <li>Click <kbd>Next</kbd> twice</li>
  <li>Select your tables and click <kbd>Finish</kbd></li>
</ol>
<hr/>

<h2>Server Connection</h2>
<p>To connect to a SQL Server database, follow a similar route:</p>
<ol>
  <li>In the <strong>Data Sources</strong> panel, select <kbd>Add New Data Source...</kbd></li>
  <li>Select <strong>Database</strong> and click <kbd>Next ></kbd></li>
  <li>Select <strong>Dataset</strong> and click <kbd>Next ></kbd></li>
  <li>Click the <kbd>New Connection...</kbd> button and choose the Data source by clicking <kbd>Change...</kbd></li>
  <li>Choose <kbd>Microsoft SQL Server</kbd> and click <kbd>OK</kbd></li>
  <li>Type the name of the server (in this case <strong>localhost\james</strong>)</li>
  <li>Choose your type of <strong>Authentication</strong> (in this case Windows)</li>
  <li>
    Under <strong>Connect to a Database</strong> with <strong>Select or enter a database name:</strong> selected,
    choose your database from the dropdown (in this case Northwind)
  </li>
  <li>Click <kbd>Test Connection</kbd> to see if you connect properly</li>
  <li>Click <kbd>OK</kbd> to add the database</li>
  <li>
    Click the checkbox <kbd>Show the connection string...</kbd> to view the connection string and
    to verify that it is a relative path
  </li>
  <li>Click <kbd>Next</kbd> twice</li>
  <li>Select your tables and click <kbd>Finish</kbd></li>
</ol>
<hr/>

<h2>Generate a DataGrid</h2>
<p>
  You can select tables and columns to drag them into your application by navigating to the <strong>Data Sources</strong>
  panel, and unwinding the <strong>Dataset</strong>
</p>
<img src="img/CPRG_200/DataSources_tables.PNG" class="img-fluid"/>

<p>If you drag the table into the Form, it will create a <strong>DataGrid</strong> object</p>
<img src="img/CPRG_200/Table_Auto_DataGrid.PNG" class="img-fluid"/>
<hr/>

<h2>Generate a Detals view</h2>
<p>
  If you click the <strong>arrow</strong> on the right side of the <strong>table</strong>, you can instead choose a 
  <strong>Details View</strong> which will create a input for each column by the column\'s data type 
  (mostly <strong>Textboxes</strong>)
</p> 
<p>
  If you click the <strong>arrow</strong> on the right side of the <strong>column</strong>, you can change the type
  of input that Visual Studio will create:
</p>
  <ul>
    <li><strong>Textbox</strong></li>
    <li><strong>NumericUpDown</strong></li>
    <li><strong>ComboBox</strong></li>
    <li><strong>Label</strong></li>
    <li><strong>LinkLabel</strong></li>
    <li><strong>ListBox</strong></li>
    <li>or <strong>Custom</strong></li>
  </ul>
<img src="img/CPRG_200/DataSources_Details_Columns.PNG" class="img-fluid"/>
<p>Drag the <strong>Products</strong> table to the Form now and it will create all the inputs</p>

<img src="img/CPRG_200/Table_Auto_Details.PNG" class="img-fluid"/>
<hr/>

<h2>Bind the Dropdowns</h2>
<p>These generated <strong>Comboboxes</strong> don\'t have any data in them</p>
<p>Bind the data from a different table by clicking the <strong>small arrow in the top right corner of the ComboBox</strong></p>
<p>Select the <strong>CheckBox - Use Data Bound Items</strong></p>
<img src="img/CPRG_200/ComboBox_Tasks.PNG" class="img-fluid"/>
<p>...then choose the <strong>Data Source</strong> (the table to get the data from)</p>
<p>...the <strong>Display Member</strong> (the column of values to be <strong>displayed</strong>)</p>
<p>...the <strong>Value Member</strong> (the column of values that we are replacing)</p>
<p>...and the <strong>Selected Value</strong> (the <strong>value</strong> to be set)</p>
<img src="img/CPRG_200/ComboBox_Tasks_Filled.PNG" class="img-fluid"/>
<div class="alert alert-danger" role="alert">
  Don\'t forget to change the <strong>Data Bindings</strong> > <strong>Text</strong> property to <strong>None</strong>
  to prevent errors!
</div>
<img src="img/CPRG_200/ComboBox_DataBinding_Properties.PNG" class="img-fluid"/>



';

      return $returnValue;
    }

  }
}