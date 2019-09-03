<?php

namespace J\ClassNotes {

  class INJ_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Intro to IntelliJ IDEA
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p><a href="https://www.jetbrains.com/idea/" target="_blank">Intelli J IDEA</a> is an IDE developed by JetBrains</p>

<h2>Generate Documentation</h2>
<p>You can have Intelli J generate documentation for your Java project</p>
<ol>
  <li>Navigate to <kbd>Tools</kbd> => <kbd>Generate JavaDoc...</kbd></li>
  <li>Select whether you want to generate for the <b>whole project</b>, a <b>file</b>, or a <b>custom scope</b></li>
  <li>Define whether to include any JDKs and libraries</li>
  <li>Choose an <b>Output directory</b></li>
  <li>Click <b>OK</b></li>
  <li>Navigate to the file and open it</li>
</ol>
';

      return $returnValue;
    }

  }
}