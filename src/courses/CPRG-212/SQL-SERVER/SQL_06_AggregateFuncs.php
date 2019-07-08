<?php

namespace J\ClassNotes {

  class SQL_06_AggregateFuncs extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Aggregates
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Aggregate Functions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Functions</h2>
<p>There are a number of built-in functions that return a result on a numeric column</p>
<table class="table">
  <thead>
    <tr>
      <th>Function</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>COUNT()</td>
      <td>Returns the number of rows that match the specified criteria</td>
    </tr>
    <tr>
      <td>AVG()</td>
      <td>Returns the average value of a numeric column</td>
    </tr>
    <tr>
      <td>SUM()</td>
      <td>Returns the total sum of a numeric column</td>
    </tr>
    <tr>
      <td>MIN()</td>
      <td>Returns the smallest value of a selected column</td>
    </tr>
    <tr>
      <td>MAX()</td>
      <td>Returns the largest value of a selected column</td>
    </tr>
  </tbody>
</table>

<h2>Sample Data</h2>
<p>This is the table we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
'<hr>

<h2>COUNT()</h2>
<p>Returns the number of rows that match the specified criteria<br/>
<em>Does <strong>not</strong> count NULL values</em></p>
<h3>Syntax</h3>
<pre><code>
SELECT COUNT(column_name)
FROM table_name
WHERE condition
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/COUNT.rpt").

'<p><em>Notice how it counts <strong>every</strong> row for <code>salesperson#</code></em><br/>
Combine <code>COUNT()</code> with <code>DISTINCT</code> to get unique values:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/COUNT_DISTINCT.rpt").
'<hr/>

<h2>AVG()</h2>
<p>Returns the average value of a numeric column</p>
<h3>Syntax</h3>
<pre><code>
SELECT AVG(column_name)
FROM table_name
WHERE condition
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/AVG.rpt").
'<hr/>

<h2>SUM()</h2>
<p>Returns the total sum of a numeric column</p>
<h3>Syntax</h3>
<pre><code>
SELECT SUM(column_name)
FROM table_name
WHERE condition
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/SUM.rpt").
'<hr/>

<h2>MIN()</h2>
<p>Returns the smallest value of a selected column</p>
<h3>Syntax</h3>
<pre><code>
SELECT MIN(column_name)
FROM table_name
WHERE condition
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/MIN.rpt").
'<hr/>

<h2>MAX()</h2>
<p>Returns the largest value of a selected column</p>
<h3>Syntax</h3>
<pre><code>
SELECT MAX(column_name)
FROM table_name
WHERE condition
</code></pre>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/MAX.rpt").
'<hr/>

';

      return $returnValue;
    }

  }
}