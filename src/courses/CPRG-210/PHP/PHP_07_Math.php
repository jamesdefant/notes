<?php

namespace J\ClassNotes {

  class PHP_07_Math extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Built-In
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PHP Built-In Functions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Math Functions</h2>
<p><code>round() - round($number, 2)</code> - 2 is the number of decimal places</p>
<p><code>ceil()</code> - round up</p>
<p><code>floor()</code> - round down</p>
<p><code>rand() - rand(min, max)</code> - returns a (pseudo)random number between <em>min</em> & <em>max</em></p>
<hr>

<h2>String Functions</h2>
<p><code>strlen( $str )</code> - returns Length of $str</p>
<p><code>strtoupper() - strtolower()</code></p>
<p><code>trim( $str, <em>$charList</em> )</code> - removes whitespacew from either side of $str, optionally remove chars specified in $charList</p>
<p><code>strtok( $str, $token )</code> - returns a string that has been split at each token</p>
<p><code>substr( $str, start, length )</code> - returns a part of $str</p>
<hr>

<h2>User Defined-Functions</h2>
<pre><code>
function myFunctionName( argumentList )
{
statements;
}

myFunctionName();

</code></pre>
<hr>

<h2>Global Variables</h2>
<p>Best practice to avoid using global variables</p>
<p>All variables defined outside the scope of a function are implicitly global</p>
<p>To use a global variable inside a function, prepend the variable name with the keyword <em>global</em></p>
<code><pre>
$myVar = 5;

function incrementer( $localVar ) 
{
global $myVar;
print ++$localVar;
}

incrementer( $myVar );

</code></pre>
CONTENT;
    }

  }
}