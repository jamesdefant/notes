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
<hr>

<h2>Code Structure</h2>
<p>When you start a new JavaFX project (<em>in <b>Intelli J</b></em>) , it scaffolds a basic project for you.</p>
<p>There are <b>3</b> main components:</p>
<ul>
  <li>a <code>Main : Application</code> class</li>
  <li>a <code>Controller</code> class - <b>Logic</b></li>
  <li>an <code>sample.fxml</code> file - <B>View</B></li>  
</ul>
<hr>

<h2>Main class</h2>
<p>
  The <code>Main</code> class holds the <code>main()</code> method that is the starting point for the application. The 
  <code>main()</code> method simply calls <code>launch(args) : Application</code> that starts the JavaFX life-cycle and 
  gets the necessary resources from the <code>.fxml</code> file. It defines the <b>Stage</b> object, which is the 
  top-level container of a JavaFX application. It also defines the <b>Scene</b> object which contains all the physical 
  components of a JavaFX app. The <b>Scene Graph</b> is the tree-like structure that represents the contents of a scene
</p>
<div class="box">
  <h5>Stage</h5>
  <div class="box">
    <h5>Scene</h5>    
    <div class="box">
      <h5>Scene Graph</h5>
      <div class="box node"><b>Root Node</b><br>Container (TabPane)</div>
      <div class="box node"><b>Branch Node</b><br>Sub-Container (Tab)</div>
      <div class="box node"><b>Leaf Node</b><br>Control (TextField)</div>
    </div>
  </div>
</div>
<hr>

<h2>.fxml file</h2>
<p>
  The <code>.fxml</code> file holds the structure and attributes of the components that are displayed 
  (container, controls, etc) and holds a reference to the Controller class which contains the logic for the app
</p>
<hr>

<h2>Controller class</h2>
<p>
  The <code>Controller</code> class starts empty - it will contain (for a simple app) all the logic that drives your app
</p>
';

      return $returnValue;
    }

  }
}