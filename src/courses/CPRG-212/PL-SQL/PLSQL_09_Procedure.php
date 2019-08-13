<?php

namespace J\ClassNotes {

  class PLSQL_09_Procedure extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Procedures
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Procedures in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>To enable error reporting type <code>SHOW ERRORS</code></p>
<p>To enable showing output type <code>SET SERVEROUTPUT ON</code></p>

<p>A simple Procedure - type this as a whole script using <code>EDIT</code></p>
<pre><code>
CREATE OR REPLACE PROCEDURE sayhi
AS
BEGIN
DBMS_OUTPUT>PUT_LINE(\'Hi\');
END;
</code></pre>
<p>Compile it</p>
<kbd>SQL> /</kbd><br>
<p>Then execute it:</p>
<kbd>SQL >EXEC sayhi</kbd>


';

      return $returnValue;
    }

  }
}