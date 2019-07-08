<?php

namespace J\ClassNotes {

  class SQL_07_GROUP_BY extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
GROUP BY
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL GROUP BY Statement
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  The <code>GROUP BY</code> statement groups rows that have the same values into <strong>summary rows</strong><br/>
  The <code>GROUP BY</code> statement is often used with aggregate functions to group the result-set by one or more columns
</p>
<hr/>

<h2>Sample Data</h2>
<p>This is the table we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
'<hr>

<h2>Syntax</h2>
<pre><code>
SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
ORDER BY column_name(s)
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/GROUP_BY.rpt") .
'<p>
  Notice that if you add more columns to the <code>SELECT</code> statement, 
  you <strong>must also add them</strong> to the <code>GROUP BY</code> statement or recieve an error such as this:
</p>'
. \WriteHTML::getTableFromReport("./data/SQL_SERVER/GROUP_BY_MultCol_ERROR.rpt") .
'<p>This is the correct way:</p>'
. \WriteHTML::getTableFromReport("./data/SQL_SERVER/GROUP_BY_MultCol.rpt") .
'
<hr/>

<h2>Combine aggregates</h2>
<p>Create summaries by combining aggregate functions</p>'
. \WriteHTML::getTableFromReport("./data/SQL_SERVER/GROUP_BY_MultAgg.rpt") .
'<hr/>

<h2>HAVING</h2>
<p>Use the <code>HAVING</code> clause to filter the results of an aggregate function</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
HAVING condition
ORDER BY column_name(s)
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/GROUP_BY_HAVING.rpt")



;

      return $returnValue;
    }

  }
}