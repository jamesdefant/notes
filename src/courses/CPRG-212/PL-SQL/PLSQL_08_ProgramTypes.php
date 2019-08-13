<?php

namespace J\ClassNotes {

  class PLSQL_08_ProgramTypes extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Program Types
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Oracle Program Types
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $programTypesData = [
        ['Oracle Program Types', 'Commands Allowed', 'IN Min', 'IN Max', 'OUT Min', 'OUT Max', 'Command to Start'],
        ['Script', 'ALL', '0', 'INF', '0', '0', 'START'],
        ['Procedure', 'ALL', '0', 'INF', '0', 'INF', 'EXEC'],
        ['Function', 'SELECT', '0', 'INF', '1', '1', 'SELECT uppername WHERE uppername = "bob"'],
        ['Trigger', 'SELECT, INSERT, UPDATE, DELETE', '0', '0', '0', '0', 'Runs by itself when a table is changed'],
        ['Package', 'ALL', '0', '0', '0', '0', 'EXEC']
      ];

      $throw = [
        ['C#', 'PL SQL'],
        ['Throw("Hey")', 'RAISE.APPLICATION.ERROR(-20001, "HEY");']
      ];
      $returnValue =
          \WriteHTML::getTable($programTypesData) .'
<p>Package is like a .zip with related functions & procedures in it</p>
<hr>

<h2>Program Structure</h2>
<pre><code>
CREATE [FUNCTION | PROCEDURE | TRIGGER | PACKAGE] Test_program(x NUMBER, y NUMBER)

// Declare variables
AS
  total NUMBER(10,2) := 0;
  last_dept CHAR(30);

// COde
BEGIN

// Try/Catch for errors
EXCEPTION

END;

/
</code></pre>

<h2>Decisions</h2>
<pre><code>
IF
  ...
ELSE
  ...
END IF;

// or

IF prov = \'AB\' THEN
  ...
ELSIF prov = \'BC\' THEN
  ...
ELSE
  ...
END IF;  
</code></pre>
<hr>

<h2>While Loop</h2>
<pre><code>
x := 1;
WHILE (x <= 10) LOOP
  ...
  x := x + 1;

END LOOP;
</code></pre>
<hr>

<h2>For Loop</h2>
<p><em>The FOR loop <b>always</b> increments by <b>1</b></em></p>
<pre><code>
FOR x IN 1..10 LOOP
  ...
END LOOP;

// or chars

FOR x IN A..B LOOP
  ...
END LOOP;

// or REVERSE
FOR x IN REVERSE 1..10
  ...
END LOOP;
</code></pre>
<hr>

<h2>Output Commands</h2>
<pre><code>
DBMS_OUTPUT.PUT_LINE(\'Hi\'||\' \'||\'there\'||x);
</code></pre>

<p><code>CHAR(9)</code> is a <kbd>TAB</kbd></p> 
<p><code>CHAR(10)</code> is a <kbd>newline</kbd></p>
<pre><code>
DBMS_OUTPUT.PUT_LINE(\'Hi\'||CHAR(9)||\'there\');

// or use RPAD() to space 

DBMS_OUTPUT.PUT_LINE(RPAD(\'Hi\', 20)||\'there\');

</code></pre>
<hr>

<h2>Throw</h2>
'. \WriteHTML::getTable($throw) . '
<hr>

<h2>Arrays</h2>
<pre><code>
TYPE sales IS TABLE OF NUMBER(10,2) INDEX BY BINARY_INTEGER;
  x SALES;
    x(1) := 100.00;
    x(123) := 200.00;
    x(-3) := 300.00;
    
// 2D array
sales2 IS TABLE OF sales;
  y sales2;
  y(1,4) := 100.00;    
</code></pre>
<hr>

<h2>Classes</h2>
<p>In <b>C#</b>, it would look like this:</p>
<pre><code>
// Define it
class Person
{
  public int sin;
  public string name;
}

// Call it
Person p = new Person();
p.sin = 123;
p.name = "Bobo";
</code></pre>
<p>In <b>PL SQL</b> it looks like this:</p>
<pre><code>
// Define it
TYPE person IS RECORD (sin NUMBER(9), name CHAR(30));

// Call it
p person;
p.sin := 123;
p.name := \'Bob\';
</code></pre>




';

      return $returnValue;
    }

  }
}