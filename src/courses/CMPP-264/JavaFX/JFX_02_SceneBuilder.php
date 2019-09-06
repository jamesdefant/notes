<?php

namespace J\ClassNotes {

  class JFX_02_SceneBuilder extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SceneBuilder
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SceneBuilder
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>SceneBuilder is a GUI designing program that is graphical - it writes the XML for you</p>
<p>
  You can download it from <a href="https://gluonhq.com/products/scene-builder/" target="_blank">
    Gluon\'s website
  </a> 
</p>
<p>
  Install it, then navigate to where it was installed so that you may get the full path. It should be located:<br>
  <ul>
    <li>Windows 10:<br>
    <kbd>c:\Users\[username]\AppData\Local\SceneBuilder\SceneBuilder.exe</kbd></li>
  </ul>
</p>
<p>
  To set it up in Intelli J:
  <ol>
    <li>
      Navigate to the menubar <kbd>File</kbd> => <kbd>Settings</kbd><br>
      <em>This will open the <b>Settings</b> dialog</em>
    </li>
    <li>
      In the left-most panel, navigate to <kbd>Languiages & Frameworks</kbd> => <kbd>JavaFX</kbd>
      <em>This will display the <b>Path to Scenebuilder</b></em>
    </li>
    <li>Browse to the location where the SceneBuilder app is located and click <b>OK</b></li>
  </ol>
 
</p>
';

      return $returnValue;
    }

  }
}