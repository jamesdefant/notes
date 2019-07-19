<?php

namespace J\ClassNotes {

  class VS_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
VisualStudio
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Visual Studio
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Visual Studio is an IDE developed by Microsoft</p>

<h2>Change the Templates</h2>
<p>Navigate to:</p> 
<p><kbd>Program Files(x86)\Microsoft Visual Studio\2017\Enterprise\Common7\IDE\ItemTemplates\CSharp</kbd></p>
<p>From there you can choose to modify any C# generated file including:</p>
<ul>
  <li>classes</li>
  <li>interfaces</li>
  <li>ASP.NET WebForms</li>
  <li>...</li>
</ul>
';

      return $returnValue;
    }

  }
}