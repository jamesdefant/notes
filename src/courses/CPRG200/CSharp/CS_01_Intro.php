<?php

namespace J\ClassNotes {

  class CS_01_Intro extends Page
  {

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
Intro to Programming in C Sharp
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'

<h2>.NET Framework</h2>
<p>Programming layer, controlled by Microsoft</p>
<p>Although originally targeted only Windows platform,
open source projects convert .NET to run on Linux
or Unix 
(eg. Mono <a href="http://www.mono-project.com" target="_blank">Link</a> )</p>
<p>Programming languages: C#, C++, VB.NET, ASP.NET, etc</p>
<p>Class Library is available to all .NET languages (reusable components)</p>
<p>Code compiles to an intermediate language (IL) which is in turn 
compiled with the J-I-T (Just-In-Time) compiler to run on the platform.</p>
<hr>
<h2>Components of the .NET Framework</h2>
<ul>
  <li>Common Language Infrastructure - <strong>CLI</strong></li>
  <ul><li>Predefined data types, objects</li></ul>
  
  <li>Common Language Runtime</li>
  <ul><li>Executes .NET programs</li></ul>
</ul>
<p>There are two steps to compile a program into machine code</p>
<ul>
  <li>Program code translated into <strong>MSIL</strong> - 
    Microsoft Intermediate Language</li>
  <li>Just-In-Time (<strong>JIT</strong>) compiler translates MSIL into
    machine language code for specific platform</li>
</ul>
<hr>

<h2>C#</h2>
<p>Arugably the most important of the .NET languages</p>
<p>Evolved from C/C++</p>
<p>Has many similarities with Java</p>
<p>Can make use of every feature offered in .NET Framework (designed for the .NET Framework)</p>
<p>A variety of application templates: 
<ul>
  <li>Windows Forms Application</li>
  <li>Console Application</li>
  <li>WPF Application</li>
</ul>
<hr>

<h2>Visual Studio</h2>
<p><em>Does not like files accessed outside of the program (gets buggy)</em></p>
<h3>Naming Conventions</h3>
<table class="table">
  <thead>
    <tr>
      <th>Control Type</th>
      <th>Prefix</th>
      <th>For Example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Label</td>
      <td>lbl</td>
      <td>lblMessage</td>
    </tr>
    <tr>
      <td>Text Box</td>
      <td>txt</td>
      <td>txtName</td>
    </tr>
    <tr>
      <td>Button</td>
      <td>btn</td>
      <td>btnClear</td>
    </tr>
    <tr>
      <td>ListBox</td>
      <td>lst</td>
      <td>lstOption</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>frm</td>
      <td>frmMain</td>
    </tr>    
  </tbody>
</table>
<p><em>What are the benefits of prefixing names with </em><code>ux</code> (ux = user experience - ie uxClear)</p>
<p>
  When a Control is named after it's type (ie. txtName), any change made to the type of Control
   - for instance, changing a TextBox to a ComboBox, necessitates changing the name to comply 
   with convention. If the element is prefixed with <em>ux</em> and named by what it accomplishes
    (ie. <code>uxName</code>)- not what kind of element it is, then there is no need to change it's variable name if one
    were to change it's Control type (ie. TextBox => ComboBox)
</p>
<hr>

<h2>C# Data Types</h2>
<p><strong>Sample: </strong><code>dataType variableName;</code></p>
<p><strong>For example: </strong><code>int daysWorked;</code></p>
<p>Can be initialized at declaration</p>
<p><strong>For example: </strong><code>int daysWorked = 5;</code></p>
<p>Multiple variables can be declared on one line</p>
<p><strong>For example: </strong><code>int dayOfWeek = 7, month = 2, year;</code></p>

<ul>
  <li>int</li>
  <li>double</li>
  <li>float</li>
  <li>decimal</li>
  <li>char</li>
  <li>string</li>
  <li>bool</li>
</ul>
<hr>

<h2>Syntax</h2>
<p>Block Structure - statements reside in curly-braces</p>
<p>Statements end in a semicolon</p>
<p>C# is <strong>case sensitive</strong></p>
<p>White-space is ignored</p>
<pre><code>
// Single line comment

/*
  Multi-line comment
*/


</code></pre>
<pre><code>
// Class declaration
class MyClass
{
  // Member variable declaration
  private int myInt;
  public string myString;
  
  // Constructor declaration
  public MyClass( int mInt, string mString )
  {
    // Initialize member variables from parameters of constructor
    myInt = mInt;
    myString = mString;
    
    // Call method
    MyMethod();
  }
  
  // Method declaration
  private void MyMethod()
  {
    Console.WriteLine("My int = " + myInt + "\nMy string = " + myString);
  } 
}
</code></pre>

CONTENT;

      return $returnValue;
    }

  }
}