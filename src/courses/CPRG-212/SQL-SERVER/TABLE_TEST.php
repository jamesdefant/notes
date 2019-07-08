<?php

namespace J\ClassNotes {

  class TABLE_TEST extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
TABLE
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'

MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>ar_customers</h2>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_customers.rpt").


'<h2>ar_invoices</h2>
    '. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_invoices.rpt").


'<h2>ar_salespeople</h2>
'. \WriteHTML::getTableFromReport("./data/SQL_SERVER/ALL_ar_salespeople.rpt").

'<h2>ar_salespeople</h2>
'. \WriteHTML::getTableFromReport("./data/SQL_TESTS/TopSalesPerson.rpt");

      return $returnValue;
    }

  }
}