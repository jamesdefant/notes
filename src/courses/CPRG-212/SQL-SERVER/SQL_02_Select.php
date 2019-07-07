<?php

namespace J\ClassNotes {

  class SQL_02_Select extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SELECT
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL SELECT Command
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>SELECT is one of the most common commands used in SQL</p>      
<hr/>      
      
<h2>Syntax</h2>
<em>*Not all keywords are required*</em>
<pre><code>
SELECT    -- columns to show    /*REQUIRED*/
FROM      -- tables to use      /*REQUIRED*/

WHERE     -- rows to pick       /*OPTIONAL*/
GROUP BY  -- column to total    /*OPTIONAL*/
HAVING    -- totals to pick      /*OPTIONAL*/
ORDER BY  -- columns to sort    /*OPTIONAL*/
</code></pre>
<hr/>

<h2>Sample Data</h2>
<p>This is the table we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
'<hr>

<h2>Narrow your data</h2>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/SELECT_1.rpt").
'<hr>

<h2>DISTINCT</h2>
<p>Use the <code>DISTINCT</code> statement to return only distinct (different) values</p>
<p>
  In this example <code>salesperson#</code> 2 has both <code>amount_paid</code> values = 0 so they get amalgamated 
  whereas <code>salesperson#</code> 1 <em>has</em> 2 distinct values for <code>amount_paid</code>
</p>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/SELECT_DISTINCT.rpt").
'<hr/>

';

      return $returnValue;
    }

  }
}