<?php

namespace J\ClassNotes {

  class PROJ_06_Objects extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Objects
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Classes and Objects
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Thinking of objects</h2>
<ul>
  <li>An <strong>Object:</strong></li>
  <ul>
    <li>Is a person, place, or thing, or concept (a noun)</li>
    <li>Has permanance and identity</li>
    <li>Well defined boundaries and meaning</li>
    <li>Can be simple or complex</li>
    <li>Can be real - a car, a chair</li>
    <li>...or imaginary - a color, a date</li>
  </ul>  
  <li>Objects have:</li>
  <ul>
    <li><strong>Attributes</strong></li>
    <ul>
      <li>Properties</li>
      <li>"What the object <em>has</em>"</li>
    </ul>
    <li><strong>Operations</strong></li>
    <ul>
      <li>Behaviours</li>
      <li>Methods</li>
      <li>"What the object <em>does</em>"</li>
    </ul>
  </ul>
  <li>A <strong>Class</strong></li>
  <ul>
    <li>A set of objects sharing a common structure and common behaviour</li>
    <li>An object is an instance of a class</li>
    <li>Blueprint, or tamplate, for creating objects</li>
  </ul>
</ul>
<p>The terms <em>instance</em> and <em>object</em> are used interchangably</p>
<hr>

<h2>Identifying Classes</h2>
<p>Similar to entity/relationship identification</p>
<p>Get a written description of a situation</p>
<p>Identify the nouns or noun phrases</p>
<ul>
  <li>These might indicate classes of objects</li>
</ul>
<p>Testing if an item is a candidate for a class</p>
<ul>
  <li>Relevance to the problem domain</li>
  <lil>Can exist independently</lil>
  <li>Has attributes and operations</li>
</ul>
<hr>

<h2>Interface and Implementation</h2>
<p><strong>Interface</strong> is the outside view</p>
<ul>
  <li><strong>Public</strong> - items accessible to all external objects through the interface (portal)</li>
</ul>
<p><strong>Implementation</strong> - is the inner workings</p>
<ul>
  <li><strong>Private</strong> - items accessible only from inside the object, hidden from outside (brick wall)</li>
</ul>
<p>Typically:</p>
<ul>
  <li>Attributes (properties) are private</li>
  <li>Operations (methods) are public</li>
  <li>Why?</li>
  <li>This is called <strong>Data Hiding</strong> or <strong>Encapsulation</strong></li>
</ul>
<hr>

<h2>Class Relationships</h2>
<p>System's behaviour is accomplished by collaboration of objects</p>
<ul>
  <li>Objects collaborate by calling methods, passing parameters, and receiving returned values</li>
</ul>
<p>An <strong>Association</strong> between classes means that an object uses data or methods in another object</p>
<p>For example: Car and Passenger</p>
<p><strong>Association</strong> is the most common type of relationship between classes</p>
<p>Other types of relationships:</p>
<ul> 
  <li><strong>Aggregation:</strong> - "<em>has</em> a"</li>
  <ul>
    <li>One object is a part of another object</li>
    <li>Whole/part relationship</li>
    <li>Container and contents</li>
    <li>Can navigate from whole to it's parts</li>
    <ul><li>Example: JavaScript - document => form => elements</li></ul>
  </ul>
  
  <li><strong>Generalization</strong> - "<em>is</em> a"</li>
  <ul>
    <li>One class is a special case of another class</li>
    <li>More general / more specific relationship</li>
    <li>Inheritance</li>
    <li>More specific class <strong>inherits</strong> properties and operations of the more general class</li>
    <li>More specific clas <strong>extends</strong> more general class</li>
  </ul>
</ul>

CONTENT;
    }

  }
}