<?php

namespace J\ClassNotes {

  class JS_01_Features extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
More JS Features
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More JS Features
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>jQuery</h2>
<p>Free, open-source JS library</p>
<p>There is a minified version (*/jquery.min.js) that is small but <em>illegible</em></p>
<p>There is a normal version (*/jquery.js) as well</p>
<p>jQuery <em>is</em> javascript</p>
<p>Makes websites more interactive</p>
<p>Write less -> do more</p></p>
<p>Well documented & supported</p>
<p><strong>Compatible with all browsers</strong></p>
<h3>jQuery Syntax</h3>

<p><strong>Tag Name:</strong> $("tagName") -> <code>$("div"), $("p"), $("h1")</code></p>
<p><strong>Tag ID:</strong> $("#id")</p>
<p><strong>Tag Class:</strong> $(".className")</p>
<hr>

<h2>Cookies</h2>
<p>Small data files stored in client/user computers</p>
<p>A way to store info about users and their preferences</p>
<p>Cookie is associated with domain name (ie. website)</p>
<p>When domain is revisited, cookies belonging to this domain will be retrieved by browser and sent to the server</p>
<ul>
  <h3>Issues</h3>
  <li>No guarantee that user will use same computer</li>
  <li>Browser may have cookies turned off</li>
  <li>User may delete cookies</li>
  <li>Essentially no control</li>
</ul>
<p>Cookies are saved in Name-Value pairs sepperated by ;</p>
<p><strong>Expires:</strong> the default is such that the cookie is deleted when the browser is closed. The developer can determine the expiry</p>
<p><strong>Domain:</strong> Domain-Name</p>
<p><strong>Path:</strong> What path the cookie belongs to - Default: current page, "/" for all pages in the website</p>
<p><strong>Secure:</strong> Cookie to only be transmitted Over secure Protocol as https</p>
<code>name=<em>value</em>, expires=<em>date</em>; path=<em>directory</em>; domain=<em>domain-name</em>; secure</code>
<code>document.cookie = "color=blue; expires= Thu, 18 Dec 208 12:00:00 MST"</code>
<h3>Cookie Manipulation</h3>
<p><strong>Creating</strong> - Assign a value to document.cookie</p>
<hr>

<h2>Timers</h2>
<p>Run JS code after specified amount of time</p>
<p>Window object has 2 methods - <code>setTimeout()</code> & <code>seInterval()</code></p>
<p><code>setTimeout()</code> - run JS code once after a specified # of milliseconds</p>
<p><code>setInterval()</code> - Repeatedly run JS code after a specified # of milliseconds</p>
<hr>

<h2>JSON</h2>
<p>Text-Based Data Interchange Format</p>
<p>Used to Send Data (as text) back and forth to a server</p>
<p>Popular notation for defining objects</p>
<p>Written using JavaScript Object Notation</p>
<p>Replace XML and used with AJAX (Asynchronous ...)</p>
<hr>

<h2>Dynamic HTML</h2>
<p>Technoolgies used to create dynamic, interactive and animated websites</p>
<hr>

CONTENT;

      return $returnValue;
    }

  }
}