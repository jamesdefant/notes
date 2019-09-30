<?php

namespace J\ClassNotes {

  class JSP_03_Servlet extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Servlet
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java Servlet
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Start a new Project</h2>
<p>Open Eclipse and start a new project:</p>
<ol>
  <li>
    Right-click somewhere within the <kbd>Project</kbd> window and choose <kbd>New</kbd> => <kbd>Project...</kbd><br>
    <em>This will open the <b>New Project</b> dialog</em>
  </li>
  <li>Select <kbd>Web</kbd> => <kbd>Dynamic Web Project</kbd> and click <kbd>Next ></kbd></li>
  <li>Name the Project</li>
  <li>
    Select the target runtime (<b>WildFly 11.0</b>) and click <kbd>Next ></kbd><br>
    <em>or click <kbd>New Runtime...</kbd> if there are none</em>
  </li>
  <li>Select the <b>Source folder</b> to build the Java Application and click <kbd>Next ></kbd></li>
  <li><b>Web Module dialog</b> - select <kbd>Generate web.xml deployment d3escriptor</kbd></li>
</ol>
<hr>

<h2>Create a Servlet</h2>
<ol>
  <li>
    Right-click the <b>src</b> directory and choose <kbd>New</kbd> => <kbd>Servlet</kbd><br>
    <em>This will open the <b>Create Servlet</b> dialog</em>    
  </li>
  <li>
    Define a <b>Java Package</b> and a <b>Class Name</b> and click <kbd>Next ></kbd>    
  </li>
  <li>Define a description, initialization parameters, and URL mappings and click <kbd>Next ></kbd></li>
  <li>Define what stubs Eclipse should generate for you (doGet(), doPost(), doDelete(), etc)</li>
  <li>Eclipse will stub out a directory structure and a class:</li>
</ol>
<pre><code>
package main;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Converter
 */
@WebServlet("/Converter")
public class Converter extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Converter() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) 
	      throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) 
	      throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}
}
</code></pre>
<hr>

<h2>An Example</h2>
<p>We\'ll alter this class to provide a <b>L/100km</b> => <b>MPG</b> conversion</p>
<p>In the <code>doGet()</code> method, delete the generated code and replace it with:</p>
<pre><code>
protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
  // TODO Auto-generated method stub
  
  // "litres" is the name of our form input
  double litres = Double.parseDouble(request.getParameter("litres"));
  double mpg = (100 / litres) * 2.352;
  
  PrintWriter out = response.getWriter();
  
  String s = "&lt;!DOCTYPE html&gt;&lt;head&gt;&lt;title&gt;Fuel Converter&lt;/title&gt;&lt;/head&gt;"
      + "&lt;body&gt;"
      + "&lt;h1&gt;Miles Per Gallon: \" + mpg + \"&lt;/h1&gt;"
      + "&lt;a href=\'convert.html\'&gt;Start over&lt;/a&gt;"
      + "&lt;/body&gt;&lt;/html&gt;";
  out.print(s);
  out.close();		
}
</code></pre>


<p>Then generate an HTML page by:</p>
<ol>
  <li>Right-click the <kbd>WebContent</kbd> directory and choose <kbd>New</kbd> => <kbd>HTML File</kbd></li>
  <li>Name the new html file and click <kbd>Next ></kbd></li>
  <li>Choose the type of HTML you\'d like to use - <b>Use HTML 5</b> and click <kbd>Finish</kbd></li>
  <li>Eclipse will generate a stubbed out HTML file</li>
  <li>Add between the <b>body</b> tags:</li>
</ol>

<pre><code>
	&lt;h1&gt;Litres to Gallons (US) Conversion&lt;/h1&gt;
	&lt;form method="get" action="Converter"&gt;
		&lt;input type="number" name="litres" /&gt;
		&lt;input type="submit" name="Convert" /&gt;
	&lt;/form&gt;
</code></pre>

<p>To test it, click the <kbd>Run</kbd> button and choose the server you want to run it on</p>
<p><b>~or~</b></p>
<p>
  Point your browser to: - supposing your server is configured to run on port 8080<br>
  <code>http://localhost:8080/[app_name]/[html_file]</code><br>
  <b>or</b><br>
  <code>http://localhost:8080/DynamicWebProject/Convert.html</code><br> 
  <em>The path is <b>case-sensitive</b></em>
</p>

<h2>Validation</h2>
<p>We must check for values that will cause errors</p>
<p><b>Client side</b> - use javascript</p>
<p>
  <b>Server side</b> - throw exceptions, use regex, check the database, check for null values
</p>
<p>Wrap the code in a <b>try/catch</b> block:</p>
<pre><code>

</code></pre>
';

      return $returnValue;
    }
  }
}