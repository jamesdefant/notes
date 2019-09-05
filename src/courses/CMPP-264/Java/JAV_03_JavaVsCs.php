<?php

namespace J\ClassNotes {

  class JAV_03_JavaVsCs extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Java vs C#
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java vs. C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Similarities</h2>
<p>
  <b>C#</b> was based on <b>Java</b> when it was first introduced, therefore Java and C# share a number of similarities.</p> 
  <p>They are both class-based object oriented languages.</p>
  <p>They both are compiled to some form of intermediary code (<b>Bytecode</b> in Java or 
  <b>Microsoft Intermediate Language</b>) which is then compiled at runtime with a <b>JIT</b>
  (<b>Just In Time</b>) compiler. Java runs on a <b>JVM</b> (Java Virtual Machine) while <b>C#</b> runs on <b>CLR</b>
  (Common Language Runtime). 
</p>
<p>Much of the syntax is identical between the two languages:</p>
<pre><code>
// Sample class
public class Customer
{
  // Field
  private int number = 5;  
  
  // Constructor
  public Customer() 
  { 
    // Initialize values
  }
  
  // Methods
  protected void MakeDecision() 
  {
    // Do something
  }
  
  private int GetNumber()
  {
    return 123;
  }

}  
</code></pre>
<h3>If/ElseIf/Else</h3>
<pre><code>
if(condition) {
  // Do something
} 
else if(other condition) {
  // Do something else
}
else {
  // Do some other thing
}
</code></pre>

<h3>Switch</h3>
<pre><code>
switch(letterGrade)
{
  case \'A\':
    returnValue = 95;
    break;
  case \'B\':
    returnValue = 85;
    break;
  default:
    returnValue = 50;
    break;
}
</code></pre>

<h3>While Loop</h3>
<pre><code>
while(i < numTimes) {
  // Do something
  i++;
}
</code></pre>

<h3>For Loop</h3>
<pre><code>
for(int i = 0; i < numTimes; i++) {
  // Do something
}
</code></pre>

<h3>Arrays</h3>
<pre><code>
int[] numbers = {1, 1, 2, 3, 5, 8};
int total = numbers.length;   // total = 6
numbers[3] = 10;              // change the 4th item to 10

int[][] 2DArray = { {1,2,3,4}, {5,6,7,8} };
int num = 2DArray[1][3];    // num = 8
</code></pre>

<h3>Try/Catch/Finally</h3>
<pre><code>
try
{
  // Questionable code
}
catch (Exception e)
{
  // Manipulate the exception (print the message)  
}
finally
{
  // Code to always be executed
}
</code></pre>
<hr>

<h2>Differences</h2><hr>
<div class="container">

  <h2>Platforms</h2>
  <div class="row compare">
    
    <div class="col-md-6">
      <h3>Java</h3><hr>
      <p><b>Java SE 8</b> runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Vista, Server</li>
        <li>MacOS 10.8.3, 10.9+</li>
        <li>Linux Oracle 7.x, 6.x, 5.5+; RedHat_Ent 7.x, 5.5+; Suse_EntServer 12.x, 11.x; Ubuntu 15.10, 15.04, 14.x, 13.x</li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <h3>C#</h3><hr>
      <p>C# (<b>.NET Framework 4.7</b>) runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Server</li>
      </ul> 
      <p>C# (<b>.NET Core 2.2</b>) runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Server</li>
        <li>MacOS 10.12+</li>
        <li>
          Linux RedHat_Ent/CentOS/Oracle 7; Fedora 30,29; Debian 9; Ubuntu 18.10, 18.04, 16.04; Mint 18,17; openSUSE 42.3+;
          SUSE_Ent 12 SP2+; Alpine 3.7+
        </li>
      </ul>     
    </div>
    
  </div>
  <hr>
  
  <h2>Libraries</h2>

  <div class="row compare">
    
    <div class="col-md-6">
      <h3>Java</h3><hr>
      <p>Java groups modules in <b>packages</b> (the difference is pedantic)</p>
      <p>Define them like so:</p>
      <pre><code>
package myproject.mypack;  

public class MyClass {
  ...      
      </code></pre>
      <p>Import a package like so:</p>
      <pre><code>
// Import the whole package      
import myproject.mypack.*;

// Import only the class
import myproject.mypack.MyClass;
      </code></pre>
    </div>
    
    <div class="col-md-6">
      <h3>C#</h3><hr>
      <p>C# groups modules in <b>namespaces</b> (the difference is pedantic)</p>
      <p>Define them like so:</p>
      <pre><code>
namespace MyProject.MyNamespace
{
  public class MyClass 
  { ...      
      </code></pre>  
      <p>Import a namespace like so:</p>
      <pre><code>
// Import the whole namespace      
using MyProject.MyNamespace;          

// Import only the class
using MyProject.MyNamespace.MyClass;  
      </code></pre>          
    </div>
    
  </div>
  <hr>

  <h2>Modifiers</h2>

  <div class="row compare">
    
    <div class="col-md-6">
      <h3>Java</h3><hr>
      <p>Java access modifiers:</p>
      <p>For <kbd>classes</kbd> only <b>public</b> and <b>default</b> are available</p>      
      <ul>
        <li><code>private</code> - restricted to the declared class</li>
        <li><em>default</em> - restricted to the same package</li>
        <li><code>protected</code> - restricted to the declared class and <b>subclasses</b></li>
        <li><code>public</code> - not restricted</li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <h3>C#</h3><hr>
      <p>C# access modifiers:</p>
      <ul>
        <li><code>private</code> - restricted to the declared class</li>
        <li><code>internal</code> - restricted to the same assembly</li>
        <li><code>protected</code> - restricted to the declared class and <b>subclasses</b></li>
        <li><code>public</code> - not restricted</li>

        <li><code>protected internal</code> - restricted to the same assembly <em>or</em> subclasses</li>
        <li><code>private protected</code> - restricted to the declared class <em>or</em> subclasses</li>

      </ul>      
    </div>
    
  </div>
  <div class="row compare">
    
    <div class="col-md-6">
      <p>Java non-access modifiers:</p>
      <p>For <kbd>classes</kbd> only <b>final</b> and <b>abstract</b> are available</p>
      <ul>
        <li><code>final</code> - attributes and methods cannot be overidden/modified</li>
        <li><code>static</code> - attributes and methods belong to the class instead of the object</li>
        <li>
          <code>abstract</code> - <b>Can only be used in an abstract class and on methods</b><br>
          The method does not have a body<br>
          <code>abstract void run();</code><br>
          The body (implementation) is provided by the subclass
        </li>
        <li><code>transient</code> - attributes and methods are skipped when serializing the object containing them</li>
        <li><code>synchronized</code> - methods can only be accessed by one thread at a time</li>
        <li>
          <code>volatile</code> - the value of an attribute is not cached thread-locally, and is allways read from 
          the "main memory"
        </li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <p>C# non-access modifiers:</p>
      <ul>
        <li><code>abstract</code> - </li>
        <li><code>async</code> - </li>
        <li><code>event</code> - </li>
        <li><code>extern</code> - </li>
        <li><code>override</code> - </li>
        <li><code>readonly</code> - </li>
        <li><code>sealed</code> - </li>
        <li><code>static</code> - </li>
        <li><code>unsafe</code> - </li>
        <li><code>virtual</code> - </li>
        <li><code>volatile</code> - </li>

        <li><code>in</code> - </li>
        <li><code>new</code> - </li>
        <li><code>out</code> - </li>


      </ul>      
    </div>
    
  </div>
  <hr>
</div>

';

      return $returnValue;
    }

  }
}