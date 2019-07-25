<?php

namespace J\ClassNotes {

  class Reports extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Reports
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Tables
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Packages</h2>';

$returnValue .= \WriteHTML::getTableFromReport("./_stuff/PROJ_WorkShop4/Packages.rpt");
      return $returnValue;
    }

  }
}