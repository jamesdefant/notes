<?php

namespace J\ClassNotes {

  class Dasa extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Dasa
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Dasa
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Dasa</h2>
<p>Email: <a href="mailto:dasa@leveragepoint.ca">dasa@leveragepoint.ca</a> </p>
<hr>

<h2>Places to look for jobs</h2>
<ul>
  <li>Indeed</li>
  <li>LinkedIn</li>
  <li>Monster</li>
  <li>StackOverflow</li>
  <li>Canada Job Bank</li>
  <li>SAIT Website</li>
  <li>Recommendations</li>
  <li>Co-workers</li>
  <li>Word-of-mouth</li>
  <li>Meetup</li>
  <li>Recruiting firms</li>
  <li>Job Fair</li>
  <li>Newspaper</li>
  <li>ZipRecruiter</li>
  <li>Company Webiste</li>
  <li>Cold-call</li>
</ul>
CONTENT;

      return $returnValue;
    }

  }
}