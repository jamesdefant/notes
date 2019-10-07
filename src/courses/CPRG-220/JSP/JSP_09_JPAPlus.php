<?php

namespace J\ClassNotes {

  class JSP_09_JPAPlus extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JPA +
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Adding More Models with JPA
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>In the last page we added <b>one <code>Agent</code> model class</b> to our <b>RESTApp</b> application</p>
<p>
  Continuing the project form the previous page - 
  <a href="index.php?course=CPRG-220&topic=JSP&page=JSP_08_RESTMore">JPA Persistence API</a>, 
  we can add another model class with JPA 
</p>

<p>If we want to add more models to our system, there are a couple things we need to do</p>

<h2>Add Another Model</h2>
<ol>
  <li>Right-click the project and select <kbd>JPA Tools</kbd> => <kbd>Generate Entities from Tables...</kbd></li>
  <li>Deselect the table you just added (<b>Agent</b>) as it will be replaced if it remains selected</li>
  <li>Choose the table you want to use (<b>Agency</b>) to generate an entity class</li>
  <li>Click <kbd>Next ></kbd></li>
  <li><kbd>Table Associations</kbd> dialog - confirm the <b>Table Associations</b>, if any and click <kbd>Next ></kbd></li>
  <li>
    <kbd>Customize Defaults</kbd> dialog
    <ul>
      <li>Under <kbd>Entity Access</kbd>, select <b>Property</b></li>
      <li>
        Under <kbd>Domain java class</kbd>, confirm the <b>Source folder</b> and <b>Package</b>
        that the model will be created in
      </li>
      Click <kbd>Next ></kbd>
    </ul>    
  </li>
  <li>
    <kbd>Customize Individual Entities</kbd> dialog
    <ul>
      <li>confirm the <b>Class name</b></li>
      <li>Under <kbd>Entity Access</kbd>, select <b>Property</b></li>
      Click <kbd>Finish</kbd>
    </ul>
  </li>
  <li>
    Now you should have an <code>Agency.java</code> class generated in the model package
    <div class="alert alert-info">
      There are no nullable fields in the <b>Agency</b> table that aren\'t <code>String</code>s,
      so we don\'t need to alter the <code>Agency.java</code> class
    </div>
  </li>  
</ol>

<h2>Add Another Access Class</h2>
<p>We\'ll need to add another database access class for the <code>Agency</code> class:</p>

<ol>
  <li>Create a new java class by right-clicking the project and selecting <kbd>New</kbd> => <kbd>Class</kbd></li>
  <li>Name it <b>AgencyRestService</b> and click <kbd>Finish</kbd></li>
  <li>
    Now you\'ll have a new empty java class<br>
    You can either re-write the class piece by piece or copy the previous class in and change the following:
    <ul>
      <li>the name of the class from <code>SimpleRestService</code> into <code>AgencyRestService</code></li>
      <li>
        all the references of<br>
        <code>Agent</code> into <code>Agency</code><br>
        <code>agent</code> into <code>agency</code><br>
        rename the methods etc...
      
      </li>
    </ul>
  </li>
</ol>
';

      return $returnValue;
    }

  }
}