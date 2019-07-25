<?php

namespace J\ClassNotes {

  class ASP_06_3LayerApp extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ThreeLayerApp
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Three Layer Application
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Create a Data Source</h2>
<p>If you use adatabase file (*.mfd), place the database file in the <code>App_Data</code> folder</p>
<p>Configure the data source:</p>
<ul>
  <li>
    Define the connection string (in <code>web.config</code> and reference it through 
    <code>ConfigurationManager.ConnectionStrings["ConnectionStringName"].ConnectionString</code>)
  </li>
  <li>In the ADO classes (<code>ProductDB.cs</code>, etc), add attributes to the class and the methods to allow reflection:</li>
  <ul>
    <li><b>Class</b> - <code>[DataObject(true)]</code></li>
    <li><b>Methods</b> - <code>[DataObjectMetod(DataObjectMethodType.Select|Insert|Delete|Update)]</code></li>
  </ul>
  <li>
    Make sure the update methods parameters are named (object original_obj, object obj) - whereby both object share 
    the same name except the old object must have an underscore after it\'s prefix
  </li>
  <li><b>Build the solution</b></li>
</ul>

<h2>Create a DropDown</h2>
<p>This will select the items to display in the grid</p>
<ol>
  <li>Add a DropDownList to a webform and click the arrow in the top-right corner</li>
  <li>Select <kbd>Choose Data Source...</kbd></li>
  <li>From the <b>Select a data source:</b> dropdown, select <kbd><New data source...></kbd></li>
  <li>Choose object, name it and click <b>Next</b></li>
  <li>Select the <b>Show only data components</b> checkbox, choose the object from the dropdown, and click <b>Next</b></li>
  <li>Select the tab that the method represents (SELECT | INSERT | UPDATE | DELETE), choose a method from the dropdown, and click <b>Finish</b></li>
  <li>Choose the display and value to display in the dropdown and click <b>OK</b></li>
  <li><b>Make sure to check Enable AutoPostBack</b></li>
</ol>
<h2>Create a GridView</h2>
<ol>
  <li>Add a GrdiView to the web form and click the arrow in the top-right corner</li>
  <li>Select <kbd>Choose Data Source...</kbd></li>
  <li>From the <b>Select a data source:</b> dropdown, select <kbd><New data source...></kbd></li>
  <li>Choose object, name it and click <b>Next</b></li>
  <li>Select the <b>Show only data components</b> checkbox, choose the object from the dropdown, and click <b>Next</b></li>
  <li>Select the tab that the method represents (SELECT | INSERT | UPDATE | DELETE), choose a method from the dropdown, and click <b>Finish</b></li>
  <li>Select the parameter source to be the value of the dropdown</li>
</ol>

';

      return $returnValue;
    }

  }
}