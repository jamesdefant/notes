<?php

namespace J\ClassNotes {

  class PerryMcKenzie extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
PerryMcKenzie
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Notes
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Perry McKenzie</h2>
<a href="http://www.netfocusconsulting.com" target="_blank">Perry's blog</a>
<p>Things to watch out for (<strong>red flags</strong>):</p>
<ul>
  <li>Does an employer use a repo (Git/Mercurial) or an SVN?</li>
  <li>Do they have a CI (Continuous Integration) / CD (Continuous Development) pipeline?</li>
</ul>

<h3>CI/CD Pipeline</h3>
<ol>
  <li>Commit to repo</li>
  <li>build machine compiles (does it compile?)</li>
  <li>Unit tests</li>
  <li>Deploy multiple versions to multiple Environments</li>
  <li>QA can pick any version to run on any environment to test it</li>
</ol>
CONTENT;

      return $returnValue;
    }

  }
}