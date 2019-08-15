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
<p>Procedures are <em>compiled</em>, meaning they run 5 times faster than a simple script</p>
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
<hr>

<h2>Oracle way</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE payreport
AS
  total NUMBER(8);
BEGIN
  
  SELECT SUM(inv_qoh) INTO total FROM inventory;
  
  FOR x IN (SELECT * FROM emp) LOOP --oracle implicit cursor
    dbms_output.put_line(x.ename||x.sal);
  END LOOP;

END;
/
</code></pre>

<h2>Generic way</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE payreport
AS
  total NUMBER(8);
  CURSOR xloop  IS SELECT * FROM emp;
  x xloop%rowtype;
BEGIN

  SELECT SUM(inv_qoh) INTO total FROM inventory;

  OPEN xloop;--done immediately before loop using it  
  LOOP --industry standard explicit cursor
  
    FETCH xloop INTO x;
    EXIT WHEN xloop%notfound;--like break
    dbms_output.put_line(x.ename||x.sal);
  
  END LOOP;
  CLOSE xloop;--done immediate after loop using it
  
END;
/
</code></pre>


';

      return $returnValue;
    }

  }
}