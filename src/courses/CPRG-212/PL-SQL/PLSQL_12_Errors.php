<?php

namespace J\ClassNotes {

  class PLSQL_12_Errors extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Errors
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Errors in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Throw Exceptions to catch errors</p>
<pre><code>
CREATE OR REPLACE PROCEDURE traperrors
AS
  x NUMBER(3) := 1;
  y NUMBER(3) := 0;
BEGIN
x := x / y;
DBMS_OUTPUT.PUT_LINE(\'Hey\');
EXCEPTION   --try/catch
  WHEN ZERO_DIVIDE THEN
    DBMS_OUTPUT.PUT_LINE(\'Bad Math\');
  WHEN VALUE_ERROR THEN
    DBMS_OUTPUT.PUT_LINE(\'Variable too small to hold value\');
  WHEN OTHERS THEN
    IF (sqlcoded = -8000) THEN
      DBMS_OUTPUT.PUT_LINE(\'No privilege to see data\');
    ELSIF (sqlcode = -9000) THEN
      DBMS_OUTPUT.PUT_LINE(\'No disk space\');
    ELSE
      DBMS_OUTPUT.PUT_LINE(sqlerrm);
    END IF;
END;
/




</code></pre>

';

      return $returnValue;
    }

  }
}