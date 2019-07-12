<?php

namespace J\ClassNotes {

  class CSDB_10_Transactions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Transactions
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Transactions in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  Transactions are an important was to work with databases in that in a series of executions, if any one fails,
  they all revert to how they were before 
</p>
<hr/>

<h2>Steps</h2>
<ol>
  <li>Create a <b>Transaction</b> object</li>
  <li>Create <b>Command</b> objects and add to <b>Transaction</b></li>
  <li><b>Execute commands</b></li>
  <li>If necessary, <b>COMMIT</b> or <b>ROLLBACK</b></li>  
</ol>
<hr/>

<pre><code>

</code></pre>

<h2>Types of Concurrency Problems</h2>
<ol>
  <li>Lost Updates</li>
  <li>Dirty Reads</li>
  <li>Non-repeatable reads</li>
  <li>Phantom reads</li>
</ol>
<hr/>

<h2>Lost Updates</h2>
<p>If "last-in-wins" policy is in effect, two users select the same row and perform an update</p>
<p>The second users update overwrites the update of the first one</p>
<p>The earlier update is lost</p>
<p><b>This may be OK or not</b></p>
<hr/>

<h2>Dirty Reads</h2>
<p>Transaction A changes a row</p>
<p>Transaction B selects that row</p>
<p>Transaction A rolls back, reverting the change</p>
<p>Ineffec, transaction B has an image of data that does not exist</p>
<p><b>Usually bad</b></p>
<hr/>

<h2>Non-repeatable Reads</h2>
<p>Transaction A selects a ro</p>
<p>Transaction B updates the same row</p>
<p>Transaction A selects this row again, getting different values</p>
<p>In effect, two reads of the same data result in different values</p>
<p>This may be OK or not</p>
<hr/>

<h2>Phantom Reads</h2>
<p>
  When you perform several update or delete operations on a set of rows, while another user
  performs insert or delete on the same set of rows
</p>
<p>For example, transaction A updates payment total for all invoices that have balance due</p>
<p>
  While transaction A is running, transaction B inserts a new unpaid invoice and it goes at the
  beginning of the table 
</p>
<p>After A is done, there is an updating invoice left</p>
<p>This may be OK or not</p>
';

      return $returnValue;
    }

  }
}