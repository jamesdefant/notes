<?php

namespace J\ClassNotes {

  class SEC_03_Sessions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Sessions
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Session Security
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  When you set a cookie, ensure that it contains the <b>secure</b> attribute. This keeps it from being sent to an
  unencrypted session (http)  
</p>
<p>
  It is possible to navigate to a <b>http</b> site where information is plain text.<br>
  Redirect this traffic to the <b>https</b> encrypted site instead
</p>

';

      return $returnValue;
    }

  }
}