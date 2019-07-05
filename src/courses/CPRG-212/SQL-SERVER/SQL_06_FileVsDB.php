<?php

namespace J\ClassNotes {

  class SQL_06_FileVsDB extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Files vs DBs
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Files vs Databases
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Differences</h2>

<table class="table">
  <thead>
    <tr>
      <th>Files</th>
      <th>Databases</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Only one person at a time ca change it</td>
      <td>Thousands of users can change at same time</td>
    </tr>
    <tr>
      <td>Limited Undo</td>
      <td>Can Undo to any date and time</td>
    </tr>
    <tr>
      <td>Must backup entire file</td>
      <td>Have option to backup changes only</td>
    </tr>
    <tr>
      <td>Cannot detected corrupted data</td>
      <td>Detects and Fixes corrupted data</td>
    </tr>
    <tr>
      <td>Has no integrity</td>
      <td>Has integrity - checks the relationships between tables</td>
    </tr>
    <tr>
      <td>Security on the File</td>
      <td>Security on Individual Rows and Columns</td>
    </tr>
  </tbody>
</table>
<hr>

<h2>Data Types</h2>
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>Data Types</th>
      <th>Maximum Size</th>
      <th>Example</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>STANDARD</th>    
      <td>CHAR</td>
      <td>256</td>
      <td>Name CHAR(30)</td>
      <td>Fixed Size</td>
    </tr>
    <tr>
      <th></th>    
      <td>VARCHAR</td>
      <td>4096</td>
      <td>Comments VARCHAR(400)</td>
      <td>Variable Size</td>
    </tr>
    <tr>
      <th></th>    
      <td>(NCHAR, NVARCHAR)</td>
      <td></td>
      <td>UNICODE - ASIAN Languages</td>
      <td>Takes twice the space</td>
    </tr>
    <tr>
      <th></th>    
      <td>NUMERIC</td>
      <td>32</td>
      <td>Customer# NUMERIC(6) - int</td>
      <td>Amount NUMERIC(8,2) - decimal</td>
    </tr>
    <tr>
      <th></th>    
      <td>DATETIME</td>
      <td></td>
      <td>Hired On</td>
      <td>DateTime</td>
    </tr>
    <tr>
      <th>MICROSOFT</th>    
      <td>int, long, short, float, double, decimal</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th></th>    
      <td>string, text</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th></th>    
      <td>image, binary (up to 4Gb)</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th></th>    
      <td>XML</td>
      <td></td>
      <td></td>
      <td><strong>Don't</strong> use microsoft's types</td>
    </tr>
  </tbody>
</table>
<hr>

CONTENT;

      return $returnValue;
    }

  }
}