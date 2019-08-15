<?php

namespace J\ClassNotes {

  class PLSQL_11_Class extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Classes
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Classes in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Create a class by doing the following</p>
<pre><code>
CREATE OR REPLACE PROCEDURE demo
AS
  TYPE person;
BEGIN
  p.sin := 123;
  p.name :=  \'bob\';
  DBMS_OUTPUT.PUT_LINE(p.name);
END;
/   
</code></pre>
<hr>

<h2>An array and a class</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE demo
AS
  TYPE person IS RECORD(sin NUMBER(9), name CHAR(30));  --class
  p person; --object
  TYPE sales IS TABLE OF NUMBER(10,2);  --array
  s sales;
BEGIN
  p.sin := 123;
  p.name := \'bob\';
  s(1) := 100.00;
  s(123) := 200.00;
  DBMS_OUTPUT.PUT_LINE(p.name);
  DBMS_OUTPUT.PUT_LINE(s(1));
  DBMS_OUTPUT.PUT_LINE(s.first||\' \'||s.last||\' \'||s.count);
</code></pre>
<hr>

<h2>Arrays of objects</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE demo
AS
  TYPE person IS RECORD(sin NUMBER(9), name CHAR(30));  --class
  p person; --object
  TYPE sales IS TABLE OF NUMBER(10,2);  --array
  s sales;
  TYPE PEOPLE IS TABLE OF person; --array of objects
  workers PEOPLE;
BEGIN
  p.sin := 123;
  p.name := \'bob\';
  s(1) := 100.00;
  s(123) := 200.00;
  workers(1).sin := 123;
  DBMS_OUTPUT.PUT_LINE(p.name);
  DBMS_OUTPUT.PUT_LINE(s(1));
  DBMS_OUTPUT.PUT_LINE(s.first||\' \'||s.last||\' \'||s.count);
</code></pre>
';

      return $returnValue;
    }

  }
}