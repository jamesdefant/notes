<?php

namespace J\ClassNotes {

  class CS_09_Classes extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Classes
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Classes
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Class Members</h2>
<p>A class is the code that defines the <em>data</em> (state) and <em>methods</em> (behaviorus) of an object</p>
<ul>
  <li><strong>Properties</strong> define the characteristics of an object</li>
  <li><strong>Methods</strong> define the operations that an object can perform</li>
  <li>
    <strong>Constructors</strong> are special methods that execute when an object is created
    <p>All classes have an implicit default constructor. If you define an overoloaded constructor, the default is not defined</p>
  </li>
</ul>
<p>A <strong>class</strong> serves as the blueprint the defines how objects are built</p>
<p>The properties, methods, and events that a class deines are called <strong>members</strong> of this class</p>
<table class="table">
  <thead>
    <tr>
      <th>Member</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Field</td>
      <td>A variable that's declared at the class level (keep it private)</td>
    </tr>
    <tr>
      <td>Property</td>
      <td>A public access to the private field</td>
    </tr>
    <tr>
      <td>Constant</td>
      <td>A constant - something that will not change</td>
    </tr>    
    <tr>
      <td>Constructor</td>
      <td>A special type of method that is executed when an object is instantiated</td>
    </tr>
    <tr>
      <td>Method</td>
      <td>An operation that can be performed by the object/class</td>
    </tr>
    <tr>
      <td>Event</td>
      <td>A signal that notifies other objects that something noteworthy has happened</td>
    </tr>
    <tr>
      <td>Delegate</td>
      <td>A special type of object that's used to pass a method as an argument to other methods</td>
    </tr>
    <tr>
      <td>Indexer</td>
      <td>
        A special type of property that alloes individual items withing the class to be accessed
        by index values; Used for classes that represent collections of objects.
      </td>
    </tr>
    <tr>
      <td>Operator</td>
      <td>A special type of method that's performed for a C# operator such as += or ==</td>
    </tr>
    <tr>
      <td>Class</td>
      <td>A class that's defined within a class and is only used by the enclosing class</td>
    </tr>
  </tbody>
</table>
<hr>

<h2>Objects</h2>
<p>Objects are instances of a class</p>
<p>There can be multiple instances of one class at any one time</p>
<p>An object contains all of the methods, properties, events, etc. that were defined in the class</p>
<p>Each object is distinct and seperate from other objects that are created from the same class</p>
<p>They can all be handled in a common way as they share the same class (blueprint)</p>
<hr>



CONTENT;

      return $returnValue;
    }

  }
}