<?php

namespace J\ClassNotes {

  class XML_07_XSDPlus extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
XSD+
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
XML Schemas continued..
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Attributes</h2>
<p>Attributes are always of SimpleType (since tehy don't contain otherelements or attributes)</p>
<p>Attributes always appear in ComplexType elements</p>
<p>Declared in an XML Schema like:</p>
<ul><li><code>&lt;xs:attribute name="coverType" type="xs:string" use="required"/&gt;</code></li></ul>
<p>Attributes default to <strong>OPTIONAL</strong> if you don't specify <code>use="required"</code></p>
<p>Pre-define an attribute's value using <code>value="blah"</code></p>
<hr>

<h2>Occurence Constructs</h2>
<p>Define the number of times an element can occur - correlates to + or * or ? in DTDs</p>
<p><strong>maxOccurs</strong> - specifies the maximum number of times an element can occur</p>
<ul><li>can be <strong>1 to 'unbounded'</strong> (no limit)</li></ul>

<p><strong>minOccurs</strong> - specifies teh minimum number of tiems an element can occur</p>
<ul><li>can be <strong>0 (optional) or some other integer</strong></li></ul>
<hr>

<h2>Custom Simple Types</h2>
<p>Allow a developer to define their own rules for a type declaration - zip code or phone number are great examples</p>
<pre><code>
&lt;xs:simpleType name="phoneNumberType"&gt;
  &lt;xs:restriction base="xs:string"&gt;
    &lt;xs:pattern value="\d{3}-\d{3}-\d{4}"/&gt;
  &lt;/xs:restriction&gt;
&lt;/xs:simpleType&gt;    
</code></pre>
<hr>

<h2>Patterns - RegEx</h2>
<p>Used to match patterns in strings</p>
<p>
  XML uses Perl's regular expression dialect. For more details see: 
  <a href="https://perldoc.perl.org/perlre.html#Regular-Expressions" target="_blank">https://perldoc.perl.org/perlre.html#Regular-Expressions</a> 
</p>
<hr>

<h2>Range Constructs</h2>
<p>Range constructs limit the range of simple tyoes that are numerically and date based</p>
<ul>
  <li><strong>maxInclusive</strong> - used to set an upper limit that <strong>INCLUDES</strong> the value that it is set to</li>
  <li><strong>maxExclusive</strong> - used to set an upper limit that <strong>EXCLUDES</strong> the value that it is set to</li>
  <li><strong>minInclusive</strong> - used to set an lower limit that <strong>INCLUDES</strong> the value that it is set to</li>
  <li><strong>minExclusive</strong> - used to set an lower limit that <strong>EXCLUDES</strong> the value that it is set to</li>
</ul>
<hr>

<h2>Annotations</h2>
<p>Annotations are simply a special type of comment that software programs can read</p>
<p>Used for documenting web services and other public APIs</p>
<p>Declared like:</p>
<pre><code>
&lt;xs:annotation&gt;
  &lt;xs:documentation&gt;blah, blah, blah...&lt;/xs:documentation&gt;
&lt;/xs:annotation&gt;    
</code></pre>
<hr>

<h2>Scope</h2>
<p><strong>Local scope</strong> is simply defined as having everything nested </p>
<p><strong>Global scope</strong> allows the developer to 'name' a complexType or simpleType so that the type can be reused in the XSD</p>
<p>Global scope element types should be direct child elements of <code>&lt;xs:schema&gt;</code></p>
<p>Define a global scope for an element by:</p>


<pre><code>
&lt;xs:schema&gt;

  <span style="color:red;">// 1. Giving it a name</span>
  &lt;xs:element name="address" type="addressType"/&gt;

  <span style="color:red;">// 2. Creating a definition as a child under <code>&lt;xs:schema&gt;</code></span>
  &lt;xs:complexType name="addressType"&gt;
    &lt;xs:sequence&gt;
      ...
    &lt;/xs:sequence&gt;    
&lt;/xs:schema&gt;
</code></pre>

CONTENT;

      return $returnValue;
    }

  }
}