<?php

namespace J\ClassNotes {

  class PLSQL_05_RegEx extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
RegEx
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Regular Expressions in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Regular Expressions enable the user to perform concise pattern matching</p> 
<p>The basic syntax is:</p>
<pre><code>
// Single pattern   - Checks whether there is a match of M or a F
regex = \'[MF]\'

// Multiple pattern   - Checks whether there is a match of AB or BC or MB
regex = \'(AB|BC|MB)\'
</code></pre>
';

      return $returnValue;
    }

  }
}