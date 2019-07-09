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
<h2>Intro</h2>
<p>To add a database file to a VS project:</p>
<ol>
  <li>
    <kbd>Right-click</kbd> the current project in the <kbd>Solution Explorer</kbd> and choose 
    <kbd>Add</kbd> => <kbd>Existing Item...</kbd> and choose the .mdf file you would like to import
  </li>
  <li>In the <kbd>Data Sources</kbd> panel, select <kbd>Add New Data Source...</kbd></li>
  <li>Select <kbd>Database</kbd> and click <kbd>Next ></kbd></li>
  <li>Select <kbd>Dataset</kbd> and click <kbd>Next ></kbd></li>
  <li>Click the <kbd>New Connection...</kbd> button and choose the Data source by clicking <kbd>Change...</kbd></li>
  <li>Choose <kbd>Microsoft SQL Server Database File</kbd> and click <kbd>OK</kbd></li>
  <li>Choose the Database file name by clicking <kbd>Browse...</kbd></li>
  <li>Navigate to the new file that was added to the project and click <kbd>Open</kbd></li>
  <li>Click <kbd>OK</kbd> to add the database</li>
</ol>


';

      return $returnValue;
    }

  }
}