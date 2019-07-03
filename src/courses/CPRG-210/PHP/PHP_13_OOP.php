<?php

namespace J\ClassNotes {

  class PHP_13_OOP extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
OOP PHP
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Object-Oriented Programming in PHP
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Object-Oriented Concepts</h2>      
<ul>
  <li>Class and Object</li>
  <li>Getters, Setters, Constructors, and Destructors</li>
  <li>Public, Protected, and Private</li>
  <li>Static Properties and Functions</li>
  <li>Subclasses</li>
  <li>OOP Terms ( Abstractions, Encapsulation, Inheritance, Polymorphism )</li>
</ul>
<hr>

<h2>OOP: Overview</h2>
<p>CPRG-210 has a full object model</p>
<p>OOP concepts are similar to other languages</p>
<p>Syntax is slightly different from JavaScript<br>
JavaScript uses "." notation and CPRG-210 uses "->" notation</p>
<h3>Object-Oriented Terms</h3>
<ul>
  <li>classes are templates used to create objects</li>
  <li>Objects are referenced with reference variables ( as such the take up memory on the "heap" ) </li>
  <li>Objects contain properties and methods</li>
</ul>
<h3>Define the class ( blueprint )</h3>
<pre><code>
class MyClassName
{
  // Properties
  private $property;
  
  // Constructor
  public function __construct() 
  {
    
  }
  
  // Methods
  protected function myFunction()
  {
  
  }
}
</code></pre>

<h3>Instantiate a new object</h3>
<pre><code>
$ref = new MyClassName();
</code></pre>
<h3>A class may contain:</h3>
<ul>
  <li>It's own constants and variables ( called "fields" ) to store values inside the object</li>
  <li>Functions ( called "methods" ) to manipulate values</li>
  <li>Properties ( called "Getters & Setters" or "Accessors" ) which are basically a way to hide a field behind a method.
   Why would you want to do this? </li>
</ul>
<h3>Class with Properties and Methods</h3>
<pre><code>
class SimpleClass
{
  // Property declaration
  public $var = 'a default value';
  
  // Method declaration
  public function displayVar()
  {
    // "this" is a pseudo varaiable used if a a property/method is called from inside the object
    echo $this->var;
    
  }
}


</code></pre>
<hr>

<h2>Class Layout</h2>
<pre><code>
class SampleClass
{
  // Declare properties
  
  // Declare constructor
  
  // Declare destructor
  
  // Declare getters / setters
  
  // Declare functions
}


</code></pre>
<hr>

<h2>Access Modifiers</h2>
<table class="table">
  <thead>
    <tr>
      <th>Access Modifier</th>
      <th>Description</th>
    </tr>  
  </thead>
  <tbody>
    <tr>
      <td>public</td>
      <td>Publicly accessed from anywhere</td>
    </tr>
    <tr>
      <td>private</td>
      <td>Member can only be accessed within the class itself</td>
    </tr>
    <tr>
      <td>protected</td>
      <td>Same as private, except it sllows sub-classes to acces protected superclass ( parent ) members</td>
    </tr>    
  </tbody>
</table>
<hr>

<h2>Printing objects</h2>
<p><code>toString()</code> method is called whenever an object is printed and formats the object data for output</p>
<p>Can be overridden to provide custom output</p>
<pre><code>
class MyClassName
{
  public $FirstName;
  
  // All objects contain a __toString() method, but they return the fully-qualified class name
  // Override it to provide a more readable / useful output
  public function __toString()
  {
    return "First name: " . $this->FirstName;
  }
}
</code></pre>
<hr>

<h2>Constructors</h2>
<p>Function inside the object that runs at instantiation time to complete initialization</p>
<p>Every class is implicitly defined with an empty constructor</p>
<pre><code>
// Define the class 
class MyClassName
{
  public $FirstName = "";
  
  // Constructor
  public function __construct( string $firstName)
  {
    // Code that sets up object
    $this->FirstName = $firstName;
  }
}

// Instantiating the object
$myObject = new MyClassName( "Fred" );
</code></pre>
<hr>

<h2>Destructors</h2>
<p>Function inside object that runs at destruction time</p>
<pre><code>
class MyClassName
{
  public $FirstName = "Fred";
  
  // Destructor
  public function __destruct()
  {
    // Code that runs when the object is destroyed
  }
}

// Instantiate the object
$myObject = new MyClassName();

// Destroy the object
unset( $myObject );

</code></pre>
<hr>

<h2>Accessing the members</h2>
<p>Any member that is not defined as <code>static</code> is implicitly defined as an instance variable</p>
<p>Instance members are accessed with <code>-></code></p>
<ul>
  <li><code>$myVar = $myClass->memberVariable;</code></li>
  <li><code>$myVar = $myClass->memberMethod;</code></li>
</ul>
<p>Static members are defined with the <code>static</code> keyword</p>
<p>Static members are accessed with <code>::</code></p>
<ul>
  <li><code>$myVar = MyClassName::memberVariable;</code></li>
  <li><code>$myVar = MyClassName::memberMethody;</code></li>
</ul>
<pre><code>
class MyClassName
{
  public static $counter = 0;
  public $firstName = "Fred";
  
  public static function IncrementCount()
  {
    self::$counter++;
  }
}
</code></pre>
<hr>

<h2>Subclasses ( Inheritance vs Composition )</h2>
<p>Extending or creating child classes</p>
<p>Subclasses inherit all the members of it's superclass</p>
<p>This is an effective way to extend the functionality of a class</p>
<p>Sometimes, though, it is better to <strong>compose</strong> instead of <strong>inherit</strong></p>
<p>Classes may contain objects just as they may contain values</p>
<p>We can compose a class with a practically <strong>limitless number</strong> of other objects but we may only inherit from <strong>one</strong> superclass</p>

CONTENT;
    }

  }
}