<?php

namespace J\ClassNotes {

  class GIT_02_Overview extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Overview
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
GIT Overview
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>PUSH</h2>
<ol>
  <li>clone (or create a repo)</li>
  <li>change or add files</li>
  <li>stage the files</li>
  <li>write commit message</li>
  <li>commit (alone => master, teams => yourBranch)</li>
  <li>push</li>
</ol>
<hr>

<h2>PULL</h2>
<ol>
  <li>clone</li>
  <li>pull (update)</li>
</ol>
<hr>
CONTENT;

      return $returnValue;
    }

  }
}