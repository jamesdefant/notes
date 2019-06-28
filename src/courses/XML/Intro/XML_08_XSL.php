<?php

namespace J\ClassNotes {

  class XML_08_XSL extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
XSL
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Extensible Stylesheet Language - XSL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Definition</h2>
<p>An XML language that is used in XSL Stylesheets and tells Transformers how to output and format the data found in a xml file</p>
<p>Transformers use data found in a XML document and the formatting logic found in an XSL stylesheet to output formatted data</p>
<hr>

<h2>Components</h2>
<p>There are <strong>2</strong> kinds of components in an XSL Stylesheet: <strong>Instructions</strong> and <strong>Literals</strong></p>
<p><strong>Instructions</strong> describe how the cource codument will be transformed</p>
<p><strong>Literals</strong> - usually html code and text - are output just as they appear in the style sheet</p>

<h2>XPATH</h2>
<p>Very similar to file path location</p>
<p>Slashes '/' denote next child element in the XML source document. For example, the foloowing XML source file:</p>
<pre><code>
&lt;sait&gt;
  &lt;courses&gt;
    &lt;course&gt;
      ...
</code></pre>
<p>To get to the course element in the XSL stylesheet using XPATH, you would use:</p>
<code>'sait/courses/course'</code>
<p>To traverse back up the element tree from course, use <code>'../course'</code> to get tothe parent element</p>
<hr>

<h2>Syntax</h2>
<p>Always start with <code>&lt;xsl:template match="/"&gt;</code></p>
<pre><code>
&lt;xsl:stylesheet&gt;  
  &lt;xsl:template match="/"&gt;
  
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Untitled&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
      <span class="comment">// Display data in the body tag</span>
      &lt;xsl:value-of select=""/&gt;
    
    &lt;/body&gt;
  &lt;/html&gt;  
  
  &lt;/xsl:template&gt;
&lt;/xsl:stylesheet&gt;

</code></pre>

<h2>Outputing data</h2>
<p>To output the text (or body) of an element use:</p>
<p><code>&lt;xsl:value-of select="element-parent/element-name"/&gt;</code></p>
<p>To output the text of an element's attribute use:</p>
<p><code>&lt;xsl:value-of select="element-parent/element-name/@attribute-name"/&gt;</code></p>
<hr>

<h2>Processing Logic</h2>
<p>XSL has many typical processing features that programming languages share</p>
<pre><code>
&lt;xsl:for-each&gt;&lt;/xsl:for-each&gt;         <span class="comment">// foreach loop</span>

&lt;xsl:if test="blah == '0'"&gt;&lt;/xsl:if&gt;  <span class="comment">// if statement</span>

&lt;xsl:sort select="blah"               <span class="comment">// sort statement (ascending order implied)</span>
    datatype="number"
    order="descending"&gt;
&lt;/xsl:sort&gt;    

&lt;xsl:choose&gt;                          <span class="comment">// choose statement</span>
  &lt;xsl:when test="blah == '0'"&gt;&lt;/xsl:when&gt;
  
  <span class="comment">// and optionally</span>
  &lt;xsl:otherwise&gt;&lt;/xsl:otherwise&gt;

&lt;/xsl:choose&gt;    
</code></pre>
<hr>

<h2>Other Features</h2>
<p>Templates:</p>
<pre><code>
&lt;xsl:stylesheet&gt;
  
  <span class="comment">// Use a template</span>
  &lt;xsl:call-template name="myTemplate"/&gt;

  <span class="comment">// Define a template</span>
  &lt;xsl:template name="myTemplate"&gt;
    &lt;xsl:value-of select="@name"/&gt;
    &lt;xsl:value-of select="language/&gt;
    &lt;xsl:value-of select="province"/&gt;
  &lt;/xsl:template&gt;
  
&lt;/xsl:stylesheet&gt;
</code></pre>

<p>Assign values to html attributes using:</p>
<p><code>&lt;xsl:attribute name="attr-name"&gt;value&lt;/xsl:attribute&gt;</code> nested inside an HTML element:</p>
<pre><code>
&lt;a&gt;Google.com
  &lt;xsl:attribute name="href"&gt;https://www.google.com&lt;/xsl:attribute&gt;
&lt;/a&gt;
</code></pre>

CONTENT;

      return $returnValue;
    }

  }
}