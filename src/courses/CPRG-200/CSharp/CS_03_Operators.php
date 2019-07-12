<?php

namespace J\ClassNotes {

  class CS_03_Operators extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Operators
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Operators
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Assignment Operators</h2>
<table class="table">
  <thead>
    <tr>
      <th>Operator</th>
      <th>Example</th>
      <th>Same as:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>+=</td>
     <td>y += x</td>
     <td>y = y + x</td>
    </tr>
    <tr>
     <td>-=</td>
     <td>y -= x</td>
     <td>y = y - x</td>
    </tr>
    <tr>
     <td>*=</td>
     <td>y *= x</td>
     <td>y = y * x</td>
    </tr>
    <tr>
     <td>/=</td>
     <td>y /= x</td>
     <td>y = y / x</td>
    </tr>
    <tr>
     <td>%=</td>
     <td>y %= x</td>
     <td>y = y % x</td>
    </tr>
  </tbody>
</table>
<hr>

<h2>Operator Precedence</h2>
<table class="table">
  <thead>
    <tr>
      <th>Precedence</th>
      <th>Operators</th>
      <th>Operator Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>HIGHEST</th>
      <td>var++, var--, (), +var, -var , !var, ~var</td>
      <td>Unary and Parenthetical</td>
    </tr>
    <tr>
      <th></th>
      <td>*, /, %</td>
      <td>Multiplicative</td>
    </tr>
    <tr>
      <th></th>
      <td>+, -</td>
      <td>Additive</td>
    </tr>
    <tr>
      <th></th>
      <td><<, >></td>
      <td>Bit-wise Shift</td>
    </tr>
    <tr>
      <th></th>
      <td><, >, <=, >=</td>
      <td>Relational</td>
    </tr>
    <tr>
      <th></th>
      <td>==, !=</td>
      <td>Equality</td>
    </tr>
    <tr>
      <th></th>
      <td>&</td>
      <td>Logical AND</td>
    </tr>
    <tr>
      <th></th>
      <td>^</td>
      <td>Logical XOR</td>
    </tr>
    <tr>
      <th></th>
      <td>|</td>
      <td>Logical OR</td>
    </tr>
    <tr>
      <th></th>
      <td>&&</td>
      <td>Conditional AND</td>
    </tr>
    <tr>
      <th></th>
      <td>||</td>
      <td>Conditional OR</td>
    </tr>
    <tr>
      <th></th>
      <td>??</td>
      <td>Null-coalescing</td>
    </tr>
    <tr>
      <th></th>
      <td>t ? x : y</td>
      <td>Ternary</td>
    </tr>
    <tr>
      <th></th>
      <td>=, *=, /=, %=, +=, -+, <<=, >>=, &=, ^=, |=</td>
      <td>Assignment</td>
    </tr>
    <tr>
      <th>LOWEST</th>
      <td>--var, ++var</td>
      <td>Unary</td>
    </tr>
  </tbody>

</table>

<h2>Simple Conditional Statement</h2>
<pre><code>
if(condition)
{
    // executed when condition is (==) true
}
else
{
    // executed when condition not (!=) true (false)
}

// for example:

bool isSuccess = true;
string msg = "";

if(isSuccess)
{
  msg = "Operation successful";
}
else
{
  msg = "Operation failed";
}
Console.WriteLine(msg);
</code></pre>
<p>If the code to be executed is <b>only 1 line long</b>, you can omit the parentheses</p>
<pre><code>
if(isSuccess)
  msg = "Operation successful";
else
  msg = "Operation failed";
  
Console.WriteLine(msg);  
</code></pre>
<hr/>

<h2>Ternary Operator</h2>
<p>A more concise way of writing an if/else statement is with the <b>ternary</b> operator:</p>
<pre><code>
msg = isSuccess ? "Operation successful" : "Operation failed";
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}