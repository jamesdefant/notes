<?php

namespace J\ClassNotes {

  class PLSQL_04_Unique extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Unique
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Unique to Oracle
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Objects</h2>
<p>Create an object that multiple tables can use (ie. an address (street, city, prov, postal-code))</p>
<pre><code>
// Create the object to be reused
CREATE TYPE address AS OBJECT (
  street VARCHAR2(30), 
  city VARCHAR2(30), 
  prov CHAR(2),
  postal CHAR(6)
);
</code></pre>
<p>Create a table to use the object</p>
<pre><code>
// Create the table
CREATE TABLE suppliers (
  sup# NUMBER(6) PRIMARY KEY,
  sup_name CHAR(30),
  sup_address ADDRESS,
  balance NUMBER(10, 2)
);
</code></pre>

<p>To view the type use</p>
<pre><code>
SET DESCRIBE DEPTH 2
DESC suppliers
</code></pre>
<hr>

<h2>Grant Privileges</h2>
<p>If you encounter <code>Insufficient Privileges</code>, type:</p>
<pre><code>
SQL> CONNECT system/oracle

SQL> GRANT CREATE ANY DIRECTORY TO scott;
SQL> GRANT CREATE ANY VIEW TO scott;

SQL> CONNECT scott/tiger

SQL> SHOW USER
</code></pre>
<hr>

<h2>Create "Shortcut" to a Directory</h2>
<p><em>This will read the comma seperated text file into a sql table</em></p>
<pre><code>
SQL> CREATE DIRECTORY cdive as \'c:\\sql\';

SQL> CREATE TABLE outside_names (
        id NUMBER(6),
        name CHAR(30),
        prov CHAR(2)
      )
        ORGANIZATION EXTERNAL (DEFAULT DIRECTORY cdrive LOCATION(\'names.txt\'));
</code></pre>
<hr>

<h2>Add existing data from one table into other Tables</h2>
<pre><code>
SQL> INSERT ALL
     WHEN c_states = \'WI\' THEN INTO customers_wi
     WHEN c_states = \'MN\' THEN INTO customers_mn
     SELECT * FROM customer;
</code></pre>
<hr>

<h2>Concatenate Columns</h2>
<p>Use double pipes - <code>||</code></p>
<pre><code>
SQL> SELECT name||\' \'||phone||\' \'||prov 
      FROM customers;
</code></pre>
<hr>

<h2>List Horizontally</h2>
<p>Group multiple items with similar data by using <code>wm_concat()</code></p>
<pre><code>
SQL> SELECT dept_no, rpad(wm_concat(ename), 60) AS \'workers\'
      FROM emp
      GROUP BY deptno;
</code></pre>
<hr>

<h2>Use ROLLUP to Create Totals</h2>
<pre><code>
SQL> SELECT color, inv_size, sum(inv_qoh)
      FROM inventory
      GROUP BY ROLLUP(color, inv_size)
      ORDER BY color, inv_size
</code></pre>

<h2>Use GROUPING to Locate Total Rows</h2>
<p>Displays a 0 normally and a 1 when it is a total</p>
<pre><code>
SQL> SELECT color, GROUPING(color), inv_size, sum(inv_qoh)
      FROM inventory
      GROUP BY ROLLUP(color, inv_size)
      ORDER BY color, inv_size

</code></pre>

';

      return $returnValue;
    }

  }
}