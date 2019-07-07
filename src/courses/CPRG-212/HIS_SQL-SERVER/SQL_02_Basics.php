<?php

namespace J\ClassNotes {

  class SQL_02_Basics extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Basics
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Basics
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Syntax</h2>
<h3>Not all keywords are required</h3>
<pre><code>
SELECT    -- columns to show    /*REQUIRED*/
FROM      -- tables to use      /*REQUIRED*/

WHERE     -- rows to pick       /*OPTIONAL*/
GROUP BY  -- column to total    /*OPTIONAL*/
HAVING    -- totals to pick      /*OPTIONAL*/
ORDER BY  -- columns to sort    /*OPTIONAL*/
</code></pre>
      
<h2>DECLARE</h2>
<p>Use DECLARE to declare a variable</p>
<pre><code>
DECLARE { @LOCAL_VARIABLE[AS] data_type [ = value]}

DECLARE @COURSE_ID AS INT = 5
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}