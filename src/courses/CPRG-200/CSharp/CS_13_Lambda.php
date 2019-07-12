<?php

namespace J\ClassNotes {

  class CS_13_Lambda extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Lambda
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Lambda Expresssions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Lambda expresssions are a short way of writing a function</p>

<pre><code>
// x "goes to" expression
x => expression
</code></pre>

';

      return $returnValue;
    }

  }
}