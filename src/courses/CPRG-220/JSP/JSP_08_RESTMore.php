<?php

namespace J\ClassNotes {

  class JSP_08_RESTMore extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
REST + JPA
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java Persistence API
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $DBProperties = [
        ["<b>Database:</b>", "travelexperts"],
        ["<b>URL:</b>", "jdbc:mariadb://localhost:3306/travelexperts"],
        ["<b>User name:</b>", "admin"],
        ["<b>Password:</b>", "password"]
      ];

      $returnValue = '
<h2>Intro</h2>
<p>
  Continuing the project form the previous page - 
  <a href="index.php?course=CPRG-220&topic=JSP&page=JSP_07_REST">RESTful APIs</a>, 
  we can add CRUD functionality with JPA 
</p>
<h2>Convert the project to JPA</h2>
<ol>
  <li>
    Right-click the project and select <kbd>Configure</kbd> => <kbd>Convert to JPA Project...</kbd><br>
    <em>This opens the <b>Project Facets</b> dialog</em>
  </li>
  <li>Make sure <b>JPA</b> is selected and click <kbd>Next ></kbd></li>
  <li>
    Make sure:
    <ul>
      <li>the <kbd>Platform</kbd> is <b>EclipseLink 2.5.x</b></li>
      <li>the <kbd>JPA implementation Type</kbd> is <b>User Library</b></li>
      <li>to <b>select</b> or <b>create a new</b> connection:        
        <ol>
          <li>
            To create a new connection, click the link<br>
            <em>This opens the <b>Connection Profile</b> dialog</em>
          </li>
          <li>
            Select the Database that you will use - in our case <b>MySQL</b><br>
            <em>Perhaps give it a new name to better distinguish it</em><br>
            Click <kbd>Next ></kbd>
          </li>
          <li>Select the <b>Driver</b> you will be using - in our case <b>MariaDB JDBC</b></li>
          <li>Fill in the properties for the database:</li>
          '. \WriteHTML::getTable($DBProperties, false) .'
          <li>You may want to select the <b>Save Password</b> checkbox</li>
          <li><b>Test the Connection before continuing!</b></li>
        </ol>
      </li>
      <li>Select <b>Add driver library to build path</b></li>
      <li>Click <kbd>Next ></kbd></li>
      <li>Click <kbd>Finish</kbd></li>
    </ul>
  </li> 
</ol>

<h2>Generate Entity Classes</h2>
<ol>
  <li>
    Create a new package named <b>model</b> by right-clicking the <code>/src</code> folder and selecting 
    <kbd>New</kbd> => <kbd>Package</kbd> - name it <b>model</b>
  </li>
  <li>Right-click the project and select <kbd>JPA Tools</kbd> => <kbd>Generate Entities from Tables...</kbd></li>
  <li>Make sure the right connection is selected</li>
  <li>Choose the tables you want to use to generate entity classes</li>
</ol>

';

      return $returnValue;
    }

  }
}