<?php

namespace J\ClassNotes {

  class CS_02_Strings extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Strings
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Strings
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Literals and Escape Characters</h2>
<p>Literal <code>char</code> value is enclosed in <em>single quotes</em>, for example 'a'</p>
<p>Literal <code>string</code> value is enclosed in <em>double quotes</em>, for example "Hello"</p>
<p>Use <code>\</code> (backslash) character as escape character, for example:</p>
<pre><code>
string myString = "Hello, \" World \"";
</code></pre>
<p>Can be used to introduce new line <code>\n</code>, tab <code>\t</code>, etc.</p>
<p>To use the backslash character (<code>\</code>) escape it with another backslash, for example: <code>\\</code></p>
<hr>

<h2>Numeric Conversions</h2>
<p>All values obtained by an input (TextBow, etc) are string types</p>
<p>Before they can be used in calculations, they need to be converted to whichever numeric type is appropriate, for example:</p>
  
<pre><code>
double price = Convert.ToDouble(txtPrice.Text);
int hours = Convert.ToInt32(txtHours.Text);

if(Double.TryParse(txtPrice.Text, out double result)
{
  Console.WriteLine("Result = " + result);
}
</code></pre>
<p>Similarly, numeric values have to be converted to a string before being displayed in a string output, for example:</p>
<pre><code>
uxResult.Text = result.ToString();
</code></pre>
<p>You can use a parameter in <code>ToString()</code> to format it in a particular manner, for example:</p>
<pre><code>
uxResult.Text = result.ToString("c");
</code></pre>
<hr>

<h2>Arithmetic</h2>
<pre><code>
int number = 15;
number = number + 10; // number = 25
number = 36 * 15;     // number = 540
number = 12 - (42/7); // number = 6
number += 3;          // number = 6 + 3 = 9
number *= 3;          // number = 9 * 3 = 27
number = 71 / 3;      // 23.666 truncated to 23
number = 71 % 3;      // number = 2             - modulus (returns the remainder from 71 / 3)
number++;             // number = 2             - post unary (adds 1 after the execution)
--number;             // number = 1             - pre unary (subtracts 1 before execution) 
</code></pre>
<hr>




CONTENT;

      return $returnValue;
    }

  }
}