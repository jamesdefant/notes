<?php

namespace J\ClassNotes {

  class JFX_03_Container extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Containers
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Containers in JavaFX
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are a number of different containers available in JavaFX:</p>
<ul>
  <li>Accordion</li>
  <li>AnchorPane</li>
  <li>BorderPane</li>
  <li>ButtonBar</li>
  <li>DialogPane</li>
  <li>FlowPane</li>
  <li>GridPane</li>
  <li>HBox</li>
  <li>Pane</li>
  <li>ScrollPane</li>
  <li>SplitPane</li>
  <li>StackPane</li>
  <li>Tab</li>
  <li>TabPane</li>
  <li>TextFlow</li>
  <li>TilePane</li>
  <li>TiltedPane</li>
  <li>ToolBar</li>
  <li>VBox</li>
</ul>

';

      return $returnValue;
    }

  }
}