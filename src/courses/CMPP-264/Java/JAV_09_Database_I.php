<?php

namespace J\ClassNotes {

  class JAV_09_Database_I extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Database I
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

<h2>Drivers</h2>
<p>Use the static method <code>Class.forName(String driverPathName)</code></p>
<ul>
  <li><b>ODBC</b> - <code>sun.jdbc.odbc.JdbcDriver</code></li>
  <li><b>MySQL</b> - <code>com.mysql.jdbc.Driver</code></li>
  <li><b>Oracle</b> - <code>oracle.jdbc.driver.OracleDriver</code></li>  
</ul>
<p>
  <b>or</b><br>
  you can instantiate the class using <code>DriverManager.registerDriver(new path.DriverClassName())</code><br>
  <code>DriverManager.registerDriver(new com.mysql.jdbc.Driver())</code>
</p>

<h2>DriverManager</h2>
<p><code>DriverManager</code> has some useful methods:</p>
<ul>
  <li><code>DriverManager.getDriver()</code> - returns the driver if only one</li>
  <li><code>DriverManager.getDrivers()</code> - returns an enumeration conatining all drivers</li>
  <li><code>DriverManager.connect(String url, Properties info)</code> - returns connection object</li>
  <li><code>DriverManager.getConnection(String dbUrl, Properties info)</code> - returns connection object</li>
  <li><code>DriverManager.getConnection(String dbUrl, String userId, String password)</code> - returns connection object</li>
</ul>
<hr>

<h2>URL structure</h2>
<p><code>"jdbc:mysql://localhost:3306/database_name"</code></p>
<ul>
  <li><code>jdbc</code> - indicates that we are using the JDBC drivers</li>
  <li><code>mysql</code> - indicates that we are using the mysql driver</li>
  <li><code>//localhost</code> - specifies the domain which could be an external domain or an IP address</li>
  <li><code>3306</code> - is the default port used by a MySQL server</li>
  <li><code>database_name</code> - is the name of the database</li>
</ul>

<h2>Connection Strings</h2>
<ul>
  <li><b>ODBC</b> - <code>"jdbc:odbc:dataSourceName"</code></li>
  <li><b>MySQL</b> - <code>"jdbc:mysql://localhost:3306/dataSourceName"</code></li>
  <li><b>Oracle</b> - <code>"jdbc:oracle:thin:@ora1.ict.sait.ca:1521:EDUC", "userid", "password"</code></li>  
</ul>
<hr>

<h2>Properties object</h2>
<p>Properties is a subclass of Hashtable</p>
<pre><code>
Properties p = new Properties();
p.put("user", "admin");
p.put("password", "P@ssw0rd");
</code></pre>
<hr>

<h2>Statement object</h2>
<p>Used to submit a SQL query</p>
<p>Instantiated from a method of the connection object</p>
<p><code>Statement stmt = conn.createStatement();</code></p>
<p>
  The statement object has a number of <code>execute()</code> methods for dealing with various kinds of SQL 
  queries:
</p>
<ul>
  <li>
    <b>SELECT</b> - return a ResultSet<br>
    <code>ResultSet rs = stmtexecuteQuery("SELECT * FROM agents");</code>
  </li>
  <li>
    <b>INSERT, UPDATE, DELETE</b> - return an int representing the number of rows affected<br>
    <code>int numRows = stmtexecuteUpdate("DELETE * FROM agents WHERE id=3 ");</code>
  </li>
</ul>

<h2>ResultSet</h2>
<p>The dataset that gets returned from a JDBC query</p>
<p>Has methods to iterate your way through it</p>
<p>
  <code>next()</code> - positions the "cursor" at the top of the set, moves to each successive row when it is 
  called, and returns false if there are no more rows
</p>
<pre><code>
while(rs.next()) {
  System.out.println(rs.getText(1));
}
</code></pre>
<ul>
  <li><code>rs.previous()</code></li>
  <li><code>rs.first()</code></li>
  <li><code>rs.last()</code></li>
  <li><code>rs.getText(int colNum)</code> - returns a String of whatever type the column is</li>
  <li><code>rs.getString(int colNum)</code> - returns a String</li>
  <li><code>rs.getInt(int colNum)</code> - returns an int</li>  
</ul>
<hr>

<h2>ResultSetMetaData</h2>
<p>Contains data on the table - <b>names, data type, number of columns, etc</b> </p>
<p><code>ResultSetMetaData rsmd = rs.getMetaData();</code></p>
<ul>
  <li><code>rsmd.getColumnName(int index)</code></li>
  <li><code>rsmd.getColumnLabel(int index)</code></li>
  <li><code>rsmd.getColumnClassName(int index)</code></li>
  <li><code>rsmd.getColumnCount()</code></li>
  <li><code>rsmd.getColumnType(int index)</code></li>
</ul>

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