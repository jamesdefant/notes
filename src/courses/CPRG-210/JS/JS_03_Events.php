<?php

namespace J\ClassNotes {

  class JS_03_Events extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Events
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
JavaScript Events
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Traditional DOM event handlers</h2>
<ul>
  <li>Use <code>onclick()</code> to send an event when the element is clicked.</li>
  <li>Use <code>onfocus()</code> to send an event when an input is selected.</li>
  <li>Use <code>onblur()</code> to send an event when an input loses focus.</li>
  <li>Use <code>onmouseover()</code> to send an event when the mouse moves over an element.</li>
  <li>Use <code>onmouseleave()</code> to send an event when the mouse moves off of an element.</li>
</ul>
<hr>

<h2>Change the element class to change it's look</h2>
<ul>
  <li>Use <code>elem.classList.add( "class1", "class2", "class3" );</code> to add classes to the HTML element.</li>
</ul>
<hr>

<h2>Validate forms</h2>
<ul>
<pre><code>
function validateForm( form ) {
if(form.elements[1].value == "1") {

alert( "Input must have a value" );
form.elements[1].focus();
return false;
}
return true;
}
  </code></pre>
</ul>

CONTENT;

      return $returnValue;
    }

  }
}