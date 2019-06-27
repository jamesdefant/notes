<?php

namespace J\ClassNotes {

  class XML_05_Namespaces extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Namespaces
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
XML Namespaces
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Definition</h2>
<p>A collection of related element names identified by the namespace name</p>
<p><strong>Why?</strong> Complex XML documents can have elements with the same name</p>
<p>The DTD needs to distinguish between different elements with the same name</p>
<p>Namespaces are 'SuperLabels' that help distinguish between elements that share the same name</p>
<p>DTDs lack direct support for namespaces, which is why the industry uses XSDs</p>

CONTENT;

      return $returnValue;
    }

  }
}