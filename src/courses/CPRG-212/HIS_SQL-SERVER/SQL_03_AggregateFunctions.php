<?php

namespace J\ClassNotes {

  class SQL_03_AggregateFunctions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Aggregates
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Aggregate Functions in SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h3>Use <code><h2>COUNT()</h2></code> to get the number of results</h3>
<p>Count every single result with <code>COUNT (*)</code></p>
<pre><code>
SELECT COUNT (*)
FROM employees
</code></pre>

<p>Count every field in a column with a value use <code>COUNT (col_name)</code></p>
<pre><code>
SELECT COUNT (city)
FROM employees
</code></pre>

<p>Count every unique field with <code>COUNT (DISTINCT col_name)</code></p>
<pre><code>
SELECT COUNT (DISTINCT city)
FROM employees
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}