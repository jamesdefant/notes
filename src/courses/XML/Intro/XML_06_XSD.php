<?php

namespace J\ClassNotes {

  class XML_06_XSD extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
XSD
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
XML Schema Definition
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Definition</h2>
<p>Like a DTD, an XML Schema defines what a given set of XML documents should look like</p>
<ul>
  <li>Written in XML which DTD are not</li>
  <li>aAllow user to define a 'scope' for elements - local or global</li>
  <li>Allows user to define datatypes for elements</li>
</ul>
<hr>

<h2>Types</h2>
<p>There are 2 different element types in XML Schema - <strong>Simple</strong> and <strong>Complex</strong> type</p>
<p><strong>Simple</strong> element types are elements that contain only text</p>
<p><strong>Complex</strong> element types are elements that contain:</p>
<ul>
  <li>Child elements</li>
  <li>Attributes</li>
  <li>Child elements and attributes</li>
  <li>Attributes and content</li>
  <li>Child elements and content</li>
  <li>Child elements, attributes, and content</li>
</ul>
<hr>

<h2>Simple Types</h2>
<p>Defining a Simple Type in XSD's:</p>
<ul><li><code>&lt;xs:element name="elementName" type="xs:string"/&gt;</code></li></ul>
<p>Occurence Constructs</p>
<ul>
  <li>
    Rules taht can be added to simple elements that define a minimum and/or maximum number of times 
    it can occur in the XML file
  </li>
  <li>... <code>minOccurs="1" maxOccurs="unbounded"</code></li>
  <li>When no occurence constructs provided, and element defaults to '<strong>1 and only 1</strong>' in an XSD</li>
</ul>
<hr>

<h2>Predefined DataTypes</h2>
<p>
  The grand-daddy of all schemas (the rule set that all schemas inherit -  
  <a href="https://www.w3.org/2001/XMLSchema" target="_blank">https://www.w3.org/2001/XMLSchema</a>)
  defines a number of ready to use datatypes for simple element and attribute declarations. Some of them are: 
</p>
<ul>
  <li><code>xs:string</code> - alphanumeric characters, symbols and spaces</li>
  <li><code>xs:positiveDecimal</code> - positive number which can include decimals</li>
  <li><code>xs:boolean</code> - true or false</li>
  <li><code>xs:date</code> - conatins a date</li>
  <li><code>xs:time</code> - contains a time</li>
  <li>...many others</li>
</ul>
<hr>

<h2>Create an XSD</h2>
<ol>
  <li>Start with the XML declaration</li>
  <ul><li><code>&lt;? xml version="1.0" ?&gt;</code></li></ul>
  
  <li>Declare the namespace for the grandaddy schema from w3 inside the <code>xs:schema</code> tag</li>
  <ul><li><code>&lt;xs:schema xmlns:xs="https://www.w3.orf/2001/XMLSchema"</code></li></ul>
  
  <li>
    Associate the XSD with the XML document as <strong>an attribute of the ROOT element in the XML doc</strong>
    (this is different than a DTD) 
  </li>
  <ul><li><code>&lt;rootElement xmlns:xsi="https://www.w3.orf/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="mySchema.xsd"&gt;</code></li></ul>
</ol>
<hr>

<h2>Complex Types</h2>
<p>An element that can contain child elements and/or attributes is considered to be a complex type</p>
<p>There are 4 different types of complex types:</p>
<ul>
  <li><strong>Element only</strong> - an element that can contain child elements, but no attributes or text</li>
  <li><strong>Empty</strong> - an element that can contain attributes, but never child elements or text</li>
  <li><strong>Mixed Content</strong> - an element that can contain attributes, child elements, and text content</li>
  <li><strong>Text only</strong> - an element that contains only text, and possibly attributes</li>
</ul>
<hr>

<h2>Element Only Complex Type</h2>
<p>An element that can contain child elements, but no attributes or text</p>
<p>If your XML looks like this:</p>
<pre><code>
&lt;book&gt;
  &lt;title&gt;Sidhartha&lt;/title&gt;
&lt;/book&gt;
</code></pre>

<p>The XML Schema should look like this:</p>
<pre><code>
&lt;xs:element name="book"&gt;
  &lt;xs:complexType&gt;
      &lt;xs:sequence&gt;
        &lt;xs:element name="title"/&gt;
      &lt;/xs:sequence&gt;    
  &lt;/xs:complexType&gt;    
&lt;/xs:element&gt;
</code></pre>

<p>However, nested elements need to be acounted for:</p>
<pre><code>
// If this is the XML...

&lt;business&gt;
  &lt;name&gt;Harvey's&lt;/name&gt;
  &lt;address&gt;
    &lt;street&gt;1610 14th Ave NW&lt;/street&gt;
    &lt;postal_code&gt;H4K5J3&lt;/postal_code&gt;
  &lt;/address&gt;
  &lt;phone&gt;(403)256-4567&lt;/phone&gt;
&lt;/business&gt;


// The XML Schema should look like this:

&lt;xs:element name="business"&gt;
  &lt;xs:complexType&gt;
    &lt;xs:sequence&gt;
      &lt;xs:element name="name" type="xs:string"/&gt;
      &lt;xs:element name="address"&gt;
      <span style="color: red;">// Notice how we drill down on the children before we move on</span>
        &lt;xs:complexType&gt;
          &lt;xs:sequence&gt;
            &lt;xs:element name="street" type="xs:string"/&gt;
            &lt;xs:element name="postal_code" type="xs:string"/&gt;
          &lt;/xs:sequence&gt;    
        &lt;/xs:complexType&gt;    
      &lt;/xs:element&gt;
      &lt;xs:element name="phone" type="xs:string"/&gt;
    &lt;/xs:sequence&gt;    
  &lt;/xs:complexType&gt;    
&lt;/xs:element&gt;
</code></pre>
<hr>

<h2>The Sequence Tag</h2>
<p>Determines the <strong>order</strong> in which child elements must display in the XML</p>
<p>Defined by <code>&lt;xs:sequence&gt;</code></p>
<p>A sequence tag can contain other sequence tags</p>
<p>Legitimate for a sequence tag to contain only one element</p>
<hr>

<h2>Empty Complex Type</h2>
<p>An element that can contain attributes, but never child elements or text</p>
<p>For situations  where your XML looks like this:</p>
<pre><code>
&lt;book isbnNumer="123456789" coverType="softcover"/&gt;
</code></pre>

<p>The XML Schema should look like this:</p>
<pre><code>
&lt;xs:element name="book"&gt;
  &lt;xs:complexType&gt;
    &lt;xs:attribute name="isbnNumer" type="xs:integer" use="required"/&gt;
    &lt;xs:attribute name="coverType" type="xs:string" use="required"/&gt;
  &lt;/xs:complexType&gt;    
&lt;/xs:element&gt;
</code></pre>
<hr>

<h2>Mixed Element Complex Type</h2>
<p>An element that can contain attributes, child elements, and text content</p>
<p>For situations  where your XML looks like this:</p>
<pre><code>
&lt;book isbnNumer="123456789"&gt;
  <strong>Text content here</strong>
  &lt;title&gt;Sidhartha&lt;/title/&gt;
&lt;/book/&gt;
</code></pre>

<p>The XML Schema should look like this:</p>
<pre><code>
&lt;xs:element name="book"&gt;
  &lt;xs:complexType&gt;
    &lt;xs:attribute name="isbnNumer" type="xs:integer" use="required"/&gt;
    &lt;xs:attribute name="coverType" type="xs:string" use="required"/&gt;
  &lt;/xs:complexType&gt;    
&lt;/xs:element&gt;
</code></pre>
<hr>


<h2>Text Only Content Type</h2>
<p>An element that contains only text, and possibly attributes</p>
<p>For situations  where your XML looks like this:</p>
<pre><code>
&lt;book isbnNumer="123456789"&gt;
  The title of the book is "Chronicle of a Death Foretold"
&lt;/book/&gt;
</code></pre>

<p>The XML Schema should look like this:</p>
<pre><code>
&lt;xs:element name="book"&gt;
  &lt;xs:complexType&gt;
    &lt;xs:simpleContent&gt;
      &lt;xs:extension base="xs:string"&gt;
        &lt;xs:attribute name="isbnNumer" type="xs:integer" use="required"/&gt;    
      &lt;/xs:extension&gt;
    &lt;/xs:simpleContent&gt;
  &lt;/xs:complexType&gt;    
&lt;/xs:element&gt;
</code></pre>
<hr>

CONTENT;

      return $returnValue;
    }

  }
}