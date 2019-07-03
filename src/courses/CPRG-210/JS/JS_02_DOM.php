<?php

namespace J\ClassNotes {

  class JS_02_DOM extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JavaScript DOM
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
JavaScript DOM Notes
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Select DOM element</h2>
<ul>
  <li>Use <code>var elem = document.getElementById( "id" );</code> to get an element by it's ID attribute.</li>
  <li>Use <code>var elemArray = document.getElementsByClassName( "class" );</code> to get an array of elements with this class name.</li>
  <li>Use <code>var elemArray = document.querySelector( "selector" );</code> to get an array of elements that have this CSS selector.</li>
</ul>
<hr>

<h2>Create HTML element</h2>
<ol>
  <li>Use <code>var elemNode = document.createElement( "tag" );</code> to create the base element.</li>
  <li>Use <code>var node = document.createTextNode( "string" );</code> to create the text that would be inside an HTML tag.</li>
  <li>Use <code>elemNode.appendChild( node );</code> to add the text to the HTML element</li>
  <li>Use <code>var element = document.getElementById( "main" );</code> to grab the main HTML element.</li>
  <li>Use <code>element.appendChild( elemNode );</code> to add the constructed element to the main HTML tag.</li>
</ol>
<hr>

<h2>Change attributes of HTML element</h2>
<ul>
  <li>Use <code>var elem = document.getElementById( "id" );</code> or some such to grab an element.</li>
  <li>Use <code>elem.setAttribute( attr-name, attr-value );</code> to set the attribute on that element.</li>
  <li>
    <dl>
      <dt>For example:</dt>
        <dd><code>img.setAttribute( "src", "img.picture.jpg" );</code></dd>
        <dd><code>img.setAttribute( "width", "450" );</code></dd>
    </dl>
  </li>
  <li>Use <code>elem.classList.add( "class1", "class2", "class3" );</code> to add classes to the HTML element.</li>
</ul>
CONTENT;

      return $returnValue;
    }

  }
}