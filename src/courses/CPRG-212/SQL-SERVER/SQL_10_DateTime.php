<?php

namespace J\ClassNotes {

  class SQL_10_DateTime extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DateTime
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL DateTime Commands
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are many Date/Time commands in SQL SERVER including:</p>

';

      return $returnValue;
    }

  }
}