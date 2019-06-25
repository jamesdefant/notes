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
C# Types
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Classification</h2>
<p>Type is what all elements in the C# language are at their heart</p>
<p>Classes, structs, enums, events are all <em>Types</em></p>
<p>There are two <em>types</em> of <code>Type</code>:</p>
<ul>
  <li>Value types</li>
  <li>Reference types</li>
</ul>
<hr>

<h2>Value Types</h2>
<p>Value types <strong>hold a <em>value</em></strong></p>
<p>The primitive types that are built in to the .NET Framework are <em>value types</em></p>
<p>Such as:</p>
<ul>
  <li><code>byte</code></li>
  <li><code>char</code></li>
  <li><code>int</code></li>
  <li><code>float</code></li>
  <li><code>bool</code></li>
  <li><code>enum</code></li>
  <li><code>struct</code></li>
</ul>
<p>Value types are built from <code>structs</code> or <code>enums</code></p>
<p><code>structs</code> are not nullable</p>
<p>Value types are derived from <code>System.ValueType</code></p>
<p><code>structs</code> generally occupy space in memory on the <em>stack</em></p>
<p>Because of this allocation, the <em>system</em> handles the memory allocation (quick)</p>
<hr>

<h2>Reference Types</h2>
<p>Reference types <strong>hold a <em>reference</em></strong> to a value</p>
<p>The more complex types that are built in to the .NET Framework are <em>reference types</em></p>
<p>Such as:</p>
<ul>
  <li><code>object</code></li>
  <li><code>string</code></li>
  <li><code>delegate</code></li>
  <li><code>class</code></li>
  <li><code>interface</code></li>
  <li><code>dynamic</code></li>
</ul>
<p>Reference types are built from <code>classes</code></p>
<p>Reference types are derived from <code>System.object</code></p>
<p><code>classes</code> occupy space in memory on the <em>heap</em></p>
<p>Because of this allocation, the <em>CLR</em> handles the memory allocation (slower - intermittent Garbage Collection)</p>
CONTENT;

      return $returnValue;
    }

  }
}