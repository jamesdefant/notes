<?php

namespace J\ClassNotes {

  class CS_12_Inheritance extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Inheritance
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Inheritance
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro to Inheritance</h2>
<p>A way to reuse code</p>
<p>Specialize a class by extending it from another class</p>
<p>One class can <strong>only inherit from one</strong> other class</p>
<p>Syntax:</p>
<pre><code>
public class SavingsAccount : Account
{

}
</code></pre>

<p>Child (derived) classes inherit all the data members and the methods from it's parent (base) class</p>
<p>This makes inherited classes look much leaner, despite having all the members that they inherit from their base class</p>
<pre><code>
public class Account
{
  int accountNumber;
  decimal balance;
  
  public void GetBalance()
  {}
}

public class SavingsAccount : Account
{
  // Contains all the fields and methods of Account
  
  decimal interestRate;
}

public class ChequingAccount : Account
{
  // Contains all the fields and methods of Account
  
  public void WriteCheque()
  {}
}
</code></pre>
<hr>

<h2>Object</h2>
<p>All classes inherit from <code>object</code> as the penultimate base class</p>
<p>This gives every class access to it's members, such as:</p>
<ul>
  <li><code>Equals(Object)</code></li>
  <li><code>Equals(Object, Object)</code></li>
  <li><code>Finalize()</code></li>
  <li><code>GetHashCode()</code></li>
  <li><code>GetType()</code></li>
  <li><code>MemberwiseClone()</code></li>
  <li><code>ReferenceEquals(Object, Object)</code></li>
  <li><code>ToString()</code></li> 
</ul>
<hr>

<h2>Constructor</h2>
<p>
  Because the base class needs to be initialized (constructed), 
  we need to explicitly call the bass classes constructor
</p>
<pre><code>
public class Account
{
  private int accountNumber;

  // Constructor  
  public Account(int acctNum)
  {
    accountNumber = acctNum;
  }
}

public class SavingsAccount : Account
{ 
  decimal interestRate;
  
  // Constructor
  // (calls the constructor of the base class)
  public SavingsAccount(int acctNum, decimal interestRate) : base(acctNum)
  {
    this.interestRate = interestRate;
  }
}
</code></pre>
<hr>

<h2>Accessibility</h2>
<p>The type of accessibility defines how a derived class can <em>access</em> it's base class</p>
<p>The access modifiers are:</p>
<ul>
  <li><code>public</code></li>
  <li><code>protected</code></li>
  <li><code>internal</code></li>
  <li><code>private</code></li>
</ul>
<p>You can combine them to create six different accessibility levels:</p>

<table class="table">
  <tr>
    <td><code>public</code></td>
    <td>Access is not restricted</td>
  </tr>
  <tr>
    <td><code>protected</code></td>
    <td>Access is restricted to this or any derived types</td>
  </tr>
  <tr>
    <td><code>internal</code></td>
    <td>Access is limited to the current assembly</td>
  </tr>
  <tr>
    <td><code>protected internal</code></td>
    <td>Access is limited to the current assembly <em>or</em> any derived types</td>
  </tr>
  <tr>
    <td><code>private</code></td>
    <td>Access is limited to this type</td>
  </tr>
  <tr>
    <td><code>private protected</code></td>
    <td> Access is limited to this type <em>or</em> 
    any derived type within the current assembly</td>
  </tr>
</table>
<pre><code>
public class Account
{
  // Will be part of SavingsAccount, but will not be changable (accessible)
  private int accountNumber;
  private decimal balance;
  
  // Will be accessible by SavingsAccount
  protected string name;
  
  // Property will be accessible by SavingsAccount, but not by outside classes
  protected decimal Balance
  {
    get 
    {
      return balance;
    }    
  }
  
}

public class SavingsAccount : Account
{ 

}
</code></pre>
<hr>

<h2>override</h2>
<p>
  Inherited classes can redefine or <code>override</code> a method defined in it's base class, 
  but only if the base class allows it
</p>
<p>Both methods of the base class and inherited class must have the same signature(return type and parameter lists)</p>
<p>The base class must define the method with one of the following keywords:</p>
<ul>
  <li>
    <code>override</code> - though this method must itself be overriding a method defined as 
    <code>virtual</code> or <code>abstract</code>
  </li>
  <li><code>virtual</code> - allows a method to be overriden</li>
  <li>
    <code>abstract</code> - defines no implementation, but neccessitates that the inherited class 
    defines one<br>Any class that declares an abstract method must declare itself <code>abstract</code>
  </li>
</ul>
<pre><code>
// Because we define an abstract method, we need to define the class as abstract as well
public abstract class Account
{  
  // Method that is defined but allows inherited classes to change it
  protected virtual decimal GetBalance(int acctNum)
  {
    return balance;
  }
  
  // Method that is not deinfed but forces inherited classes to define it
  protecetd abstract void MakeDeposit();
}

public class SavingsAccount : Account
{ 
  // Redefine the virtual method (signature remaains the same)
  protected override decimal GetBalance(int acctNum)
  {
    return balance + bonus;
  }
  
  // Define abstract method (or else error is thrown)
  protected override void MakeDeposit()
  {
    // Do something exceptional
  }
}
</code></pre>
<hr>

<h2>Polymorphism</h2>
<p>
  The power that overriding members of a class gives us is such that we can treat a group of different 
  child classes all the same as it's underlying base class.
</p>
<p>This is called <strong>Polymorphism</strong></p>
<p><strong>For example:</strong></p>
<p>
  if we define a base class called Shape with a <code>abstract GetArea()</code> method, we can create inherited classes
  (Circle, Square, Rectangle) that all define their own <code>GetArea()</code> methods using their own calculations.
</p>
<p>
  We can then lump them all together as Shape objects, and call the one <code>GetArea()</code> method on them all and 
  get the appropriate result
</p>
<pre><code>
// Abstract base class
abstract class Shape
{
  protected decimal area;
  
  protected abstract decimal GetArea();
  
  public override string ToString()
  {
    return this.GetType() + " | " + area;
  }
}

// Inherited class
class Square : Shape
{
  private decimal edgeLength;
  
  public Square(decimal edgeL)
  {
    edgeLength = edgeL;
  }
  
  protected override decimal GetArea()
  {
    area = edgeLength * edgeLength;
    return area;
  }
}

// Inherited class
class Circle : Shape
{
  private decimal radius;
  
  public Circle(deimcal rad)
  {
    radius = rad;
  }
  
  protected override decimal GetArea()
  {
    area = (decimal)(Math.PI * (double)(radius * radius));
    return area;
  }
}
</code></pre>
<p>Call it like this:</p>
<pre><code>
List&lt;Shape&gt; shapes = new List&lt;Shape&gt;();

Square sqr = new Square(5);
shapes.Add(sqr);

Circle cir = new Circle(5);
shapes.Add(cir);

foreach(Shape shape in shapes)
{
  Console.WriteLine(shape.ToString());
}
</code></pre>
<p>It outputs this:</p>
<div class="console"><pre>
Circle | 78.5398...
Square | 25
</pre></div>

CONTENT;

      return $returnValue;
    }

  }
}