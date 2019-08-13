<?php

namespace J\ClassNotes {

  class PLSQL_07_Reports extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Reports
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Create a nice Report in PL SQL
MAINHEADING;
    }

    /*----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are a number of ways to format a SELECT to produce a nice report</p>
<ul>
  <li><code>TTITLE [Text]</code> - attach a caption to the top of the report</li>
  <li><code>BTITLE [Text]</code> - attach a caption to the bottom of the report</li>
  <li><code>BREAK ON [column_name] SKIP [num_lines] ON REPORT</code> - make a gap in the rows and group like [column_name]s together</li>
  <li><code>COMPUTE SUM OF [column_name] ON [col_group] REPORT</code> - create a sum of [column_name]s grouped by [col_group]</li>
  <li><code>LABEL</code> - used with <code>COMPUTE</code> to attach a label to the sum</li>
  <li><code>COLUMN [column_name] HEADING [Text]</code> - alter the heading of a column to make it more readable</li>
  <li><code>FORMAT</code> - used with <code>COLUMN</code> to format the output</li>
  <li><code>SPOOL [file_path]</code> - write the report to a file</li>
  <li><code>PROMPT [Text]</code> - write a message after the report</li> 
</ul>
<p><b>Some functions need to be closed to clear the memory of their behaviours</b></p>
<ul>
  <li><code>TTITLE OFF</code> - clear the top title</li>
  <li><code>BTITLE OFF</code> - clear the bottom title</li>
  <li><code>CLEAR COLUMNS</code> - clear the columns</li>
  <li><code>CLEAR COLUMNS</code> - clear the columns</li>
  <li><code>CLEAR COMPUTES</code> - clear the computes</li>
  <li><code>CLEAR BREAKS</code> - clear the breaks</li>
  <li><code>SPOOL OFF</code> - clear the spool</li>
</ul>
<h2>An Example</h2>
<pre><code>
-- report writer
SPOOL c:\sql\j\report.txt

TTITLE \'Payroll|Report\'
BTITLE \'Confidential|Attn: Mr Smith\'

SET LINESIZE 60
SET PAGESIZE 35

BREAK ON deptno SKIP 1 ON REPORT
COMPUTE SUM LABEL \'TOTAL\' OF sal ON deptno REPORT

COLUMN sal HEADING \'Salary\' FORMAT $99,999.99
COLUMN ename HEADING \'Employee|Name\' FORMAT A8
COLUMN deptno HEADING \'Department|Number\'

SELECT deptno, ename, job, sal 
  FROM emp
  ORDER BY deptno;
  
SPOOL OFF
PROMPT Navigate to c:\sql\j\report.txt to see this report

TTITLE OFF
BTITLE OFF
CLEAR COLUMNS
CLEAR COMPUTES
CLEAR BREAKS

SET LINESIZE 100
SET PAGESIZE 40
</code></pre>
<hr>

<h2>Parameterized Queries</h2>
<p>Use an ampresand to prompt the user for an input in a query</p>
<pre><code>
SELECT * FROM inventory
  WHERE inv_price >= &min_price
  AND inv_size = \'&size\';
</code></pre>
<p>...which will show:</p>
<kbd>Enter value for min_price: </kbd><br>
<kbd>Enter value for size: </kbd>

<p>This will show all the commands that are executed unless you issue this command first:</p>
<pre><code>
SET VERIFY OFF
</code></pre>
<p>Customize the message that is displayed by using the <code>ACCEPT [var] [type] PROMPT [msg_text]</code> command:</p>
<pre><code>
// Hide the commands that are issued
SET VERIFY OFF

ACCEPT min_price NUMBER PROMPT \'Enter minimum price: \'

// Only display the items that are filtered by the first command
SELECT DISTINCT inv_size FROM inventory ORDER BY inv_size;
ACCEPT size CHAR PROMPT \'Enter size to show: \'

SELECT * FROM inventory
  WHERE inv_price >= &min_price
  AND inv_size = \'&size\';
  
// Turn the commands back on
SET VERIFY ON 
</code></pre>

';

      return $returnValue;
    }

  }
}