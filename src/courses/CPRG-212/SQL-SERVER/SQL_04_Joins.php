<?php

namespace J\ClassNotes {

  class SQL_04_Joins extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JOIN
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
JOIN Commands
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Joining Tables</h2>
<ul>
  <p><code>SET JOIN</code>s are used to join the same type of table</p>
  <li><strong>SET</strong> JOINs</li>
  <ul>
    <li><strong>UNION</strong> - combines <em>all</em> data</li>
    <li><strong>INTERSECT</strong> - shows the <em>common</em> data</li>
    <li><strong>EXCEPT</strong> - shows the <em>differences</em> between the tables</li>
  </ul>
  <hr>
  
  <p><code>EQUI-JOIN</code>s are used for different types of tables</p>
  <li><strong>EQUI</strong>-JOINs</li>
  <ul>
    <li><strong>SELF</strong> - joined to <em>itself</em></li>
    <li><strong>CROSS</strong> - (USED IN BUSINESS INTELIGENCE) finds all <em>combinations</em> of data</li>
    <li><strong>INNER</strong> - (MOST IMPORTANT JOIN) finds <em>matching</em> data</li>
    <li><strong>OUTER</strong> - finds <em>missing</em> data</li>
    <ul>
      <li><strong>LEFT</strong> - returns all records from left side and matching records from right side</li>
      <li><strong>RIGHT</strong> - returns all records from right side and matching records from left side/li>
      <li><strong>FULL</strong> - returns all records when there is a match in either left or right table</li>
    </ul>
  </ul>
  <hr>
  
  <p><code>NESTED JOIN</code>s are used to solve complex query problems</p>
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
  <li>Add data to parents first, then child tables - if there is no parent, you can't add data</li>
</ul>
<hr>

<h3><code><h2>INNER JOIN</h2></code> - finds <em>matching</em> data</h3>
<pre><code>
SELECT buyer_name, sales.buyer_id, qty
  FROM buyers INNER JOIN sales
    ON buyers.buyer_id = sales.buyer_id
</code></pre>

<p>Using an alias:</p>
<pre><code>
SELECT buyer_name, s.buyer_id, qty
  FROM buyers AS b INNER JOIN sales AS s
    ON b.buyer_id = s.buyer_id
</code></pre>

<p>Old way to do INNER JOIN</p>
<pre><code>
SELECT buyer_name, buyer_id, qty
  FROM buyers AS b, sales AS s
    WHERE b.buyer_id = s.buyer_id
</code></pre>
<hr>

<h3><code><h2>OUTER JOIN</h2></code> - finds missing data</h3>
<pre><code>
SELECT buyer_name, buyer_id, qty
  FROM buyers LEFT OUTER JOIN sales
    ON buyers.buyer_id = sales.buyer_id
</code></pre>

<p>Use a <code>WHERE</code> commmand to filter the results</p>
<pre><code>
SELECT buyer_name, buyer_id, qty
  FROM buyers LEFT OUTER JOIN sales
    ON buyers.buyer_id = sales.buyer_id
      WHERE qty IS NULL
</code></pre>

<p>Old way to do <code>OUTER JOIN</code></p>
<pre><code>
SELECT buyer_name, buyer_id, qty
  FROM buyers, sales
    WHERE buyers.buyer_id = sales.buyer_id +
    -- The + is the LEFT OUTER JOIN
</code></pre>
<hr>

<h3><code><h2>CROSS JOIN</h2></code> - finds all <em>combinations</em> of data</h3>
<pre><code>
SELECT buyer_name,qty
  FROM buyers 
    CROSS JOIN sales      
</code></pre>
<hr>

<h2>Joining more than two tables</h2>
<pre><code>
SELECT buyer_name, prod_name, qty
  FROM buyers
  INNER JOIN sales
    ON buyers.buyer_id = sales.buyer_id
  INNER JOIN produce
    ON sales.prod_id = produce.prod_id
</code></pre>

<p>The old way to join more than two tables</p>
<em>There must be 1 less joins than there is tables, otherwise you'll get errors</em>
<pre><code>
SELECT buyer_name, prod_name, qty
  FROM buyers, sales, produce
    WHERE buyers.buyer_id = sales.buyer_id
      AND sales.prod_id = produce.prod_id
</code></pre>
<hr>

<h3><code><h2>SELF JOIN</h2></code> - joined to <em>itself</em></h3>
<em>Make it think that there are two seperate tables</em>
<pre><code>
SELECT managers.firstname, workers.firstname
  FROM payroll AS managers INNER JOIN payroll AS workers
    ON workers.manager_sin = managers.sin#
      ORDER BY 1,2
      -- numeric values in ORDER BY will sort by column 1 then column 2
</code></pre>
<hr>

<h3><code><h2>UNION</h2></code> JOIN creates a single result set from multiple queries</h3>
<em>Each query must have:</em>
<ul>
  <li>Similar data types</li>
  <li>Same number of columns</li>
  <li>Same column order in SELECT list</li>
</ul>
<pre><code>
SELECT (firstname + ' ' + lastname) AS Name,
        city, postalcode
  FROM employees
UNION
SELECT companyname, city, postalcode
  FROM customers
</code></pre>

CONTENT;

      return $returnValue;
    }

  }
}