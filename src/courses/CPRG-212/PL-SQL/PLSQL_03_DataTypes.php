<?php

namespace J\ClassNotes {

  class PLSQL_03_DataTypes extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DataTypes
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PL SQL - Data Types
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Data Types</h2>
<table class="table">
  <tr>
    <th>SQL Server</th>
    <th>Oracle</th>
  </tr>
  <tr>
    <td>CHAR</td>
    <TD>CHAR</TD>
  </tr>
  <tr>
    <td>VARCHAR</td>
    <td>VARCHAR2</td>
  </tr>
  <tr>
    <td>DATETIME</td>
    <td>DATE</td>
  </tr>
  <tr>
    <td>NUMERIC</td>
    <td>NUMBER</td>
  </tr>  
</table>
<hr>

<h2>Levels of Commits</h2>
<h4>Isolation Levels</h4>
<ol>
  <li>
    <b>Read Commited</b> (Default) - other users cannot see your inserts & updates until you commit
  </li>
  <li>
    <b>Read Uncommited</b> - others can see your inserts & updates before you commit them
    <br><em>Amazon uses this so that if you add a item to your cart, the stock is changed</em>
  </li>
  <li>
    <b>Repeatable Read</b> - Locks data shown on selects so it cannot be changed
    <br><em>freezes the database UPDATEs but not INSERTs</em>
  </li>
  <li>
    <b>Serializable</b> - Locks UPDATEs <em>and</em> INSERTs so data does not change at all
  </li>
  <li>
    <b>Snapshot</b> - Makes a copy of the database so that the database is still in full operation
  </li>
</ol>
';

      return $returnValue;
    }

  }
}