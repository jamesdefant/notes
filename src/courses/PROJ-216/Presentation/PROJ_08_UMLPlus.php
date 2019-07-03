<?php

namespace J\ClassNotes {

  class PROJ_08_UMLPlus extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
UML+
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More UML Diagrams
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Package Diagrams</h2>
<p>Relevant for medium to large size systems</p>
<p>Shows how classes are grouped into packages</p>
<p>Shows relationsships between packages (eg. one package imports another)</p>
<p>If one package depends on another, if the parent is changed, the child also needs to be re-compiled</p>
<hr>

<h2>Sequence Diagrams</h2>
<p>Created for use case</p>
<ul><li>Multiple sequence diagrams for one use case show steps of different paths through the use case</li></ul>
<p>Shows objects involved in the behaviour</p>
<p>Models sequence of events (interaction between objects)</p>
<ul><li>wWhich methods are called, arguments that are passed</li></ul>
<p>Organized along time flow - from top to bottom</p>
<p>Flow must be from one object to another - actions are caused by some other action</p>
<p>Besauce there are so many use cases, sequence diagrams should only be modeled when there is confusion 
in how the system needs to be constructed</p>
<a href="http://www.agilemodeling.com/artifacts/sequenceDiagram.htm" target="_blank">AgileModeling.com</a>
<hr>

<h2>Steps to Build a Sequence Diagram</h2>
<ol>
  <li>Set the context</li>
  <li>Identify which objects will participate</li>
  <li>Set the lifeline for each object</li>
  <li>Lay out the messages from top to bottom of the diagram based on the order in which they are sent</li>
  <li>Add execution occurance to each object's lifeline</li>
  <li>Validate teh sequence diagram</li>
</ol>
<hr>

<h2>Collaboration Diagram</h2>
<p>Same information as sequence diagrams, but focused on objects' interaction rather than time sequencing</p>
<p>Time flow represented by numbering of messages</p>
<p>Collaboration diagram can usually be automatically generated from sequence diagram and vice-versa</p>
<p>For example: <a href="http://stackoverflow.com/questions/14319015/differences-between-sequence-diagram-and-collaboration-diagram
" target="_blank">stackoverflow.com</a></p>
<hr>

<h2>State Transition Diagram</h2>
<p>Is modeled after <strong>one</strong> object</p>
<p>Created for objects that exhibit non-trivial behaviour</p>
<p>Shows changes of object's states over time</p>
<p>State changes are triggered by events</p>
<p>May also show action that accompany state change</p>
<p>For example: <a href="http://www.agilemodeling.com/artifacts/stateMachineDiagram.htm" target="_blank">agilemodeling.com</a></p>
<p>The <strong>State Transition Diagram</strong> applies to only one object</p>
<p>Only events that significantly change object state are included</p>
<p>Only classes with significant behaviour have states</p>
<p><strong>State</strong> is a time-span between 2 events</p>
<p>State variables = properties of the object</p>
<p>Events trigger state transitions</p>
<p>Actions = object's response to transitions</p>
<hr>

<h2>Component Diagram</h2>
<p><strong>Component Diagrams</strong> show the <em>physical design</em> of software components, interfaces and ports</p>
<p>An example: <a href="http://www.uml-diagrams.org/component-diagrams.html" target="_blank">uml-diagrams.org</a> </p>
<hr>

<h2>Deployment DIagram</h2>
<p><strong>Deployment Diagram</strong> shows physical nodes and components that run these nodes</p>
<p>For example: <a href="http://www.agilemodeling.com/artifacts/deploymentDiagram.htm" target="_blank">agilemodeling.com</a> </p>
<hr>

<h2>Information System Architecture</h2>
<h3>Client / Server Architecture</h3>
<p>Client functions:</p>
<ul>
  <li>Formatting and display</li>
  <li>Data entry and transmission to server</li>
  <li>Query building</li>
</ul>
<p>Server functions:</p>
<ul>
  <li>Processing requests from many clients</li>
  <li>Locking, sharing</li>
  <li>Load balancing (distribute the work - don't overload the server)</li>
  <li>Transaction processing</li>
</ul>
<p><em>Both the client and server will validate the users data.</em></p>
<hr>

<h3>Multi-Tiered Architecture</h3>
<p>Model-View-Controller - MVC</p>
<p>Presentation Layer</p>
<ul>
  <li>Thin client</li>
  <li>Validation</li>
</ul>
<p>Business Layer</p>
<ul>
  <li>Processing logic</li>
  <li>Validation</li>  
</ul>
<p>Data Layer</p>
<ul>
  <li>Data Processing</li>
  <li>Validation</li>  
</ul>
<p>Additional layers, eg. middleware</p>

CONTENT;

      return $returnValue;
    }

  }
}