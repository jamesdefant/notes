<?php

namespace J\ClassNotes {

  class JSP_01_Syntax2 extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Control-Flow
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Embed Statements within JSP
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>All of the building blocks and APIs of Java are available to use within a JSP page</p>

<h2>Control Statements</h2>
<p>An <b>if..else</b> statement can weave in and out of JSP and HTML:</p>
<pre><code>
&lt;%! int day = 3; "%>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>
    
    &lt;% if (day == 1 || day == 7) { %>
      &lt;p>Today is a weekend day&lt;/p>
    &lt;% } else { %>
      &lt;p>Today is a weekday&lt;/p>
    &lt;% } %>
    
  &lt;/body>
&lt;/html>
</code></pre>
<p>...or a <b>switch</b> statement...</p>
<pre><code>
&lt;%! int day = 3; "%>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>
    
    &lt;% 
      switch(day) {
      
        case 0:
          out.println("It\'s Sunday");
          break;
        case 1:
          out.println("It\'s Monday");
          break;
        case 2:
          out.println("It\'s Tuesday");
          break;
        case 3:
          out.println("It\'s Wednesday");
          break;
        case 4:
          out.println("It\'s Thursday");
          break;
        case 5:
          out.println("It\'s Friday");
          break;
        case 6:
          out.println("It\'s Saturday");
          break;
    %>
    
  &lt;/body>
&lt;/html>
</code></pre>

<h2>Loop Statements</h2>
<p>You can use three basic type sof loop blocks in Java: <b>for</b>, <b>while</b>, and <b>do..while</b></p>
<pre><code>
&lt;%! int fontSize; "%>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>
    
    &lt;% for(fontSize = 1; fontSize <= 3; fontSize++) { %>
    
        &lt;font color="green" size="&lt;%= fontSize %>">JSP Tutorial&lt;/font>&lt;br />  
            
    &lt;% } %>
    
  &lt;/body>
&lt;/html>
</code></pre>
';

      return $returnValue;
    }

  }
}