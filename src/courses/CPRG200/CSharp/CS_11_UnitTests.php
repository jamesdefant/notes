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
<p>Feed your method values - both initial and expected result</p>
CONTENT;

      return $returnValue;
    }

  }
}