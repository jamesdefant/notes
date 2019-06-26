<?php

namespace J\ClassNotes {

  class XML_03_Attributes extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Attributes
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
XML Attributes
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Definition</h2>
<p>Attrubutes describe their element</p>
<p>Contributes supplementary data about the element itself, instead of the elements contents</p>
<p>
  Information in attributes tend to be <em>about</em> the content of the XML page, 
  rather thaan <em>part</em> of the content
</p>
<hr>

<h2>Declaration</h2>
<ul>
  <li><code>&lt;!ATTLIST tagName attributeName ...</code></li>
  <li>...CDATA - attribute's value is composed of any combination of characters</li>
  <li>
    ...<code>(calue_1|value_2|...)</code> - a choice of possible values for the attribute - 
    confining the attribute value to the list
  </li>
  <li>...<code>"default_value"</code> - a default value for the attribute</li>
  <li>...<code>#FIXED "default_value"</code> - attribute can <strong>ONLY</strong> be this value</li>
  <li>...<code>#IMPLIED</code> - has no default value and can be entirely omitted</li>
  <li>...<code>#REQUIRED</code> - attribute must be present and contain a value</li>
  <li>...<code>ID #REQUIRED</code> - attribute must be present and contain a unique value on the XML document</li>
</ul>
<hr>

<h2>Enumerated Attributes</h2>
<p>A list of preset values that an attribute can have</p>
<p>
  <code>&lt;!ATTLIST school year (1999|2000|2001|2002)&gt;</code> - 
  confines the values that 'year' can have to only <strong>one</strong> value in the list
</p>
<hr>

<h2>For Example:</h2>
<pre><code>
&lt;!ATTLIST picture
  filename CDATA #REQUIRED
  x CDATA #REQUIRED
  y CDATA #REQUIRED&gt;
</code></pre>
<p><strong>picture</strong> is the element and<br><strong>x</strong> & <strong>y</strong> are required attributes</p>
<pre><code>
&lt;!ATTLIST population
  year CDATA #IMPLIED&gt;
</code></pre>
<p><strong>population</strong> is the element and<br><strong>year</strong> is an optional attribute</p>

CONTENT;

      return $returnValue;
    }

  }
}