<?php

namespace J\ClassNotes {

  class PLSQL_13_Views extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Views
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Views in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A view is like a table except that you cannot edit it</p>
<pre><code>
CREATE VIEW people AS
SELECT dname, ename, job, sal
  FROM dept NATURAL JOIN emp
  ORDER BY dname
</code></pre>

';

      return $returnValue;
    }

  }
}