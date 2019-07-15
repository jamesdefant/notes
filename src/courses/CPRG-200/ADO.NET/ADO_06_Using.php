<?php

namespace J\ClassNotes {

  class ADO_06_Using extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Using
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Using Construct
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Using is a keyword that scopes an object to </p>
<h2>Syntax</h2>
<pre><code>
using(SqlConnection connection = GetConnection())
{
  // the connection object is created here and is only available here
  
  // It gets recycled at the closing brace
}
</code></pre>
<h2>Nesting</h2>
<p>You can nest one using block inside of another as necessary</p>
<pre><code>
using(SqlConnection connection = GetConnection())
{
  using(SqlCommand cmd = new SqlCommand(query, connection))
  {
    
  }   // cmd is recycled 
}   // connection is recycled
</code></pre>
';

      return $returnValue;
    }

  }
}