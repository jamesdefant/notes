<?php

namespace J\ClassNotes {

  class JFX_01_Intro extends Page
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
Intro to JavaFX
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>JavaFX is a GUI framework that utilizes XML to seperate the design from the logic</p>
<p>
  There is a palette tool that helps to develop GUIs in JavaFX named 
  <a href="https://gluonhq.com/products/scene-builder/" target="_blank">Scene Builder</a> 
</p>
<p>
  There are a number of methods implemented in the Application class that are called throughout the lifecycle 
  of the app:
</p>
<ul>
  <li><code>public static void launch(Class &lt;? extends Application&gt; appcClass, String[] args)</code></li>
  <li><code>public static void launch(String[] args)</code></li>
  <li><code>public void init() throws Exception</code></li>
  <li><code>public abstract void start(Stage primaryStage) throws Exception</code></li>
  <li><code>public void stop() throws Exception</code></li>
  <li><code>public final HostServices getHostServices()</code></li>
  <li><code>public final Application.Parameters getParameters()</code></li>
  <li><code>public final void notifyPreloader(Preloader.PreloaderNotification info)</code></li>
  <li><code>public static String getUserAgentStylesheet()</code></li>
  <li><code>public static void setUserAgentStylesheet()</code></li>  
</ul>


<p>The <code>Stage</code> class is the top level container object</p>
<p>The <code>Scene</code> class sits atop the <code>Stage</code> class as a content container</p>
<p><code>Scene</code> is a hierarchical list of nodes</p>
<p>If <code>.jar</code> file is created with JavaFX Packager, the main method id not needed, otherwise it is</p>
<p>You can create a gui in JavaFX by writing Java code or by writing XML code (or have SceneBuilder write it for you)</p>

';

      return $returnValue;
    }

  }
}