<?php

namespace J\ClassNotes {

  class SQL_10_DateTime extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DateTime
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL DateTime Commands
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are many Date/Time functions in SQL SERVER including:</p>
<ul>
  <li>GETDATE()</li>
  <li>DATEADD()</li>
  <li>DATEDIFF()</li>
  <li>DATEPART()</li>
  <li>ISDATE()</li>
  <li>...</li>
</ul>
<hr/>

<h2>GETDATE()</h2>
<p>Use <code>GETDATE()</code> to return the current date and time</p>
<h3>Syntax</h3>
<pre><code>
GETDATE()
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/GETDATE.rpt") .
'<hr/>

<h2>DATEADD()</h2>
<p>Use <code>DATEADD()</code> to add a specific time to a date and return it</p>
<h3>Syntax</h3>
<pre><code>
DATEADD(interval, number, date)
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/DATEADD.rpt") .
'<hr/>

<h2>DATEDIFF()</h2>
<p>Use <code>DATEDIFF()</code> to return the difference between two dates</p>
<h3>Syntax</h3>
<pre><code>
DATEDIFF(interval, date1, date2)
</code></pre>
' . \WriteHTML::getTableFromReport("./data/SQL_SERVER/DATEDIFF.rpt") .
'<hr/>


';

      return $returnValue;
    }

  }
}