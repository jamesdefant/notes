<?php

namespace J\ClassNotes {

  class CS_10_Type extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Type
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Type
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Classification</h2>
<p>Type is another word for a class</p>
<p>There are two <em>types</em> of <code>Type</code>:</p>
<ul>
  <li>Value types</li>
  <li>Reference types</li>
</ul>
<hr>

<h2>Value Types</h2>
<p>Value types <strong>hold a <em>value</em></strong></p>
<p>The primitive types that are built in to the .NET Framework are <em>value types</em></p>
<p>Value types are built from <code>structs</code></p>
<p><code>structs</code> are not nullable</p>
<p>Value types are derived from <code>System.ValueType</code></p>
<p><code>structs</code> generally occupy space in memory on the <em>stack</em></p>
<p>Because of this allocation, the <em>system</em> handles the memory allocation (quick)</p>
<hr>

<h2>Reference Types</h2>
<p>Reference types <strong>hold a <em>reference</em></strong> to a value</p>
<p>The more complex types that are built in to the .NET Framework are <em>reference types</em></p>
<p>Reference types are built from <code>classes</code></p>
<p>Reference types are derived from <code>System.object</code></p>
<p><code>classes</code> occupy space in memory on the <em>heap</em></p>
<p>Because of this allocation, the <em>CLR</em> handles the meemory allocation (slower - intermittent Garbage Collection)</p>
CONTENT;

      return $returnValue;
    }

  }
}