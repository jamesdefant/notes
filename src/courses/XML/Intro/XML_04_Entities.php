<?php

namespace J\ClassNotes {

  class XML_04_Entities extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Entities
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
XML Entities
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Defniition</h2>
<p>An entity is basically a variable in a XML document</p>
<p>
  Data is assigned to that entity reference and when that entity reference is used,
  the assigned data comes with it.
</p>
<hr>

<h2>Character References</h2>
<p>Entities that have a constant assigned value - specifically for special language characters</p>
<p>Unicode characters are listed on the <a href="www.unicode.org/charts" target="_blank">unicode website</a></p>
<p>Add them to your XML document in the following format:</p>
<code>&#nnnn</code> where nnnn is the ASCII number/character set 


CONTENT;

      return $returnValue;
    }

  }
}