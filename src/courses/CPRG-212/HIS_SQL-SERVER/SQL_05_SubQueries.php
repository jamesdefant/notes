<?php

namespace J\ClassNotes {

  class SQL_05_SubQueries extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SUB-QUERIES
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Make Queries of Queries
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Using SELECT as a column</h2>
<pre><code>
SELECT color, inv_size, inve_price, (SELECT AVG(inv_price) FROM inventory)
FROM inventory
</code></pre>

<h2>Use a SELECT statement as a table</h2>
<pre><code>
SELECT MAX(total) FROM
(SELECT color, SUM(inv_qoh) AS total)
FROM inventory
GROUP BY color) x -- make a name for your temporary table

-- or

WITH x AS (SELECT color, SUM(inv_qoh) AS total)
FROM inventory
GROUP BY color)
SELECT MAX(total) FROM x
</code></pre>

<pre><code>
SELECT color, inv_size
FROM inventory i LEFT OUTER JOIN order_line o
ON i.inv_id = o.inv_id
WHERE ol_quantity IS NULL
</code></pre>

<h2>Use SELECT in the WHERE</h2>
<pre><code>
-- Faster
SELECT * FROM inventory
WHERE inv_id NOT IN (SELECT inv_id FROM order_line)

-- or
-- SLower
SELECT * FROM inventory i 
WHERE NOT EXISTS (SELECT inv_id FROM order_line o
                  WHERE o.inv_id = i.inv_id)
</code></pre>

<h2>Correlated JOIN</h2>
<pre><code>
SELECT * FROM sales s
WHERE total_sales < (SELECT AVG(total_sales) FROM sales
                      WHERE dept = s.dept)
-- VERY slow   
-- For 1,000 entries 
-- 1,000,000 reads                   
</code></pre>

<h2>Non-correlated</h2>
<pre><code>
WITH averages AS (SELECT dept, AVG(total_sales) AS average FROM sales GROUP BY dept)
SELECT name, s.dept, total_sales FROM sales s INNER JOIN averages a
                                  ON s.dept = a.dept
                                  WHERE total_sales < a.average
                                  
-- For 1,000 entries
-- 2,000 reads                                  
</code></pre>

<h2>"EXAMPLES"</h2>\
<p>Find all members who have a fine greater than the average</p>
<pre><code>
SELECT DISTINCT member_no
FROM loanhist
WHERE fine_assessed > (SELECT AVG(fine_assessed) FROM loanhist)
</code></pre>

<p></p>
<pre><code>
SELECT MAX(total)
FROM (SELECT member_no, SUM(fine_assessed) AS total
      FROM loanhist
      WHERE fine_assessed > 0
      GROUP BY member_no) x
      
-- or

WITH x AS
(SELECT member_no, 
        SUM(fine_assessed) AS total
FROM loanhist
WHERE fine_assessed > 0
GROUP BY member_no)
SELECT street
FROM adult
WHERE member_no IN (SELECT member_no
                    FROM x
                    WHERE total = (SELECT MAX(total) FROM x))      
</code></pre>

<pre><code>

</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}