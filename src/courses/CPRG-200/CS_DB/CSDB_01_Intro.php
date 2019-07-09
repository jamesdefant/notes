<?php

namespace J\ClassNotes {

  class CSDB_01_Intro extends Page
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
Working with Data in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  It is important to <em>seperate</em> the concerns of a program - so that the logic that drives the GUI
  is seperated from the logic that drives the database logic and the business logic that fits in between
</p>
<p>There are two ways to work with a database:</p>
<ul>
  <li><strong>Disconnected architecture</strong> - uses Datasets</li>
  <li><strong>Connected architecture</strong> - uses ADO.NET connection andcommand objects</li>
</ul>
<hr/>

<h2>ADO.NET</h2>
<p><strong>ActiveX Data Objects .NET</strong> - primary data access API for the .NET Framework</p>
<p>Same tools in C# and in other .NET languages</p>
<p>A part of the .NET Framework as opposed to being part of C#</p>
<p><strong>Data Providers</strong> - set of classes to work with various kinds of databases</p>
<p><strong>Datasets</strong> - classes that can be used to store data from the database to work on in the application - diconnected model</p>
<hr/>

<h2>Components</h2>
<p>Basic ADO.NET Component</p>
<img class="img-fluid" src="img/CPRG_200/DBO_Components.PNG" />
<hr/>

<h2>Concurrency Access</h2>
<p>
  If two users retrieve the same table into their datasets at the same time and one user makes 
  changes, a <code>Concurrency Exception</code> may be raised if <strong>optimistic concurrency</strong>
  is enabled - which is the default behaviour of ADO.NET
</p>
<p>
  If <strong>optimistic concurrency</strong> isn\'t enabled, the last change is the one that is
  inserted into the database 
</p>
<p>To minimize these concurrency exceptions it is best to:</p>
<ul>
  <li>Refresh the dataset often</li>
  <li>Work with small pieces of the dataset at one time</li>
</ul> 
<hr/>

<h2>Basic Dataset Object Hierarchy</h2>
<img class="img-fluid" src="img/CPRG_200/Dataset_Hierarchy.PNG" />



';

      return $returnValue;
    }

  }
}