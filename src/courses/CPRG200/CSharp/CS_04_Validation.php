<?php

namespace J\ClassNotes {

  class CS_04_Validation extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Validation
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Validation
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Proactive Approach</h2>
<p>Prevent runtime errors from happening</p>
<ul>
  <li>Testing conditions in the code</li>
</ul>
<hr>

<h2>Reactive Approach</h2>
<p>Allow errors to happen and handle them</p>
<ul>
  <li>Throw Exceptions - nice because Exception classes can be seperate from "normal"
    execution code</li>
</ul>
<hr>

<h2>Safe Numeric Conversions</h2>
<p>Instead of using the <code>Convert</code> class (ie. <code>int myInt = Convert.ToInt32(myString);</code>)
  Use:</p>
 <pre><code>
 if(&lt;type&gt;.TryParse(myString, out Type type)
 {
  // Here, type is only available if it converts
 }
 </code></pre>

CONTENT;

      return $returnValue;
    }

  }
}