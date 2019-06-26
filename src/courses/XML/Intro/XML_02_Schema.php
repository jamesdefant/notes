<?php

namespace J\ClassNotes {

  class XML_02_Schema extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Schema
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
DTD (Schema)
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Schema</h2>
<p>A language defniition that specifies which elements and attributes are allowed or required in a document</p>
<p>Schemas are not required but are important tools for keeping documents consistent</p>
<hr>

<h2>Document Type Definition</h2>
<p>DTD is an older but widely used system of rules with a peculiar and somewhat limited syntax</p>
<p>A *.dtd file is a collection of these rules</p>
<hr>

<h2>DTD Element Stucture</h2>
<ul>
  <li>ELEMENT must be all caps</li>
  <li><code>&lt;!ELEMENT tagName EMPTY&gt;</code></li>
  <li><code>&lt;!ELEMENT tagName (#PCDATA)&gt;</code></li>
  <li><code>&lt;!ELEMENT tagName (childElement, ...)&gt;</code></li>
  <li>Don't need to close rule definitions with <code>/&gt;</code></li>
</ul>
<hr>

<h2>#PCDATA</h2>
<p>"Parsed Character Data" - everything (numbers, letters, symbols,...) except markup text</p>
<p>Major limitation of DTD's - Can't specify data types. It's only text.</p>
<code>&lt;year&gt;1993&lt;/year&gt;</code> can also be<br>
<code>&lt;year&gt;Dragon&lt;/year&gt;</code>
<hr>

<h2>Declarations</h2>
<ul>
  <li><code>&lt;!ELEMENT animal (name+, threats*, weight?)&gt;</code></li>
  <li>threats can contain it's own child elements</li>
  <li>"?" -> 0 - 1</li>
  <li>"*" -> 0 - many</li>
  <li>"+" -> 1 - many</li>
  <li>Can use a "|" (pipe) in child element definition to say this OR that</li>
  <li><code>&lt;!ELEMENT animal (name+, threats*, weight | height)&gt;</code> means weight OR height</li>
  <li>Children (inside the parentheses) <strong>must</strong> be in the correct order</li>
</ul>
<h3>Examples:</h3>
<ul>
  <li><code>&lt;!ELEMENT weight (#PCDATA)&gt;</code> - element "weight" defined as text only</li>
  <li><code>&lt;!ELEMENT mammal (whales)&gt;</code> - element "mammal" must contain only <em>one element</em> "whales"</li>
  <li>
    <code>&lt;!ELEMENT mammal (whales, elephants, (gorillas | monkeys))&gt;</code> - 
    element "mammal" must contain, in order, one "whales" element, one "elephants" element, and one of 
    either the "gorillas" or "monkeys" elements
  </li>  
</ul>

CONTENT;

      return $returnValue;
    }

  }
}