<?php

namespace J\ClassNotes {

  class JAV_09_Database_II extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Database II
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More Database Access in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>ResultSet</h2>
<p>The <code>ResultSet</code> object can be configured to maintain a live connection to the database</p>
<p>Usually it can only be processed once - from top to bottom</p>
<p>Can be configured</p>

<h2>Prepared Statements</h2>
<p>Use back-quotes - <b>`not_a_keyword`</b></p>

';

      return $returnValue;
    }

  }
}