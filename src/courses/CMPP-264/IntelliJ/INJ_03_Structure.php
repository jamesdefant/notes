<?php

namespace J\ClassNotes {

  class INJ_03_Structure extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Structure
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Project Structure in Intelli J
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Open the <b>Project Structure</b> window by:</p>
<ul>
  <li>
    Navigating to the menubar <kbd>File</kbd> => <kbd>Project Structure...</kbd> or use the shortcut<br>
    <kbd>ctrl + alt + shift + S</kbd> 
  </li>
</ul>
<p>From here there are many options to:</p>
<ul>
  <li>Define the <b>Project Name</b></li>
  <li>Define the <b>SDK</b> that our project is using</li>
  <li>Define the <b>language level</b></li>
  <li>Define where our project is compiled</li>
  <li>
    Define the default location for your:
    <ul>
      <li><b>Sources</b></li>
      <li><b>Tests</b></li>
      <li><b>Resources</b></li>
      <li><b>Test Resources</b></li>
      <li><b>Excluded</b></li>
    </ul>
  </li>
  <li>Add <b>Directories</b></li>
  <li>Add <b>Libraries</b></li>
</ul>
';

      return $returnValue;
    }

  }
}