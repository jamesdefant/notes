<?php

namespace J\ClassNotes {

  class SQL_08_JOINs extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JOINs
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL JOIN Clauses
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A <code>JOIN</code> is used to combine the data from different tables based on a related column between them</p>
<p>There are many different types of <code>JOIN</code>s:</p>
<ul>
  <p><code>SET JOIN</code>s are used to join the <strong>same type of table</strong></p>
  <li><strong>SET</strong> JOINs</li>
  <ul>
    <li><strong>UNION</strong> - combines <em>all</em> data</li>
    <li><strong>INTERSECT</strong> - shows the <em>common</em> data</li>
    <li><strong>EXCEPT</strong> - shows the <em>differences</em> between the tables</li>
  </ul>
  <hr>
  
  <p><code>EQUI-JOIN</code>s are used for <strong>different types of tables</strong></p>
  <li><strong>EQUI</strong>-JOINs</li>
  <ul>
    <li><strong>SELF</strong> - joined to <em>itself</em></li>
    <li><strong>CROSS</strong> - (USED IN BUSINESS INTELIGENCE) finds all <em>combinations</em> of data</li>
    <li><strong>INNER</strong> - (MOST IMPORTANT JOIN) finds <em>matching</em> data</li>
    <li><strong>OUTER</strong> - finds <em>missing</em> data</li>
    <ul>
      <li><strong>LEFT</strong> - returns all records from left side and matching records from right side</li>
      <li><strong>RIGHT</strong> - returns all records from right side and matching records from left side</li>
      <li><strong>FULL</strong> - returns all records when there is a match in either left or right table</li>
    </ul>
  </ul>
  <hr>
  
  <p><code>NESTED JOIN</code>s are used to <strong>solve complex query problems</strong></p>
  <em>Also called SUB-QUERIES</em>
  <li><strong>NESTED</strong> JOINs</li>
  <ul>
    <li><strong>CORRELATED</strong> - (SLOWEST QUERY) </li>
    <li><strong>NON-CORRELATED</strong> - </li>
  </ul>
</ul> 
<hr>

<h2>Rules for joining tables:</h2>
<ul>
  <li>One of the sides <strong>MUST</strong> be a Primary Key</li>
  <li>Add data to parents first, then child tables - if there is no parent, you can\'t add data</li>
</ul>
<hr>

<h2>Sample Data</h2>
<p>These are the tables we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/ALL_ar_invoices.rpt").
\WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/ALL_ar_salespeople.rpt").
\WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/ALL_ar_customers.rpt").
'<hr>


<h2>INNER JOIN</h2>
<p>Returns all the records that have matching data in both tables</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_INNER.rpt") .
'<p>Combine multiple <code>JOIN</code>s to link many tables together:</p>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_INNER_Mult.rpt") .
'
<p>The old way to do an <code>INNER JOIN</code> (ditch the keywords for commas and use a <code>WHERE</code>):</p>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_INNER_Mult_OLD.rpt") .
'
<hr/>

<h2>LEFT OUTER JOIN</h2>
<p>Returns all the data from the left table, and the matched records from the right table. If there is no match in the right side, the result is <code>NULL</code></p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table1
LEFT OUTER JOIN table2
ON table1.column_name = table2.column_name
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_LEFT_OUTER.rpt") .
'
<p>A <code>RIGHT OUTER JOIN</code> is the same except it shows all the records from the right table</p>
<hr/>

<h2>FULL OUTER JOIN</h2>
<p>A <code>FULL OUTER JOIN</code> returns all the data from both tables</p>
<p><strong>Note:</strong> <code>FULL OUTER JOIN</code> can potentially return huge result sets!</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table1
FULL OUTER JOIN table2
ON table1.column_name = table2.column_name
WHERE condition
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_FULL_OUTER.rpt") .
'

<h2>SELF JOIN</h2>
<p>A <code>SELF JOIN</code> is a regular join, except the table is joined to itself</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table1 T1, table1 T2
WHERE condition
</code></pre>
<em>T1 and T2 are different table aliases for the same table</em>
<p>This example finds all the customers that live in the same province</p>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_SELF.rpt") .
'<hr/>

<h2>CROSS JOIN</h2>
<p>A <code>CROSS JOIN</code> will link <strong>every</strong> column in the first table to <strong>every</strong> column in the second table</p>
<p><code>CROSS JOIN</code> is used for business inteligence (research/data mining)</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table1
CROSS JOIN table2
</code></pre>
<strong>Do not understand the use of this</strong>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_CROSS.rpt") .
'<hr/>

<h2>UNION JOIN</h2>
<p>A <code>UNION JOIN</code> is used to combine the result-set of two or more <code>SELECT</code> statements</p>
<ul>
  <li>Each <code>SELECT</code> statement within <code>UNION</code> must have the same number of columns</li>
  <li>Those columns must be of the same data types</li>
  <li>Those columns must also be in the same order</li>
</ul>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s) FROM table1
UNION
SELECT column_name(s) FROM table2
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL/SQL_SERVER/JOIN_UNION.rpt") .
'<hr/>


'
;

      return $returnValue;
    }

  }
}