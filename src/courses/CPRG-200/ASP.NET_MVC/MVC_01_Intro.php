<?php

namespace J\ClassNotes {

  class MVC_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ASP.NET MVC
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
ASP.NET Model-View-Controller
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>The <b>Model</b> - files that contain data access code, business logic and validation</p>
<p>The <b>View</b> - files that create the HTML for the user interface and return a ressponse to the user</p>
<p>
  The <b>Controller</b> - files that receive the request from the user, get appropriate data from the model,
  and provide that data to the view
</p>
<p>Optional element: <b>View-Model</b> - transfers data from the controller to the view</p>
<img src="img/CPRG_214/ASPNET_MVC.png" class="img-fluid">
<hr/>

<h2>Benefits of MVC</h2>
<p>Each default component can be used as is, extended, or replaced</p>
<p>Extensive UI libraries: <b>jQuery UI, Bootstrap CSS, ...</b></p>
<p>Control over HTML and HTTP</p>
<p>Testability (works well with Unit Testing)</p>
<p>Working with .NET Platform libraries and modern API (asynchronous computing, LINQ< etc.)</p>
<p>ASP.NET MVC is <b>Open Source</b> (can access and/or modify source code of system components)</p>
<hr/>




';

      return $returnValue;
    }

  }
}