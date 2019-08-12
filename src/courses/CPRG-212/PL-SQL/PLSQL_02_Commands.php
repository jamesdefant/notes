<?php

namespace J\ClassNotes {

  class PLSQL_02_Commands extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Commands
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PL-SQL Commands
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<ul>
<li>
  <code>set pagesize 40</code> - sets how many lines will be displayed (vertically) before the header re-appears
</li> 
<li>
  <code>set linesize 120</code> - set how may characters on a page (horizontally) before the line wraps
</li>
</ul>
<hr>


<h2>Oracle SQL Commands</h2>
<p><em>ALL SQL COMMANDS IN ORACLE NEED TO BE CLOSED WITH A SEMICOLON!!</em></p>
<p>Join tables with <code>using()</code> or <code>NATURAL JOIN</code></p>
<pre><code>
// Standard SQL
SELECT dbname, ename, job, sal
FROM dept d join emp e on d.deptno = e.deptno

// Oracle
SELECT dbname, ename, job, sal
FROM dept d join emp e using(deptno)

// or //
SELECT dbname, ename, job, sal
FROM dept d NATURAL JOIN emp e
</code></pre>
<hr>
<p>Get current date with <code>sysdate</code></p>
<pre><code>
select sysdate from dual;
</code></pre>
<hr>

<p></p>

';

      return $returnValue;
    }

  }
}