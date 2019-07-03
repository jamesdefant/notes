<?php

namespace J\ClassNotes {

  class CS_11_UnitTests extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Unit Testing
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Unit Testing
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro to Unit Testing</h2>
<p><strong>Unit Testing</strong> - testing the pieces of your code in isolation</p>
<p>Gain confidence that components work on their own before putting the pieces together</p>
<p>Organized approach to catch logical errors</p>
<p>Tests can be saved and re-run on command</p>
<p>Provides some form of documentation</p>
<p>Still a need for <strong>integration testing</strong></p>
<p><strong>TDD - Test Driven Development</strong> - start by writing your tests, then write your code</p>
<hr>

<h2>Build the test</h2>
<p><strong>Arrange</strong> - initialize objects and data to be passed to the method under test</p>
<p><strong>Act</strong> - invoke the method under test with the arranged parameters</p>
<p><strong>Assert</strong> - verify that the method behaves as expected</p>
<hr>

<h2>Creating a test</h2>
<p>Here's your class library that you want to test:</p>
<pre><code>
namespace J
{
  public class Utils
  {
    public int MultiplyNumByTwo(int num)
    {
      return num * 2;
    }
  }
}
</code></pre>
<ol>
  <li>In Visual Studio, right click inside of the public method or class and choose <kbd>Create Unit Tests</kbd></li>
  <ul>
    <li>Choose the <kbd>Test Project</kbd> (if you are creating a test project or adding to one)</li>
    <li>This will create a Unit Test Project with the same name as your namespace</li>
  </ul>
  <li>In the Unit Test Project, add a reference to the class library that you would like to test</li>
  <li>Right-click on the Unit Test Project and select <kbd>Add</kbd>=><kbd>Unit Test...</kbd></li>
  <ul>
    <li>This will create a generic class that can be used for testing the library</li>
    <li>Notice the attributes <code>[TestClass]</code> and <code>[TestMethod]</code></li>
  </ul>
  <li>Rename the class to the same as the library + "Test"</li>
  <ul><li><code>class Utils</code> => <code>class UtilsTest</code></li></ul>
  <li>Rename/name the method something that describes the test itself</li>
  <ul><li><code>MultiplyNumByTwo()</code> => <code>MutliplyPositiveNumByTwo()</code></li></ul>
  <li>Stub out some comments to help:</li>
</ol>
<pre><code>
namespace JTests
{
  [TestClass]
  public class UtilsTest
  {
    [TestMethod]
    public void MutliplyPositiveNumByTwo()
    {
      // Arrange
      
      // Act
      
      // Assert
      
    }
  }
}
</code></pre>
<ol>
  <strong>Arrange</strong>
  <li>Start by instantiating the object (feed any necessary values to the constructor)</li>
  <ul><li><code>Utils utils = new Utils();</code></li></ul>
  <li>Define the variables you'll be working with:</li>
  <ul>
    <li>The value to put into the method:</li>
    <ul><li><code>int number = 5;</code></li></ul>
    <li>The value you expect to get returned form the method:</li>
    <ul><li><code>int expectedResult = 10;</code></li></ul>
    <li>A variable to hold the actual result from the method:</li>
    <ul><li><code>int actualResult;</code></li></ul>
  </ul>
  <strong>Act</strong>
  <li>Call the method and store the result:</li>
  <ul><li><code>actualResult = utils.MultiplyNumByTwo(number)</code></li></ul>
  <strong>Assert</strong>
  <li>Call the <code>Assert()</code> method which compares the two values</li>
  <ul><li><code>Assert.AreEqual(expectedResult, actualResult);</code></li></ul>
</ol>

<pre><code>
namespace JTests
{
  [TestClass]
  public class UtilsTest
  {
    [TestMethod]
    public void MutliplyPositiveNumByTwo()
    {
      // Arrange
      Utils utils = new Utils();
      int number = 5;
      int expectedResult = 10;
      int actualResult;
      
      // Act
      actualResult = utils.MultiplyNumByTwo(number)
      
      // Assert
      Assert.AreEqual(expectedResult, actualResult);
    }
  }
}
</code></pre>
<hr>

<h2>Run the Test</h2>
<p>
  Open up the <code>Test Explorer</code> by navigating to the menubar and selecting:<br/>
  <kbd>Test</kbd> => <kbd>Windows</kbd> => <kbd>Test Explorer</kbd>
</p>
<p>All the tests in this project will show up here</p>
<p>Tests that have not been performed have a blue icon:</p>
<p>Tests that have passed successfully have a green checkmark icon:</p>
<p>Tests that have failed have a red x icon:</p>
CONTENT;

      return $returnValue;
    }

  }
}