<?php

namespace J\ClassNotes {

  class SQL_09_SubQueries extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Sub-Queries
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Sub-Queries
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>You can create a <code>SELECT</code> statement within a <code>SELECT</code> statement to make a more complex query</p>

<h2>Sample Data</h2>
<p>These are the tables we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
\WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_salespeople.rpt").
\WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_customers.rpt").
'<hr>

<h2>Nested Column</h2>
<p>This nested <code>SELECT</code> acts like a column and <strong>only returns one value</strong></p>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/SubQuery_AsColumn.rpt") .
'<hr/>

<h2>Nested Table</h2>
<p>This nested <code>SELECT</code> acts like a table and <strong>can return multiple rows</strong></p>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/SubQuery_AsColumn.rpt") .
          '<hr/>




';

      return $returnValue;
    }

  }
}