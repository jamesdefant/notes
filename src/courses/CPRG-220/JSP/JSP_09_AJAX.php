<?php

namespace J\ClassNotes {

  class JSP_09_AJAX extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
AJAX
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
AJAX Interaction
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Asynchronous JavaScript And XML</h2>
<p>Use AJAX to communicate with our API to update a webpage without reloading it</p>

<h2>Documentation</h2>
<ul>
  <li>
    <a href="https://www.w3schools.com/js/js_ajax_intro.asp" target="_blank">
      www.w3schools.com/js/js_ajax_intro.asp
    </a> 
  </li>
    <li>
    <a href="https://www.w3schools.com/js/js_json_intro.asp" target="_blank">
      www.w3schools.com/js/js_json_intro.asp
    </a> 
  </li>
</ul>

<h2>Our Example</h2>
<p>
  Building on the previous page\'s example where we created a REST API to serve database data as
  JSON data, we\'ll create a frontend webpage to display that data with AJAX 
</p>
<ol>
  <li>Create a new <b>Dynamic Web Project</b></li>
  <li>
    Create a new <code>.html</code> file by right-clicking the <code>WebContent</code> directory and select<br>
    <kbd>New</kbd> => <kbd>HTML File</kbd><br>       
  </li>
</ol>

';

      return $returnValue;
    }

  }
}