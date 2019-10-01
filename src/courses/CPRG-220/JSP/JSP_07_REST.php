<?php

namespace J\ClassNotes {

  class JSP_07_REST extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
REST
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
REST Services
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  You can download plugins for <b>Eclipse</b> by navigating to <kbd>Help</kbd> => <kbd>Eclipse MarketPlace...</kbd><br>
  <ul><li>search for <b>RESTful Plugin for Eclipse</b> and install it</li></ul>
  <em>You\'ll need to restart Eclipse</em>
</p>
<ol>
  <li>Start a new Dynamic Web Project</li>
  <li>
    Right-click the project and select <kbd>New</kbd> => <kbd>Other...</kbd><br>
    <em>This will open the <b>New Wizard</b> dialog</em>
  </li>
  <li>Select <kbd>RESTful Webservice</kbd> => <kbd>Jersey RESTful Webservice</kbd></li>
  <li>
    The generated class will have errors - you need to download a <code>.jar</code> file 
    with the <code>log4.Logger</code> package<br>
    <a href="https://logging.apache.org/log4j/2.x/download.html" target="_blank">https://logging.apache.org/log4j/2.x/download.html</a>
  </li>
  <li></li>
</ol>

<h2>PostMan</h2>
<p>Install <b>PostMan</b> @ <a href="https://www.getpostman.com/" target="_blank">https://www.getpostman.com/</a> </p>
<p>When you open the program you can test whether CRUD operations work properly</p>
<p>In the <b>Request Field</b>, type in the URI like so:</p>
<pre><code>
http://[host]/[project]/[servlet-mapping - url-pattern]/[class_path_annotation]/[method_path_annotation]
</code></pre>

';

      return $returnValue;
    }

  }
}