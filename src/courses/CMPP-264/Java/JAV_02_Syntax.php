<?php

namespace J\ClassNotes {

  class JAV_02_Syntax extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Syntax
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Syntax in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $primDataTypes = [
        ["TYPE", "VALUE", "EXAMPLE"],
        ["<kbd>byte</kbd>", "8-bit signed integer", "<code>byte myNum = 100;</code>"],
        ["<kbd>short</kbd>", "16-bit signed integer", "<code>short myNum = 5000;</code>"],
        ["<kbd>int</kbd>", "32-bit signed integer", "<code>int myNum = 100000;</code>"],
        ["<kbd>long</kbd>", "64-bit integer signed/unsigned", "<code>long myNum = 15000000000L;</code>"],
        ["<kbd>float</kbd>", "single precision 32-bit floating point", "<code>float myNum = 5.75f;</code>"],
        ["<kbd>double</kbd>", "double precision 64-bit floating point", "<code>double myNum = 19.99d;</code>"],
        ["<kbd>boolean</kbd>", "true/false", "<code>boolean isMindAltering = false;</code>"],
        ["<kbd>char</kbd>", "single 16-bit Unicode character", "<code>char myGrade = 'A';</code>"]
      ];
      $comDataTypes = [
        ["TYPE", "VALUE", "EXAMPLE"],
        ["<kbd>String</kbd>", "string literal - immutable", "<code>String myName = \"James\";</code>"],
        ["<kbd>Calendar</kbd>", "use instead of <kbd>Date</kbd>", "<code>Calendar c = Calendar.getInstance();</code>"]
      ];
      $wrappers = [
        ["PRIMITIVE DATA TYPE", "Wrapper Class"],
        ["<kbd>boolean</kbd>", "<code>Boolean</code>"],
        ["<kbd>byte</kbd>", "<code>Byte</code>"],
        ["<kbd>char</kbd>", "<code>Character</code>"],
        ["<kbd>short</kbd>", "<code>Short</code>"],
        ["<kbd>int</kbd>", "<code>Integer</code>"],
        ["<kbd>long</kbd>", "<code>Long</code>"],
        ["<kbd>float</kbd>", "<code>Float</code>"],
        ["<kbd>double</kbd>", "<code>Double</code>"],
      ];

      $returnValue = '
<h2>Intro</h2>
<p>Java uses a syntax similar to the C languages:</p>
<pre><code>
// Define what package this class belongs to
package com.example;

// Define the class
public class ExampleProgram {
  
  // Define the main method 
  public static void main(String[] args) {

    System.out.println("Print this out");
  }
}
</code></pre>
<p>A <b>class</b> is compiled into a <b>package</b> which logically groups related classes together</p>
<hr>


<h2>Primitive Data Types</h2>' .
\WriteHTML::getTable($primDataTypes)
. '
<h2>Complex Data Types</h2>
'. \WriteHTML::getTable($comDataTypes) .'

<h2>Wrapper Classes</h2>
<p>Wrapper classes are classes that contain the value type but also have a number of methods to manipulate that value</p>
'. \WriteHTML::getTable($wrappers) .'
<pre><code>
int x = 5;
Integer y = 10;

if(y.equals(x)) 
{
  System.out.println("The value of x is the same as the value of y"); 
}  
</code></pre>
<p>When comnparing objects, use the <code>equals()</code> method instead of the <code>==</code>  comparison operator</p>
<hr>

<h2>Comments</h2>
<p><b>Single line</b> comments use <code>//</code></p>
<pre><code>
// This is a comment
</code></pre>
<p><b>Multi-line</b> comments use <code>/* Comment */</code></p>
<pre><code>
/*
  This is a 
  multi-line commment
*/  
</code></pre>
<p><b>javadoc</b> comments (comments that are compiled into documentation) use <code>/** Comment */</code></p>
<pre><code>
/**
  * This is a comment that will get compiled to documentation 
  */
</code></pre>
<hr>

<h2>Naming Conventions</h2>
<ul>
  <li>
    <b>Class & Interface</b><br>
    <code>HelloWorldApp</code>
  </li>
  <li>
   <b>Method</b><br>
    <code>calcPay()</code>
  </li>
  <li>
    <b>Variable</b><br>
    <code>monthlySalary</code>
  </li>
  <li>
    <b>Constant</b><br>
    <code>MAX_SALARY</code>
  </li>  
</ul>

<h2>For-each (style) loop</h2>
<pre><code>
for (DataType localVarName : listName) {
  code goes here;
}

// For Example:

String[] names = {"John", "Jack", "James"};
for(String name : names) {
  System.out.println(name);
} 
</code></pre>



';

      return $returnValue;
    }

  }
}