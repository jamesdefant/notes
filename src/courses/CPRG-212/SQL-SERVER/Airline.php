<?php

namespace J\ClassNotes {

  class Airline extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Airline
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Airline Assignment
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2></h2>
<h2>Sample Data</h2>
<p>These are the tables we will use as an example:</p>
'. \WriteHTML::getTableFromReport("./data/AirlineAss/Customers.rpt").
          \WriteHTML::getTableFromReport("./data/AirlineAss/Pilots.rpt").
          \WriteHTML::getTableFromReport("./data/AirlineAss/Planes.rpt").
          \WriteHTML::getTableFromReport("./data/AirlineAss/Tickets.rpt").
          '<hr>

';

      return $returnValue;
    }

  }
}