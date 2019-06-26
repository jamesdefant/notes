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
<p>A language defniition that specifies how and when a XML file will validate</p>

<h2>Document Type Definition</h2>
<p></p>


CONTENT;

      return $returnValue;
    }

  }
}