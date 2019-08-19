<?php

namespace J\ClassNotes {

  class PLSQL_15_Java extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Java
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {

      $relational = [
        ["SQL", "Shortcut"],
        ['SELECT * FROM orders', 'Π * (orders)'],
        ["SELECT order#, order_date FROM orders WHERE prov='AB'","Π order#, order_date, prov='AB' (orders)"],
        ["SELECT city, SUM(amount) FROM sales s INNER JOIN items i ON i.inv# = s.inv# WHERE prov='AB' GROUP BY city", "Π city [upside-down 5] σ prov='AB'"]
      ];

      $returnValue = '
<h2>Intro</h2>
<p>Open a command prompt and navigate to the bin folder of the jdk you\'re using</p>
<p>From here you can test .java files with the <kbd>javac</kbd> java compiler</p>
<p>Simply type:</p>
<pre><code>
c:\Program Files (x86)\Java\jdk1.8.0_221\bin> javac getgst.java
</code></pre>
<p>Then navigate to the root and type:</p>
<pre><code>
c:\> loadjava -user scott/tiger@orcl -force -resolve c:\sql\sayhi2.java
</code></pre>
<p>In <b>SQL Plus</b>, setup the environment to handle java</p>
<pre><code>
-- tun on output for XML
set long 10000

-- turn on output for java
exec dbms_java.set_output(10000) 
</code></pre>
<h2>Java Files</h2>
<p>Add these files:</p>
<p>sayhi.java</p>
<pre><code>
class sayhi2
{
  public static void sayhi()
  {
    SYstem.out.println("Hi from java");
  }
}
</code></pre>
<p>getgst.java</p>
<pre><code>
class getgst
{
  public static double gst(double x)
  {
    return x * 0.05;
  }
}
</code></pre>
<h2>Call a Procedure</h2>
<p>From SQL Plus, type:</p>
<pre><code>
CREATE OR REPLACE PROCEDURE javahi
AS
LANGUAGE java
NAME \'sayhi2.sayhi()\';
/
</code></pre>
<p>Call the Procedure like so:</p>
<kbd>exec javahi</kbd>
<hr>

<h2>Call a Function</h2>
<p><em>Notice the lowercase name (must match the java code exactly)</em></p>
<p>getgst.java</p>
<pre><code>
class getgst
{
  public static double gst(double x)
  {
    return x * 0.05;
  }
}
</code></pre>
<pre><code>
CREATE OR REPLACE FUNCTION javagst(x NUMBER) RETURN NUMBER AS
LANGUAGE java
NAME \'getgst.gst(double) return double\';
</code></pre>
<p>Call the function like so:</p>
<kbd>SELECT getgst(100) FROM dual;</kbd>

<h2>Relational Algebra</h2>
<p>A language of shortcuts to show SQL using math symbols</p>

<table class="table">
  <tr>
    <th>SQL</th>
    <th>Shortcut</th>
  </tr>
    <tr>
    <td>SELECT * FROM order;</td>
    <td>II * (orders)</td>
  </tr>
</table>



';

      return $returnValue;
    }

  }
}