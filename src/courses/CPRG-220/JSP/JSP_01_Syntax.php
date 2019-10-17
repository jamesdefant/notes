<?php

namespace J\ClassNotes {

  class JSP_01_Syntax extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Syntax
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Syntax of JSP
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<p>
  <a href="https://www.tutorialspoint.com/jsp/jsp_syntax.htm" target="_blank">
    https://www.tutorialspoint.com/jsp/jsp_syntax.htm
  </a> 
</p>
<h2>The Scriptlet</h2>
<p>A scriptlet can contain any number of Java language statements, variable or method declarations, or valid expressions</p>
<p>
  They are enclosed in a special JSP bracket like this:<br>
  <kbd>&lt;% code goes here %></kbd>
</p>
<pre><code>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>

    &lt;%  
      out.println("Your IP address is " + request.getRemoteAddr());
    %>

  &lt;/body>
&lt;/html>
</code></pre>

<h2>JSP Declaration</h2>
<p>
  A declaration declares one or more variables or methods that may be used later in Java code in the JSP file. You must
  declare the variable or method before you use them 
</p>
<p>
  They are enclosed in a special JSP bracket like this:<br>
  <kbd>&lt;%! variable declared here %></kbd>
</p>
<pre><code>
&lt;%! String firstName = "Joe"; %>
&lt;%! String lastName = "Bob"; %>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>

    &lt;%  
      out.println("Your name is " + firstName + lastName);
    %>

  &lt;/body>
&lt;/html>
</code></pre>

<h2>JSP Expressions</h2>
<p>
  An expression contains a scripting language expressions that is evaluated, converted to a String, and inserted where 
  it appears in the JSP file
</p>
<p>The expression can contain any expressions that is valid but <b>you cannot use a semicolon to end an expression</b></p>
<p>
  They are enclosed in a special JSP bracket like this:<br>
  <kbd>&lt;%= expression %></kbd>
</p>
<pre><code>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>

    &lt;h1>
      Today\'s date: &lt;%= (new java.util.Date()).toLocaleString() %>
    &lt;/h1>

  &lt;/body>
&lt;/html>
</code></pre>

<h2>JSP Comments</h2>
<p>
  JSP comments mark text or statements that the JSP container should ignore
</p>
<p>
  They are enclosed in a special JSP bracket like this:<br>
  <kbd>&lt;%-- comment --%></kbd>
</p>
<pre><code>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>

    &lt;h1>This will be visible&lt;/h1>
    &lt;%-- This will not be visible in the page source --%>

  &lt;/body>
&lt;/html>
</code></pre>
<p>
  Define a <b>static literal</b> like so:<br>
  <kbd>&lt;\%-- static literal --%\></kbd>
</p>

<h2>JSP Directives</h2>
<p>
  A JSP directive affects the overall structure of the servlet class
</p>
<p>
  They are enclosed in a special JSP bracket like this:<br>
  <kbd>&lt;%@ directive attribute="value" %></kbd>
</p>
<p>There are three types of directive tag:</p>
<ul>
  <li>
    <code>&lt;%@ page ... %></code><br>
    defines page-dependent attributes, such as scripting language, error page, and buffering requirements 
  </li>
  <li>
    <code>&lt;%@ include ... %></code><br>
    Includes a file during the translation phase
  </li>
  <li>
    <code>&lt;%@ taglib ... %></code><br>
    Declares a tag library, containing custom actions, used in the page
  </li>
</ul>
<pre><code>
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;html>
  &lt;head>&lt;title>Sample Page&lt;/title>&lt;/head>
  
  &lt;body>
  &lt;/body>
&lt;/html>
</code></pre>

<h2>JSP Actions</h2>
<p>
  JSP actions use constructs in XML syntax to control the behavior of the servlet engine. You can dynamically insert a
  file, reuse JavaBeans components, forward the user to another page, or generate HTML for the Java plugin
</p>
<p>
  Actions are basically predefined functions in the form:<br>
  <kbd>&lt;jsp:action_name attribute="value" /></kbd>
</p>
<ul>
  <li>
    <code>&lt;jsp:include ... /></code><br>
    Includes a file at the time the page is requested
  </li>
  <li>
    <code>&lt;jsp:useBean ... /></code><br>
    Finds or instantiates a JavaBean
  </li>
  <li>
    <code>&lt;jsp:setProperty ... /></code><br>
    Sets the property of a JavaBean
  </li>
  <li>
    <code>&lt;jsp:getProperty ... /></code><br>
    Inserts the property of a JavaBean into the output
  </li>
  <li>
    <code>&lt;jsp:forward ... /></code><br>
    Forwards the requester to a new page
  </li>
  <li>
    <code>&lt;jsp:plugin ... /></code><br>
    Generates browser-specific code that makes an OBJECT or EMBED tag for the Java plugin
  </li>
  <li>
    <code>&lt;jsp:element ... /></code><br>
    Defines XML elements dynamically
  </li>
  <li>
    <code>&lt;jsp:attribute ... /></code><br>
    Defines dynamically-defined XML elements attribute
  </li>
  <li>
    <code>&lt;jsp:body ... /></code><br>
    Defines dynamically-defined element\'s body
  </li>
  <li>
    <code>&lt;jsp:text ... /></code><br>
    Used to write template text in JSP pages and documents
  </li>
</ul>

<h2>JSP Implicit Objects</h2>
<p>JSP defines 9 variables which are called <b>implicit objects</b>:</p>
<ul>
  <li>
    <code>request</code><br>
    This is the <b>HttpServletRequest</b> object associated with the request
  </li>
  <li>
    <code>response</code><br>
    This is the <b>HttpServletResponse</b> object associated with the response to the client
  </li>
  <li>
    <code>out</code><br>
    This is the <b>PrintWriter</b> object used to send output to the client
  </li>
  <li>
    <code>session</code><br>
    This is the <b>HttpSession</b> object associated with the request
  </li>
  <li>
    <code>application</code><br>
    This is the <b>ServletContext</b> object associated with the application context
  </li>
  <li>
    <code>config</code><br>
    This is the <b>ServletConfig</b> object associated with the page
  </li>
  <li>
    <code>pageContext</code><br>
    This encapsulates use of server-specific features like higher performance <b>JspWriters</b>
  </li>
  <li>
    <code>page</code><br>
    This is simply a synonym for <b>this</b>, and is used to call the methods defined by the translated servlet class
  </li>
  <li>
    <code>Exception</code><br>
    The <b>Exception</b> object allows the exception data to beaccessed by designated JSP
  </li>    
</ul>


';

      return $returnValue;
    }

  }
}