<?php

namespace J\ClassNotes {

  class SQL_05_Alias extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Alias
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Aliases
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>SQL aliases are used to give a table, or a column in a table, a temporary name</p> 
<p>They are often used to make columns more readable</p>
<p>They only exist for the duration of the query</p>
<hr>

<h2>Sample Data</h2>
<p>These are the tables we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/ALL_ar_invoices.rpt").
\WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/ALL_ar_salespeople.rpt").
'<hr>

<h2>Column Alias Syntax</h2>
<pre><code>
SELECT column_name AS alias_name
FROM table_name
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/COLUMN_AS.rpt").
'<hr/>

<h2>Table Alias Syntax</h2>
<pre><code>
SELECT column_name(s)
FROM table_name AS alias_name
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/TABLE_AS.rpt").
'<hr/>
'
;

      return $returnValue;
    }

  }
}