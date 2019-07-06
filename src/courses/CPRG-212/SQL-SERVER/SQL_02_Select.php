<?php

namespace J\ClassNotes {

  class SQL_02_Select extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SELECT
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SELECT Statement
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Usage</h2>
<p>Select data from the database, filter it as need be</p>
<em>The statement <code>USE database</code> tells the server which database to use</em>
<pre><code>
USE northwind
SELECT employee_id, lastname, firstname, title
FROM employees
</code></pre>

<h3>Filter it with <code><h2>WHERE</h2></code></h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE lastname = 'Smith'
</code></pre>

<h3>Search for multiple values with <code>WHERE col <h2>IN</h2></code></h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE lastname IN ('Smith', 'Reynolds')
</code></pre>

<h3>Find a string with the wildcard and <code><h2>LIKE</h2></code> command</h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE lastname LIKE '%mith'
</code></pre>

<h3>Choose a range with <code><h2>BETWEEN</h2></code></h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE employee_id BETWEEN 1 AND 30
</code></pre>

<h3><code><h2>NULL</h2></code> is a non value</h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE title IS NULL
</code></pre>

<h3><code><h2>NOT</h2></code> is a negative value</h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
WHERE title IS NOT NULL
</code></pre>

<h3><code><h2>ORDER BY</h2> value ASC/DSC</code>  will display the results in a particular order</h3>
<pre><code>
SELECT employee_id, lastname, firstname, title
FROM employees
ORDER BY employee_id ASC
</code></pre>

<h3>Change the column name with <code><h2>AS</h2></code> to make an alias</h3>
<pre><code>
SELECT employee_id, lastname AS Last, firstname AS First, title
FROM employees
</code></pre>

<h3>Concatenate a string literal with the <code><h2>CONCAT</h2></code> function</h3>
<em>Square brackets encapsulate a string</em>
<pre><code>
SELECT CONCAT('Employee ID:', employee_id) AS [Employee ID], lastname, firstname, title
FROM employees
</code></pre>

<h3>Choose only unique values for a given column with <code><h2>DISTINCT</h2></code></h3>
<pre><code>
SELECT DISTINCT title
FROM employees
</code></pre>

CONTENT;

      return $returnValue;
    }

  }
}