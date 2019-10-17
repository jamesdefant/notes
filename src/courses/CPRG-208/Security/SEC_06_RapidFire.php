<?php

namespace J\ClassNotes {

  class SEC_06_RapidFire extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
RapidFire
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
RapidFire
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>RapidFire is a competitor to AppScan</p>
<p><a href="https://www.rapidfiretools.com/" target="_blank">https://www.rapidfiretools.com/</a> </p>


';

      return $returnValue;
    }

  }
}