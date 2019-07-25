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

<h2>Create an MVC App</h2>
<p>Start with the <b>Model</b> or the <b>Controller</b></p>
<ol>
  <li>Create an ASP.NET application and select the MVC checkbox</li>
  <li>Right-click the <b>Controllers</b> folder and create a new controller</li>
  <ul>
    <li>This creates a new controller with a route set up in the <code>App_Start</code> -> <code>RouteConfig.cs</code></li>
  </ul>
  <li><b>Right-click</b> anywhere inside the route method and choose <b>Add View</b> to create a View</li>
  <ul>
    <li>Keep all and <b>only</b> presentation logic in the View</li>
  </ul>
  <li>A default View is created in the <b>Views</b> folder with a <code>.cshtml</code> extension</li>
</ol>

<h2>ViewBag</h2>
<p>A <code>ViewBag</code> is a container that is dynamically typed so that you may add any property to it - <b>Keep it small</b></p>
<pre><code>
// Adding data to the ViewBag in the controller
ViewBar.Title = "My New Page";

// Accessing date from the ViewBag in a view
&lt;Title&gt;@ViewBag.Title&lt;/Title&gt;
</code></pre>

<h3>Conditional Statements</h3>
<pre><code>
@if(ViewBag.ProductCount == 0) {
  @:Out of stock
} else if(ViewBag.ProductCount <= 5) {
  @:Low stock
} else {
  @ViewBag.ProductCount
}
</code></pre>
<pre><code>
@switch((int)ViewBag.ProductCount)
{
  case 0:
    @:Out of stock
    break;
    
  case 1:
    @:Low stock (@ViewBag.ProductCount)
    break;

  default:
    @ViewBag.ProductCount
    break;

} 
</code></pre>




';

      return $returnValue;
    }

  }
}