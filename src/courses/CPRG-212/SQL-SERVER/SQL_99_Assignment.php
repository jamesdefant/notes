<?php

namespace J\ClassNotes {

  class SQL_99_Assignment extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ASSignment
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL Assignment
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Accounts Receivable Assignment</h2>
<p>Steps:</p>
<ol>
  <li>Always start by looking at what the answer should be so you know if you have the right answer</li>
  <li>Determine what methods need to be undertaken to achieve the result</li>
</ol>


<strong>Add 2% of invoice amount to total interest and put it in the current month interest charges for invoices more than 1 month old</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
<hr/>

<strong>List current interest charges for each customer name (1 line per customer)</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/CurrentInterestPerCustName.rpt") .
'<hr/>


<strong>List total owing (amount + interest) for each customer name (1 line per customer)</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/TotalOwing.rpt") .
'<hr/>

<strong>List total sales for each salesperson name for invoices created during the last year</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/TotalSalesLastYear.rpt") .
'<hr/>


<strong>List total sales for each province for invoices created during the last month</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/ProvSalesLastMonth.rpt") .
'<hr/>

<strong>Find sales people with no sales</strong>
<p>Steps:</p>
<ol>
  <li>OUTER JOIN</li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/NoSales.rpt") .
'<hr/>

<strong>Find the best customers (rating 2) who have purchased more than 1 times from us during the last year</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
<hr/>

<strong>List the salespeople who sell to the worst customers (rating 3)</strong>
<p>Steps:</p>
<ol>
  <li></li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/SalesPersonWorstCust.rpt") .
          '<hr/>


<strong>Find the salesperson with the most sales</strong>
<p>Steps:</p>
<ol>
  <li>Select TOP 1 of the SUM of all salespersons invoices</li>
  <li>JOIN the name to the invoice</li>
</ol>
' . \WriteHTML::getTableFromReport("./data/SQL_ASS/TopSalesPerson.rpt") .
'<hr/>

';

      return $returnValue;
    }

  }
}