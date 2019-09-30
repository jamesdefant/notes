<?php

namespace J\ClassNotes {

  class JSP_01_Intro extends Page
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
Intro to JSP
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>JSP or Servlets are a Java based server-side service that is similar to ASP & PHP</p>
<p>Servlets run on a server and <b>receive requests from and produce responses to client</b></p>
<p>Use a Java API to standardize the interface with the client and to provide more portability (offload to the server)</p>
<hr>

<h2>Advantages</h2>

<h4>Efficient</h4>
<ul>
  <li>The JVM stays running and handles requests in seperate threads</li>
  <li>Code is only loaded once</li>
  <li>Code remains in memory - data persists between transactions</li>
</ul>

<h4>Convenient</h4>
<ul>
  <li>Infrastructure for working with form data, headers, cookies, sessiosn, etc</li>
  <li>Java programmers don\'t have to learn a new language</li>
</ul>

<h4>Powerful</h4>
<ul>
  <li>Can talk directly to web server</li>
  <li>Multiple servlets can share data</li>
  <li>Session tracking an caching</li>
</ul>

<h4>Portable</h4>
<ul>
  <li>Can run on virtually any application server</li>
</ul>

<h4>Secure</h4>
<ul>
  <li>Uses Java security</li>
</ul>

<h4>Inexpensive</h4>
<ul>
  <li>Most components are free</li>
</ul>
<hr>

<h2>Documentation</h2>
<p>
  <a href="https://docs.oracle.com/javaee/7/api/toc.htm" target="_blank">
    https://docs.oracle.com/javaee/7/api/toc.htm
  </a> 
</p>
<p>
  <a href="https://docs.oracle.com/javaee/7/tutorial/" target="_blank">
    https://docs.oracle.com/javaee/7/tutorial/
  </a> 
</p>
<p>
  <a href="https://www.tutorialspoint.com/servlets/index.htm" target="_blank">
    https://www.tutorialspoint.com/servlets/index.htm
  </a>
</p>
<p>
  <a href="https://www.ntu.edu.sg/home/ehchua/programming/java/JavaServlets.html" target="_blank">
    https://www.ntu.edu.sg/home/ehchua/programming/java/JavaServlets.html
  </a>
</p>


';


      return $returnValue;
    }

  }
}