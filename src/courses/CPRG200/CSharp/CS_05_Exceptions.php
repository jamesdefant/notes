<?php

namespace J\ClassNotes {

  class CS_05_Exceptions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Exceptions
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Exceptions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Handling Exceptions</h2>
<p>Errors that are not handled result in a program crash. For obvious reasons,
  this is not prefereable</p>
<p>Throw an Exception to safely handle it.</p>
<p>All Exception classes inherit from System.Exception</p>
<ul>
  <li>Exception : object</li>
  <ul>
    <li>SystemException : Exception</li>
    <li>IndexOutOfRangeException : SystemException</li>
    <li>NullReferenceException : SystemException</li>
  </ul>
</ul>
<hr>

<h2>Try-Catch-Finally Block</h2>
<pre><code>
try
{
  // Execute statements that may cause an error
  
  int myInt = Convert.ToInt32("432f");    // Will cause an error
  
  myInt++;    // Will not get called as flow directs to the catch
}
catch  
{
  // If the statement threw an exception, do something
  MessageBox.Show("There was an error");
}
finally   // Optional
{
  // Execute this code regardless of what happens
  
  db.CloseConnection();
}
</code></pre>
<hr>

<h2>Exception Members</h2>
<p>
  All Exception classes are derived from teh Exception class (and thus from object)
  They therefore all have the following properties which are useful for tracking an error:
</p>
<table class="table">
  <thead>
    <tr>  
      <th>Property</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>Message</code></td>
      <td>Gets a message that briefly describes the current exception</td>
    </tr>
    <tr>
      <td><code>StackTrace</code></td>
      <td>
        Gets a string that lists the methods that were 
        called before the exception occured.
      </td>
    </tr>
  </tbody>
    <thead>
    <tr>  
      <th>Method</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>GetType()</code></td>
      <td>Gets the type of hte current exception</td>
    </tr>
  </tbody>
</table>
<hr>

<h2>Try-Catch-Finally Block 2</h2>
<p>
  You can access the Exception by including the specific Type in the
  catch (). Always check more specific Exceptions before less specific
  ones as flow will be directed as soon as it's caught. 
</p>
<pre><code>
try
{
  // Execute statements that may cause an error
  
  int myInt = Convert.ToInt32("432f");    // Will cause an error
  
  myInt++;    // Will not get called as flow directs to the catch
}
catch(NullReferenceException e)
{
  // If the statement threw an exception, do something
  MessageBox.Show(e.Messaage);
}
catch(Exception e)
{
  // If the statement threw an exception, do something
  MessageBox.Show(e.Messaage);
}
finally   // Optional
{
  // Execute this code regardless of what happens
  
  db.CloseConnection();
}
</code></pre>
<hr>

<h2>Throwing Exceptions</h2>
<p>To throw an exception use the syntax:</p>
<pre><code>
throw new ExceptionClass([message]);
</code></pre>
<p>Throw an exception when:</p>
<ul>
  <li>a method encounters a situation where it isn't able to complete it's task</li>
  <li>you want to generate an exception to test an exception handler</li>
  <li>you want to catch the exception, perform some processing, then throw the exception again</li>
</ul>
<pre><code>
private decimal CalculateRemainder(int val1, int val2)
{
  if(val2 <= 0)
  {
    throw new Exception("val2 must be greater than 0");
    //...
  }
}
</code></pre>
<hr>

<h2>Null</h2>
<p>A statement that creates a null array:</p>
<code>string[] initials = null;</code>
<p>A statement that will throw a NullReferenceException</p>
<code>string firstInitial = initials[o].ToUpper();</code>
<p>A statement that uses null-conditional operators to prevent a NullReferenceException</p>
<code>string firstInitial = initials?[o]?.ToUpper();</code>
<p>
  The first ? tests whether or not the <code>initials</code> array is null, 
  and the second tests whether or not there is an element at [0] 
</p>
<p>A statement that declares a nullable type:</p>
<code>int? length = initials?.length;</code>
CONTENT;

      return $returnValue;
    }

  }
}