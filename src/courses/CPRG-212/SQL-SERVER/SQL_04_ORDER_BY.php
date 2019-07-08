<?php

namespace J\ClassNotes {

  class SQL_04_ORDER_BY extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ORDER BY
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL ORDER BY Statement
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Use the <code>ORDER BY</code> keyword to sort the resulting record set in either ascending or descending order</p>
<hr/>

<h2>Sample Data</h2>
<p>This is the table we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
'<hr/>

<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
ORDER BY column1, column2, ... ASC|DESC
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ORDER_BY.rpt")



;

      return $returnValue;
    }

  }
}