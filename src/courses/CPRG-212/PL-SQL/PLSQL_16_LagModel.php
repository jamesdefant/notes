<?php

namespace J\ClassNotes {

  class PLSQL_16_LagModel extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
LAG/MODEL
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
LAG() and MODEL() in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Our table</p>
<pre><code>
CREATE TABLE marketing
  (year NUMBER(4), 
   month NUMBER(2),
   sales NUMBER(10,2)
   PRIMARY KEY (year, month));
</code></pre>


<h2>Lag</h2>
<p>Use <code>LAG()</code> to compare a row to it\' previous row</p>
<pre><code>
SELECT year, 
       month, 
       sales,
       LAG(sales, 1) OVER(ORDER BY month)
  FROM marketing
  ORDER BY month;
</code></pre>
<p>...or use a formula to show how much a value changed in percentage</p>
<pre><code>
SELECT year, 
       month, 
       sales,
       LAG(sales, 1) OVER(ORDER BY month) AS previous,
       100 * (sales - LAG(sales, 1) OVER(ORDER BY month)) / 
                      LAG(sales, 1) OVER(ORDER BY month) AS \'% change\'
  FROM marketing
  ORDER BY month;
</code></pre>
<p>Or, formatted a little nicer:</p>
<pre><code>
SELECT year, 
       month, 
       sales,
       LAG(sales, 1) OVER(ORDER BY month) AS previous,
       to_char(100 * (sales - LAG(sales, 1) OVER(ORDER BY month)) / 
                      LAG(sales, 1) OVER(ORDER BY month), \'999999.9\') AS \'% change\'
  FROM marketing
  ORDER BY month;
</code></pre>
<hr>

<h2>MODEL</h2>
<p>Can predict future #s</p>
<h4>Parts</h4>
<ul>
  <li><code>PARTITION</code> - column that do not change</li>
  <li><code>DIMENSION</code> - column to increment</li>
  <li><code>MEASURES</code> - column with amount to predict</li>
  <li><code>RULES</code> - formula used to predict numbers</li>
</ul>

<p>Ways to predict future #\'s</p>
<ul>
  <li>Moving average</li>
  <li>weighted moving average</li>
  <li>linear regression</li>
  <li>curvi-linear regression</li>
</ul>
<p>MODEL cannot create predictions on an acutal table, so create a VIEW first:</p>
<pre><code>
CREATE VIEW salesdata
AS SELECT * FROM marketing
</code></pre>
<pre><code>
SELECT * FROM salesdata
  MODEL
  PARTITION BY (year)
  DIMENSION BY (month)
  MEASURES(sales)
  RULES(sales[FOR month FROM 5 TO 12 INCREMENT 1] = 1.1 * sales[CV() - 1])
</code></pre>
<p><code>CV</code> is the index in this loop</p>

<h2>Predictive Formula</h2>
<pre><code>
SELECT * FROM salesdata
  MODEL
  PARTITION BY (year)
  DIMENSION BY (month)
  MEASURES(sales)
  RULES(sales[FOR month FROM 5 TO 12 INCREMENT 1] 
        = ( (sales[CV() - 1] - sales[cv() - 2]) / sales[CV() - 2] + 1 ) * sales[CV() - 1])
</code></pre>

';

      return $returnValue;
    }

  }
}