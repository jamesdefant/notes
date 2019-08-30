<?php

namespace J\ClassNotes {

  class JayJohnstone extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Jay Johnstone
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Jay Johnstone
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  Jay can open Linux & Python essential courses on <a href="http://www.netcad.com" target="_blank">netcad.com</a><br>
  For access, email Jay at <a href="mailto:jay.johnstone@sait.ca">jay.johnstone@sait.ca</a>
</p> 

';

      return $returnValue;
    }

  }
}