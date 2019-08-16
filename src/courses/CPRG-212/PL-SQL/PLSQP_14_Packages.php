<?php

namespace J\ClassNotes {

  class PLSQP_14_Packages extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Packages
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Packages in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Groups related Procedures & Functions together</p>
<p>Like a .zip file</p>
<div class="container">
  <div class="row">
    
    <div class="col-md-6">
      <h4>Advantages</h4><hr>
      <ul>
        <li>Related code together
        <li>Security can be given to all programs at once</li>
        <li>Can tell who is running your Procedures and Functions</li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <h4>Disadvantages</h4><hr>
      <ul>
        <li>Only one developer at a time can change the code</li>
        <li>Slower to run code in a package</li>
        <li>Too easy to remove all the code</li>
      </ul>
    </div>
  </div>
</div>
<hr>

<h2>2 Steps</h2>
<ol>
  <li>
    Create a Package definitionthat gives all the names of 
    Functions & Procedures to put in Package (like "C" Prototype definition)
  </li>
  <li>Create the Package code for Functions & Procedures</li>
</ol>
<hr>

<h2>Create the Package</h2>
<pre><code>
CREATE OR REPLACE PACKAGE payroll_package
AS
  FUNCTION taxit(amount NUMBER) RETURN NUMBER;
  PROCEDURE printpay;
END;
</code></pre>
<hr>

<h2>Define the Package</h2>
<pre><code>
CREATE OR REPLACE PACKAGE BODY payroll_package
AS
  FUNCTION taxit(amount NUMBER) RETURN NUMBER;
  AS
  BEGIN
    RETURN amount * 0.3;
  END;
  PROCEDURE printpay
  AS
  BEGIN
    FOR x IN (SELECT * FROM emp) LOOP
      print(x.ename||\' \'|x.sal||\' \'||taxit(x.sal));
    END LOOP;
  END;
BEGIN   -- Like a constructor
  print(\'Someone is running payroll code\');
END;
/
</code></pre>
<hr>

<h2>Call the Package</h2>
<pre><code>
EXEC payroll_package.printpay
</code></pre>
';

      return $returnValue;
    }

  }
}