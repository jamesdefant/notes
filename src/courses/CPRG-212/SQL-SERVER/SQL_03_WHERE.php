<?php

namespace J\ClassNotes {

  class SQL_03_WHERE extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
WHERE
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL WHERE Statement
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>WHERE</h2>
<p>Use the <code>WHERE</code> clause to return only the records that satisfy a specified condition</p>
<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
WHERE condition
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/SELECT_WHERE.rpt").
'
<h2>Sample Data</h2>
<p>These are the tables we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").
\WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_salespeople.rpt").
'<hr>
<h2>WHERE Operators</h2>
<table class="table">
  <thead>
    <tr>
      <th>Operator</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>=</td>
      <td>Equals</td>
    </tr>
    <tr>
      <td>></td>
      <td>Greater Than</td>
    </tr>
    <tr>
      <td><</td>
      <td>Lesser Than</td>
    </tr>
    <tr>
      <td>>=</td>
      <td>Greater Than or Equal</td>
    </tr>
    <tr>
      <td><=</td>
      <td>Lesser Than or Equal</td>
    </tr>
    <tr>
      <td><> <strong>or</strong> !=</td>
      <td>Not Equal</td>
    </tr>
    <tr>
      <td>BETWEEN</td>
      <td>Between a Certain Range (inclusive)</td>
    </tr>
    <tr>
      <td>LIKE</td>
      <td>Search for a Pattern</td>
    </tr>
    <tr>
      <td>IN</td>
      <td>To Specify Multiple Possible Values for a Column</td>
    </tr>   
  </tbody>
</table>
<hr/>

<h2>BETWEEN</h2>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_BETWEEN.rpt"). '

<h2>LIKE</h2>
<p>There are 2 wildcards used with the <code>LIKE</code> operator:</p>
<ul>
  <li><code>%</code> - Represents none, one, or multiple characters</li>
  <li><code>_</code> - Represents a single character</li>
</ul>
<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
WHERE columnn LIKE pattern
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_LIKE.rpt"). '

<h2>IN</h2>
<p>The <code>IN</code> operator is a shorthand for multiple <code>OR</code> conditions</p>
<h3>Syntax</h3>
<pre><code>
SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1, value2, ...)
</code></pre>

' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_IN.rpt"). '
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_NOT_IN.rpt"). '


<h3>~or~<br/>Combine the <code>IN</code> operator with a <code>SELECT</code> statement</h3>
<pre><code>
SELECT column_name(s)
FROM table_name
WHERE column_name IN (SELECT STATEMENT)
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_IN_SELECT.rpt"). '

<hr/>

<h3>The WHERE clause can be combined with the <code>AND</code>, <code>OR</code>, and <code>NOT</code> operators</h3>
<table class="table">
  <thead>
    <tr>
      <th>Operator</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>AND</td>
      <td>Displays a record if <strong>all</strong> the conditions seperated by <code>AND</code> are TRUE</td>
    </tr>
    <tr>
      <td>OR</td>
      <td>Displays a record if <strong>any</strong> of the conditions seperated by <code>OR</code> is TRUE</td>
    </tr>
    <tr>
      <td>NOT</td>
      <td>Displays a record if the condition(s) is <strong>NOT TRUE</strong></td>
    </tr>
  </tbody>
</table>


<h3>For Example:</h3>
<h2>AND</h2>
<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_AND.rpt") .

'<h2>OR</h2>
<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
WHERE condition1 OR condition2 OR condition3 ...
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_OR.rpt") .

'<h2>NOT</h2>
<h3>Syntax</h3>
<pre><code>
SELECT column1, column2, ...
FROM table_name
WHERE NOT condition
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/WHERE_NOT.rpt") . '

<hr>'
;



      return $returnValue;
    }

  }
}