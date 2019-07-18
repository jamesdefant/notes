<?php

namespace J\ClassNotes {

  class ASP_03_MultiPageSite2 extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
MasterPages
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Master Page Templating
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A <b>Master page</b> provides common elements that are repeated accross the entire site</p>
<p>Contains <em>content placeholders</em> which indicate where each content item should be displayed</p>
<p>The pages that provide content are called <b>content pages</b></p>
<p>When you use a <b>master page</b>, the individual pages in your application become <b>content pages</b></p>
<hr/>

<h2>Master Page</h2>
<p>To add a Master Page, <b>right-click</b> on the project in Solution Explorer, and choose <kbd>Add</kbd> -> <kbd>Master Page</kbd></p>
<p>There can be multiple master pages in an application</p>
<p>A master page is generated with two content placeholders</p>
<p>Every element that is outside the placeholders will <b>appear on every page of the site</b></p>
<p>Elements that are inside the placeholder can be either displayed or overriden in content pages</p>

';

      return $returnValue;
    }

  }
}