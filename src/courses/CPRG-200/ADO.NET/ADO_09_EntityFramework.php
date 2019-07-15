<?php

namespace J\ClassNotes {

  class ADO_09_EntityFramework extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Entity FW
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Microsoft Entity Framework
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>The <b>Entity Framework</b> is a layer between the databasae and the objects used by the application</p>
<p>It is database <b>agnostic</b> - meaning that you can use it with any relational database</p>
<p>It defines:</p>
<ul>
  <li>A conceptual model</li>
  <li>A stroage model</li>
  <li>and mappings between the two models</li>
</ul>
<hr/>

<h2>Setup</h2>
<ol>
  <li>Create a <b>Forms</b> project</li>
  <li>Add a new item</li>
  <li>Choose <kbd>Entity Data Model</kbd></li>
  <li>Select <b>SQL Server</b></li>
  <li>Define your <b>host</b></li>
  <li>Test your connection</li>
  <li>Click Next</li>
  <li>Choose Entity 6.x</li>
  <li>Select your tables</li>
  <li>Click Finish</li>
  <li><b>Build your solution!!</b></li>
</ol>
<hr/>

<h2>Add Data Sources</h2>
<ol>
  <li>Add a new Data Source</li>
  <li>Select <b>Object</b> as a Data Source</li>
  <li>Select your project</li>
  <li>Select the tables you added as <b>Entities</b></li>
</ol>


';

      return $returnValue;
    }

  }
}