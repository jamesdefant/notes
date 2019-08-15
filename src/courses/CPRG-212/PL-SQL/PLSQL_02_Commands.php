<?php

namespace J\ClassNotes {

  class PLSQL_02_Commands extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Commands
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PL-SQL Commands
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<ul>
  <li>
    <code>set pagesize 40</code> - sets how many lines will be displayed (vertically) before the header re-appears
  </li> 
  <li>
    <code>set linesize 60</code> - set how may characters on a page (horizontally) before the line wraps
  </li>
  <li><code>:=</code> - is an assignment operator</li>
  <li><code>=</code> - is a comparaison operator</li>
</ul>
<hr>


<h2>Oracle SQL Commands</h2>
<p><em>ALL SQL COMMANDS IN ORACLE NEED TO BE CLOSED WITH A SEMICOLON!!</em></p>
<p>Join tables with <code>using()</code> or <code>NATURAL JOIN</code></p>
<p><em>Tables <b>must</b> have a foreign key for the NATURAL JOIN to work properly</em></p>
<pre><code>
// Standard SQL
SELECT dbname, ename, job, sal
FROM dept d join emp e on d.deptno = e.deptno

// Oracle
SELECT dbname, ename, job, sal
FROM dept d join emp e using(deptno)

// or //
SELECT dbname, ename, job, sal
FROM dept d NATURAL JOIN emp e
</code></pre>

<p><b>When combining more than one table, bracket each JOIN</b></p>
<pre><code>
SELECT ca-desc, item_desc, colo, inv_size
  FROM (category NATURAL JOIN item) 
    NATURAL JOIN inventory
  ORDER BY 1,2,3,4;
  
// or

SELECT c_id, ol_quantity, inv_price, sl_quantity
  FROM ((orders NATURAL JOIN order_line)
    NATURAL JOIN inventory)
      NATURAL JOIN shipment_line;
</code></pre>
<hr>

<p>Get current date with <code>sysdate</code></p>
<pre><code>
select sysdate from dual;
</code></pre>
<hr>





<p></p>

';

      return $returnValue;
    }

  }
}