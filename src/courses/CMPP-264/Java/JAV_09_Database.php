<?php

namespace J\ClassNotes {

  class JAV_09_Database extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Database
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Database Access in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  Java offers <b>JDBC (Java Database Connectivity)</b> - classes and interfaces that allow a dev to work with any
  database brand that has a Java or ODBC (Open DataBase Connectivity) driver in a standard way
</p>
<hr>

<h2>Components</h2>
<ul>
  <li>
    <code>DriverManager</code> class
    <ul>
      <li>Methods for managin multiple drivers</li>
      <li>Static methods for getting connections</li>
    </ul>
  </li>
  <li>
    <code>Connection</code> interface
    <ul>
      <li>Specify database location and sign-on info</li>
      <li>Establishes a connection with the database through which SQL can be sent and results received</li>
    </ul>
  </li>
  <li>
    <code>Statement</code> interface
    <ul>
      <li>Submits SQL to database and receives results</li>
    </ul>
  </li>
  <li>
    <code>ResultSet</code> interface
    <ul>
      <li>Receives data returned by a SELECT query</li>
      <li>Program can step through and process rows and columns and directly interact with live data on the database</li>
    </ul>
  </li>
  <li>
    <code>ResultSetMetaData</code>
    <ul>
      <li>Attached to <code>ResultSet</code></li>
      <li>Contains dataDictionary information about the datastructures that the data in the ResultSet came from</li>
    </ul>
  </li>  
</ul>
<hr>

<h2>Program Flow</h2>
<p>Database programs normally follow the same standard pattern regardless of the language</p>
<ol>
  <li>Load the driver</li>
  <li>Establish a connection</li>
  <li>Create a statement to submit to the database</li>
  <li>Submit the statement</li>
  <li>Process the results</li>
  <li>Repeat steps 3 to 5 as necessary</li>
  <li>Disconnect from the database</li>  
</ol>
<hr>

<h2>An Example with MySQL</h2>
<p>First we need to import the driver into our project:</p>
<ol>
  <li>
    In <b>Intteli J</b> navigate to the menubar and click <kbd>File</kbd> => <kbd>Project Structure...</kbd><br>
    <em>The <b>Project Structure</b> dialog will open</em>
  </li>
  <li>Navigate to the <kbd>Project Settings</kbd> panel on the left-hand side and select <b>Libraries</b></li>
  <li>
    Click the <kbd>+</kbd> => <kbd>Java</kbd> at the top of the dialog<br>
    <em>The <b>Select Library Files</b> dialog will open</em>
  </li>
  <li>Navigate to the driver you want to load - in our case the <b>MySQL Connector/J driver</b></li>
  <li>Click <kbd>OK</kbd> to close the <b>Select Library Files</b> dialog</li>
  <li>Click <kbd>OK</kbd> to close the <b>Project Settings</b> dialog</li>
  <li>The driver should now show in to <b>Project panel</b> under <b>External Libraries</b></li>
</ol>
<pre><code>
import java.sql.*;

public class Program {

    public static void main(String[] args) {
        try {
            // Load the driver
            Class.forName("com.mysql.jdbc.Driver");

            // Define your Connection object
            Connection conn = DriverManager.getConnection("jdbc:mysql://10.163.37.65:3306/travelexperts", "fred", "password");

            // Create a Statement object
            Statement stmt = conn.createStatement();

            // Execute the statement
            ResultSet rs = stmt.executeQuery("SELECT * FROM agents");
            
            // Create a Metadata object from the ResultSet object
            ResultSetMetaData metaData = rs.getMetaData();

            // Process the data
            while (rs.next()) {
                for(int i = 1; i < metaData.getColumnCount(); i++) {
                    System.out.print(metaData.getColumnLabel(i) + ": " +  rs.getString(i) + "\t|\t");
                }
                System.out.println("\n");
            }

            // Close the connection
            conn.close();
        }
        catch(ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }
    }
}
</code></pre>

';

      return $returnValue;
    }

  }
}