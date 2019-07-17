<?php

namespace J\ClassNotes {

  class ASP_02_NuGet extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
NuGet
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'

MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p><b>NuGet</b> is a manager to import components into your project</p>
<ol>
  <li><b>Right-click</b> your project and choose <kbd>Manage NuGet Packages...</kbd></li>
  <li>Click the <b>Browse</b> panel and select the package you want to import into the project</li>
</ol>
';

      return $returnValue;
    }

  }
}