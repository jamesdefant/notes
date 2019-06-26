<?php

namespace J\ClassNotes {

  class XML_01_Intro extends Page
  {
    /* Perry McKenzie
     * perrymckenzie@netfocusconsulting.com
     * linkedin.com
     *
     * */

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
Intro to XML
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Data markup languages</h2>
<ul>
  <li>XML - Extensible Markup Language</li>
  <li>DTD's - Document Type Definition & XML elemtents</li>
  <li>XSD's</li>
  <li>XSL</li>
  <li>JSON</li>
  <li>AJAX</li>
</ul>
<hr>

<h2>XML</h2>
<p>Gives a logical structure that is legible both by humans and computers</p>
<p>HTML docs always start with 	&lt;html&gt; tag while XML always starts with &lt;?xml version="1.0"?&gt;</p>
<p>HTML does not require tags to be closed while XML <strong>does require tags to be closed</strong></p>
<p>HTML tags are not case sensitive while <strong>XML tags are case sensitive</strong></p>
<p>HTML does not require quotes around attributes while <strong>XML requires some kind of quote around attributes</strong></p>
<p>HTML suppports pre-defined tags while <strong>XML allows the developer to define their own tags</strong></p>
<hr>

<h2>XML is used for...</h2>
<p>Configuration</p>
<ul>
  <li>Server</li>
  <li>Web services</li>
  <li>Database mappings (Hibernate, OJB, iBatis...)</li>
  <li>Framework configs (Struts, Spring, Ant, Nant, Nunit, Junit,...)</li> 
</ul>
<p>Communication</p>
<ul>
  <li>Web services</li>
  <li>Ajax</li>
  <li>VXML</li>
</ul>
<hr>

<h2>Well formed XML</h2>
<p>Building blocks - elements, attributes, and values</p>
<p><strong>Rules:</strong></p>
<ul>
  <li>Declare an XML version - first line - <code>&lt;?xml version="1.0"?&gt;</code></li>
  <li>A root element is rewuired</li>
  <li>Closing tags are required</li>
  <li>Elements must be properly nested</li>
  <li>Quotes are required</li>
  <li>Entity references must be declared</li>
</ul>
<p><strong>For Example:</strong></p>
<pre><code>
&lt;? xml version="1.0" ?&gt;
&lt;musicAlbums&gt;
  &lt;album numSold="triple-platinum"&gt;
      &lt;name&gt;Paul's Boutique&lt;/name&gt;
      &lt;artist&gt;Beastie Boys&lt;/artist&gt;
      &lt;year&gt;1987&lt;/year&gt;
      &lt;!-- members is an optional element inside albums --&gt;
      &lt;members&gt;Mike D, MCA, Ad-Rock&lt;/members&gt;
  &lt;/album&gt;
  &lt;album numSold="multi-platinum"&gt;
      &lt;name&gt;Enter the 36 Chambers&lt;/name&gt;
      &lt;artist&gt;Wu-Tang Clan&lt;/artist&gt;
      &lt;year&gt;1993&lt;/year&gt;
  &lt;/album&gt;
&lt;/musicAlbums&gt;
</code></pre>
<p><strong>Naming rules:</strong></p>
<ul>
  <li>Case matters - <code>&lt;test&gt;&lt;/Test&gt;</code> is invalid</li>
  <li>Names must begin with a <em>letter, underscore,</em> or <em>colon</em> - <code>&lt;1purchase/&gt;</code> is invalid</li>
  <li>Names may contain letters, digits, underscores, hyphens, periods, and colons</li>
  <li><em>Colons are generally only used for defining namespaces</em></li>
  <li>
    Names that begin with the letters x, m, and l (in any comination of upper or lower case) are reserved by W3C. 
    - <code>&lt;xmlbox/&gt;</code> should be invalid
  </li>
</ul>
<hr>

<h2>Coding XML</h2>
<ul>
  <li>Commenting code - <code>&lt;!-- blah blah --/&gt;</code></li>
  <li>Empty elements - <code>&lt;firstName value="Charles"/&gt;</code></li>
  <li>Formatting is indented</li>
  <li>Use escaping entities for &, ', " etc. - <a href="https://www.w3schools.com/html/html_entities.asp" target="_blank">w3schools.com</a></li>
  <li>Display elements as text - <code>&lt![CDATA[&lt!nestedXmlFile&gt;...&lt!/nestedXmlFile&gt;]]&gt;</code></li>
</ul>
<hr>

<h2>Good Practice</h2>
<p>Keep things generic</p>
<ul>
  <li><strong>DON'T:</strong><br><code>&lt;jack&gt; &lt;jill&gt;</code></li>
  <li><strong>DO:</strong><br><code>&lt;person name="jack"/&gt;<br>&lt;person name="jill"/&gt;</code></li>
</ul>
<p>Keep in mind:</p>
<ul>
  <li>How does the computer think?</li>
  <li>How much coding do you want to do to retrieve the data from the XML?</li>
</ul>
CONTENT;

      return $returnValue;
    }

  }
}