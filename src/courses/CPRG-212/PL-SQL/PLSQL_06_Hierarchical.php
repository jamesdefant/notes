<?php

namespace J\ClassNotes {

  class PLSQL_06_Hierarchical extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Hierarchichal Query
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Hierarchichal Query (For Self-Join)
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $payrollTable = [
          ['SIN', 'name', 'manager_SIN'],
          ['1', 'Bob', ''],
          ['2', 'Ed', '1'],
          ['3', 'Mary', '1'],
          ['4', 'Timmy', '2'],
          ['5', 'Sally', '2'],
          ['6', 'Ronald', '3'],
      ];
      $returnValue = '
<h2>Intro</h2>
<p>
  Given the following data that represents a business\' payroll system, we can display it\'s 
  hierarchichal nature with the following SQL command:
</p>
<div>
  ' . \WriteHTML::getTable($payrollTable) . '
  <caption>Payroll Table</caption>
</div>
<pre><code>
SQL> SELECT LPAD(\' \', 3 * LEVEL) || name FROM payroll
     START WITH sin = 1
     CONNECT BY PRIOR sin = manager_sin; 
</code></pre>
<p>OUTPUTS</p>
<pre><code>
bob
  ed
    timmy
    sally
  mary
    ronald
</code></pre>

';

      return $returnValue;
    }

  }
}