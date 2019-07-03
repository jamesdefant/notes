<?php

namespace J\ClassNotes {

  class CS_06_Collections extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Collections
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Collections
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Arrays vs Collections</h2>
<p>Both store multiple elements as a single variable</p>
<pre><code>
string[] stringArray = new string[4];
List<string> stringList = new List<string>();
</code></pre>
<p>However, they are fairly different:</p>
<p>Arrays are a feature of the C# language itself while collections are classes in the .NET Framework</p>
<p>Collection classes provide methods to perform operations that arrays don't provide</p>
<p>
  An array is <em>immutable</em> - meaning that it <strong>cannot</strong> be resized 
  (the amount of memory allocated to it is <em>static</em>).
</p>
<p>
  A collection is <em>mutable</em> - meaning that it <strong>can</strong> be resized
  (the amount of memory allocated to it is <em>dynamic</em>)
</p>

CONTENT;

      return $returnValue;
    }

  }
}