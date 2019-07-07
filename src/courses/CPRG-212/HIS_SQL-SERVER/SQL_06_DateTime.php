<?php

namespace J\ClassNotes {

  class SQL_06_DateTime extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DATETIME
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL DateTime
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>GETDATE()</h2>
<strong>COUNTS IN DAYS</strong>
<p>Use GETDATE() to get the current date/time</p>
<pre><code>
SELECT GETDATE() AS Result
</code></pre>

<h2>MONTH()</h2>
<p>Use MONTH() to return a numeric value of the current month</p>
<pre><code>
SELECT MONTH(GETDATE()) AS Result

-- or use DATEPART()

SELECT DATEPART(month, GETDATE()) AS Result
</code></pre>

<h2>DATENAME()</h2>
<p>Use DATENAME() to return a string value istead:</p>
<pre><code>
SELECT DATENAME(month, GETDATE()) AS Result
</code></pre>

<h2>DATEDIFF()</h2>
<p>Use DATEDIFF() to find the difference between two dates</p>
<pre><code>

</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}