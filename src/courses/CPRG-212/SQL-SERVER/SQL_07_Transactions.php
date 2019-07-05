<?php

namespace J\ClassNotes {

  class SQL_07_Transactions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Transactions
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Transactions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro</h2>
<p>Transactions ensure that either <strong>all</strong> commands execute or <strong>no</strong> commands execute</p>
<p>Consider a banking transaction where money is transfered from one account to another</p>

<h2>Syntax</h2>
<pre><code>
BEGIN TRANSACTION
  UPDATE savings
  ...
  UPDATE checking
  ...
  COMMIT TRANSACTION  
</code></pre>
<p>ROLLBACK command is an undo</p>
<pre><code>
SELECT * FROM A.B.C.D

-- A is the SERVER
-- B is the DATABASE
-- C is the SCHEMA (like a directory)
-- D is the TABLE
</code></pre>
<h3>The number of periods between A and D define what A is:</h3>
<pre>
A.D --> A is the Schema
A..D --> A is the Database
A...D --> A is the Server</pre>

<h2>Schema</h2>
<p><strong>DBO</strong> is the default Schema that is used if one is not explicitly defined</p>

<h2>Transactions</h2>
<pre><code>
-- HOSTNAME...tableName

BEGIN TRANSACTION
  UPDATE CALGARY...accounts
    SET balance = balance - 1000
    WHERE acct_no = 1
  UPDATE EDMONTON...accounts
    SET balance = balance + 300
    WHERE acct_no = 1
  UPDATE LETHBRIDGE...accounts
    SET balance = balance + 700
    WHERE acct_no = 1
COMMIT TRANSACTION    
</code></pre>

<h2>INSERT</h2>
<pre><code>
INSERT INTO customers
  (customerid, companyname, contactname)
VALUES ('0103', 'Home Depot', 'George')
</code></pre>

<p>INSERT SELECT</p>

<p>SELECT INTO</p>
<pre><code>
SELECT productname AS products
</code></pre>

<h2>DELETE</h2>
<p>Run a SELECT to ensure that the data you want to delete is the correct data then replace it with DELETE FROM</p>
<pre><code>
DELETE FROM northwind
  WHERE customerid = '43246'
</code></pre>

<h2>UPDATE</h2>
<strong>Always use a WHERE clause when you update or delete data</strong>
<pre><code>
UPDATE products
  SET unitprice = (unitprice * 1.1)
</code></pre>
<em>Cannot update primary key column values</em>




CONTENT;

      return $returnValue;
    }

  }
}