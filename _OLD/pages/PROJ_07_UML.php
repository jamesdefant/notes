<?php

namespace J\ClassNotes {

  class PROJ_07_UML extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
UML
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Unified Modeling Language
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue =  <<< 'CONTENT'
<h2>UML Books</h2>
<ul>
  <li><strong>Sam's teach yourself UML in 24 Hours</strong><br>by Joseph Schmuller</li>
  <li><strong>UML Bible</strong><br>by Tom Pender</li>
  <li><strong>The Elements of UML Style</strong><br>by Scott W. Ambler</li>
</ul>
<hr>

<h2>UML Diagrams</h2>
<ul>
  <li>Use Case Model - captures user's perspective</li>
  <ul><li>Use case diagrams</li></ul>
  
  <li>Logical Model</li>
  <ul>
    <li>Structure of the system</li>
    <ul><li>Class diagrams, package diagrams</li></ul>
    
    <li>Behaviour of the system</li>
    <ul><li>Sequence diagrams, communication diagrams, state transition diagrams, activity diagrams</li></ul>
  </ul>
  
  <li>Physical Model</li>
  <ul>
    <li>Component diagram (software)</li>
    <li>Deployment diagram (hardware)</li>
  </ul>
</ul>
<hr>

<h2>Use Case Diagrams</h2>
<p>Identifies who interacts with the system - <strong>actors</strong></p>
<p>Identifies <em>major</em> parts of system's functionality - <strong>use cases</strong></p>

<h2>Logical Model </h2>
<h3>(Structure of the System)</h3>
<p>Describes the static strucure of the system</p>
<ul>
  <li>Classes</li>
  <ul>
    <li>Attributes</li>
    <li>Operations</li>
    <li>Relationships</li>
  </ul>
  <li>Class diagrams</li>
  <li>Packages</li>
  <li>Package diagrams</li>
</ul>
<hr>

<h2>Use Case Analysis</h2>
<p>Use cases are top-level items of system's functionality from the user's point of view</p>
<p>Two comnponents of documenting use cases:</p>
<ul>
  <li>Written use case descriptions</li>
  <li>Use case diagram</li>
</ul>
<p>Shows interaction between users and the system in very general terms</p>
<ul>
  <li>No detailed steps</li>
  <li>No timing condideration</li>
</ul>
<p>No standard format</p>
<p>Typical elements:</p>
<ul>
  <li>Use case name (verb-noun phrase)</li>
  <li>Who interacts with it (actors)</li>
  <li>What triggers it</li>
  <li>Normal flow of events</li>
  <li>Subflows (break it down to simplify description)</li>
  <li>Exceptional flows</li>
</ul>
<hr>

<h2>Use Case Diagrams</h2>
<p><strong>Use cases</strong> - major pieces of system's functionality, as observed by the users</p>
<ul>
  <li>Within the system's boundaries</li>
  <li>Labeled with ver-noun phrase</li>
</ul>
<p><strong>Actors</strong> - people (roles) or other systems that interact with our system</p>
<ul>
  <li>Derives benefit from the system</li>
  <li>Is external to the system</li>
</ul>
<h3>Relationships</h3>
<p>Association</p>
<ul><li>Links an actor to the use case(s) with which it interacts</li></ul>
<p>Relationships between two use cases</p>
<ul>
  <li>Include</li>
  <li>Extend</li>
  <li>Generalization</li>
</ul>
<p>Relationships between two actors do not exist (irrelevant outside of the system)</p>
<p>Relationships between two use cases cannot be an association</p>
<hr>

<h2>Classes</h2>
<p>Finding and documenting classes</p>
<ul>
  <li>Informal description</li>
  <ul>
    <li>Identify nouns (objects) and verbs (operations) in written problem description</li>
    <li>CRC cards</li>  
  </ul>
  
  <li>Structured analysis</li>
  <ul>
    <li>Model the problem - dataflow diagrams, etc</li>
    <li>Analyze data elements for potential objects</li>
  </ul>
</ul>
<hr>

<h2>Class Diagrams</h2>
<p>Symbols</p>
<ul>
  <li>Class</li>
  <li>Association</li>
  <ul>
    <li>Cardinality</li>
    <li>Association classes</li>
  </ul>
  <li>Aggregation</li>
  <li>Generalization</li>
</ul>

CONTENT;

      $returnValue .= \WriteHTML::getClassDiagram(
          "public ClassName",
          array("+ PublicProperty1", "+ PublicProperty2", "+ PublicProperty3"),
          array("+ PublicMethod()", "# ProtectedMethod( param1 ) : string")
      ) .
          \WriteHTML::getClassDiagram(
              "<em>abstract ClassName</em>",
              array("+ PublicProperty : int", "# ProtectedProperty : string", "- privateProperty : float = defaultValue", ""),
              array("+ PublicMethod()", "# ProtectedMethod( param1 ) : string")
          );
  /*
<div class="class_diagram">
  <div class="class_diagram_head">
    Employee
  </div>
  <div class="class_diagram_body">
    <p>firstName</p>
    <p>lastName</p>
    <p>address</p>
    <p>city</p>
  </div>
  <div class="class_diagram_footer">
    <p>calculatePay(double)</p>
    <p>printMailingList() : string</p>
  </div>
</div>
<hr>
*/
    $returnValue .=  <<< 'CONTENT'
<h2>Association Relationship</h2>
CONTENT;

    return $returnValue;

    }

  }
}