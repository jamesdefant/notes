<?php

namespace J\ClassNotes {

  class INJ_02_JUnit extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JUnit
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Unit Testing with JUnit
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  Unit testing is an integral part of writing clean, secure, bug-free code. JUnit is a testing framework built for 
  testing Java.
</p>

<h2>Setup</h2>
<p>To test a class in Intelli J, open the class and place the caret within it</p>
<h4>Here\'s our sample class:</h4>
<pre><code>
public class Person {

  private int age;
  public void setAge(int age) { this.age = age; }  
  
  public int doubleAge() {
    return age * 2;
  }
}
</code></pre>
  
<ol>
  <li>It\'s best to keep things organized so create a directory as a child of the root named <b>test</b></li>
  <li>Right-click the directory and choose <kbd>Mark Directory as ></kbd> => <kbd>Test Sources Root</kbd></li>
  <li>
    Navigate to the menubar <kbd>Navigate</kbd> => <kbd>Test</kbd> or use the shortcut -> <kbd>ctrl + shift + t</kbd> 
    and select <b>Create New Test...</b> from the context menu
  </li>
  <li>A <b>Create Test</b> dialog will pop up</li>
  <li>
    Choose your testing library - <b>JUnit5</b> is good<br>
    <b><em>If it says that the JUnit5 library is no found in the module you\'ll need to import it</em></b>
    <ul>
      <li>Click <kbd>Fix</kbd></li>
      <li>This will open a <b>Download Library from Maven Repository</b> dialog</li>
      <li>The <b>or.junit.jupiter:junit-jupiter:5.4.2</b> library should already be selected</li>
      <li>Select where you want it downloaded to</li>
      <li>Choose whether you want to include the <b>Sources</b>, <b>Javadocs</b>, or <b>Annotations</b></li>
      <li>Click <b>OK</b></li>
    </ul>
  </li>
  <li>If you\'d like Intelli J to generate <b>setUp/tearDown</b> methods, check the appropriate boxes</li>
  <li>Select the methods you want generated for you</li>
  <li>Click <b>OK</b></li>
</ol>
<p>This will generate the following code:</p>
<pre><code>
import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;

public class PersonTest {

    @BeforeEach
    void setUp() {
    }

    @AfterEach
    void tearDown() {
    }

    @Test
    void doubleAge() {
    }
}
</code></pre>
<p>If you\'ll have more than one testing method, <b>rename the test method</b> to make it clear what it is testing</p>
<p><em>Note that you\'ll have to <b>Edit the Configuration</b> so that the new name is referenced properly</em></p>
<pre><code>
    @Test
    void testPositive_doubleAge() {
    }
</code></pre>

<pre><code>
public class PersonTest {
    Person p;
    
    @BeforeEach
    void setUp() {
        p = new Person();
    }

    @AfterEach
    void tearDown() {
    }

    @Test
    void testPositive_doubleAge() {
        p.setAge(40);
        int expectedResult = 80;
        int actualResult = p.DoubleAge();

        assertEquals(expectedResult, actualResult);
    }
}
</code></pre>
<p>Now it\'s easy to copy/paste that test to create more tests:</p>
<pre><code>
    @Test
    void testNegative_doubleAge() {
        p.setAge(-40);
        int expectedResult = 0;
        int actualResult = p.DoubleAge();

        assertEquals(expectedResult, actualResult);
    }
</code></pre>
<h2>Run the Tests</h2>
<p>
  In the <kbd>Run panel</kbd>, right-click the test class and select <b>Run \'[test_class_name]\'</b> or 
  use the shortcut -> <kbd>ctrl + shift + F10</kbd>
</p>
<p>
  This will show us that one of our tests passed and one of our tests failed. The logic in our <b>Person</b> 
  class is faulty. It does not handle negative numbers.
</p>
';

      return $returnValue;
    }
  }
}