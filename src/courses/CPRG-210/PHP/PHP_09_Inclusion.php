<?php

namespace J\ClassNotes {

  class PHP_09_Inclusion extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Inclusion
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PHP File Inclusion
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
        <h2>Include / Require</h2>
        <p>Take all the text from a specified file and includes it in the current document.</p>
        <p><code>Include()</code> - adds the code to the current document, but <strong>does not</strong> raise an error if the file is not found</p>
        <p><code>require()</code> - adds the code to the current document and <strong>does</strong> produce an error if the file is not found</p>
        
        <p>Can be conditionally included</p>
        <pre><code>
if( expression ) {
  include( "filename" );
} else {
  include( "another_filename" );
}
        </code></pre>
        <p><code>include_once() / require_once()</code> - will only include/require the file once (it performs better)</p>

CONTENT;
    }

  }
}