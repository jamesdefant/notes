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