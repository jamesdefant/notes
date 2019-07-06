<?php

namespace J\ClassNotes {

  class SQL_03_GroupBy extends Page
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
GROUP BY Command
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'



<h3><code><h2>GROUP BY</h2></code> is used to group rows that have the same values into summary rows</h3>
<em>Must be used with an <strong>Aggregate function</strong> (ie. <code>SUM</code>, <code>AVG</code>, <code>COUNT</code>, <code>MIN</code>, <code>MAX</code>)</em>
<pre><code>
SELECT COUNT(emplyee_id), city
FROM employees
GROUP BY city
</code></pre>

<h3><code><h2>ROLLUP()</h2></code> is used to generate multiple grouping sets</h3>
<pre><code>
SELECT COUNT(emplyee_id), city, sales
FROM employees
GROUP BY ROLLUP(city, sales)
</code></pre>

<h3><code><h2>HAVING</h2></code> requires using a <code>SUM()</code>, <code>COUNT()</code>, <code>AVG()</code></h3>
<pre><code>
SELECT COUNT(employee_id), city
FROM employees
GROUP BY city
HAVING COUNT(employee_id) > 5
</code></pre>

<h3><code><h2>ISNULL()</h2></code> can change a NULL value into a 0 to avoid computational errors</h3>
<em>Any value arithmetically processed with NULL results in NULL</em>

<p>Use GROUPING SETS over CUBE for 3 or more columns</p>

<h3><code><h2>TOP</h2></code></h3>
<p><strong>Microsoft ONLY</strong></p>
<p>Used with <code>SELECT</code> to grab the top results</p>
<pre><code>
SELECT TOP 5 order_id, product_id, quantity
FROM [order details]
ORDER BY quantity DESC
</code></pre>

<p>Used with <code>TIES</code> counts identical values as one</p>
<pre><cdoe>
SELECT TOP 5 WITH TIES order_id, product_id, quantity
FROM [order details]
ORDER BY quantity DESC
</cdoe></pre>
CONTENT;

      return $returnValue;
    }

  }
}