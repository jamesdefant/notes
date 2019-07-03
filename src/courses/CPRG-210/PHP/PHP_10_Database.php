<?php

namespace J\ClassNotes {

  class PHP_10_Database extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
PHP DBs
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PHP & Databases
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
          <h2>Outlines</h2>
          <p><strong>ERD</strong> - Entity Relationship Diagram - <a target="_blank" href="https://www.visual-paradigm.com/guide/data-modeling/what-is-entity-relationship-diagram/">Link here</a></p>
          <p><strong>Conceptual diagram</strong> - highly abstracted diagram. Shows entities and names / relationships</p>
          <p><strong>Logical diagram</strong> - more details - define the primary keys</p>          
          <p><strong>Physical diagram</strong> - define the data types and attributes, constraints, etxc</p>
          <p><strong>DBMS</strong> - Database Managemenet System (MySQL, PostGre, MariaDb)</p>
          <ul>
            <li><strong>CLI</strong> - Command Line Interface</li>
            <li><strong>GUI</strong> - Graphic User Inteface</li>
          </ul>
          <p><strong>Use the CLI!!</strong></p>
          <hr>
          
          <h2>MySQL</h2>
          <p>Free - open source</p>
          <p>Very popular</p>
          <p>Leading choice for web based applications</p>
          <hr>
          
          <h2>MySQL: PHPMyAdmin</h2>
          <p>Web based GUI app to create / edit MySQL databases</p>
          <hr>
          
          <h2>A number of approaches</h2>
          <p>Use specific drivers - need a  seperate driver for each DB brand<br>Need to learn different functions for each</p>          
          <p>Use MySQLi Driver - Avoid using MySQL driver (deprecated)<br>Use MySQLi (Extension / Improved)</p>
          <p>Use PDO (CPRG-210 Data Object) - Independent from database brand</p>
          
          <h2>MySQLi</h2>
          <p><strong>Procedural</strong> - driver provides many functions </p>
          <p><strong>Object Oriented</strong> - Create a MySQLi object -> then call methods from that object</p>
          <p><strong>CPRG-210 Data Object - PDO</strong> - Create a PDO object - then call methods from that object - is database agnostic</p>
          <ol>
           <li>Connect to the DB</li>
           <li>Manipulate database</li>
           <li>Close connection - release the resources!!</li>
          </ol>
          <hr>

          <h3>Connect</h3>
          <pre><code>
$dbh = mysqli_connect( "host", "user", "password", "dbname" );          

// Check for success before continuing
if( !$dbh ) {
  
  // If there is an error, print a message
  echo \'Error number: \'
  . mysqli_connect_errno() . PHP_EOL;
  echo \'Error message: \'
  . mysqli_connect_error() . PHP_EOL;
  exit;
}
          </code></pre>
          <hr>
          
          <h3>Manipulate database<br><span class="small">Check the result first!</span></h3>
          <p><code>mysqli_free_result()</code> - fetch rows from a result-set, then free the memory associated with the result</p>
          <pre><code>
// Issue a SQL Select query
if( $result = mysqli_query( $dbh, "SELECT * 
                                   FROM products" )) {

  // Process data
  mysqli_free_result( $result );
}          
          </code></pre>
          
          <p><code>mysqli_fetch_row()</code> - fetch rows from a result-set</p>
          <pre><code>
// Returns result as an array
while( $row_array = mysqli_fetch_row( $result ) ) {

}          
          </code></pre>
          
          <h3>Close the connection</h3>
          <pre><code>
mysqli_close( $dbh );
          </pre></code>
          
          <h2>More MySQLi Functions</h2>
          <p>Similar to <code>mysqli_fetch_row()</code> but allows you to specify the array type</p>
          <ul><strong>
            <li>MYSQLI_ASSOC</li>
            <li>MYSQLI_NUM</li>
            <li>MYSQLI_BOTH</li>
          </strong></ul>
          <p><code>mysqli_both()</code>: Array is numerically and key indexed</p>
          </code></pre>
while( $array = mysqli_fetch_array( $result, MYSQLI_NUM ) ) {

}          
          </code></pre>
          
          <h2>Inserting</h2>
          <pre><code>
$name = "fred smith";          
$phone = "(403) 555-5555";

$sql = "INSERT INTO agent (AgtName, AgtPhone)
        VALUES ( \'$name\', \'$phone\' )";

$result = mysqli_query( $sql );

if( $result ) {
  print( "Insert was <strong>successful</strong>" );
}        
else {
  print( "Insert was <strong>not successful</strong>" );
}
          </code></pre>
          <p><code>mysqli_query()</code> will return <strong>true</strong> on success and <strong>false</strong> on failure</p>
          <hr>
          
                    <h2>Updating</h2>
          <pre><code>
$id = 5;
$name = "fred smith";          
$phone = "(403) 555-5555)";

$sql = "UPDATE agent
        SET name = \'$name\',
            phone = \'$phone\'
        WHERE id = \'$id\'";
        
$result = mysqli_query( $sql );        

if( $result ) {
  print( "Update was <strong>successful</strong>" );
}        
else {
  print( "Update was <strong>not successful</strong>" );
}
          </code></pre>
          <hr>
          
                    <h2>Deleting</h2>
          <pre><code>
$id = 5;


$sql = "DELETE FROM agent
        WHERE id = \'$id\'";
        
$result = mysqli_query( $sql );        

if( $result ) {
  print( "Delete was <strong>successful</strong>" );
}        
else {
  print( "Delete was <strong>not successful</strong>" );
}
          </code></pre>
          <hr>
          
          <h2>Prepared Statements</h2>
          <p>Feature used to efficiently execute the same or similar SQL statmentents repeatedly</p>
          <p>Execute plan preperation</p>
          <p>Use <strong>??</strong> as data insert points in SQL statement</p>
          <p>Can bind variables to <strong>?</strong> and put values in prior to submitting to DB</p>
          <pre><code>
$name = "fred smith";          
$phone = "(403) 555-5555";

$sql = "INSERT INTO agent (AgtName, AgtPhone)
        VALUES ( ?, ? )";
        
$stmt = mysqli_prepare( $dbh, $sql );        
mysqli_stmt_bind_param( $stmt, "ss", $name, $phone );
mysqli_stmt_execute( $stmt );
$mysqli_stmt_close( $stmt );          
          </code></pre>
          <table>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </table>
          <hr>
          
          <h2>CPRG-210 Data Object (PDO)</h2>
          <p>Create a PDO object and call methods to use it</p>
          <pre><code>
$conn = new PDO( \'mysql:host=localhost;dbname=travelexperts\', \'user\', \'password\' );
$stmt = $conn->query( "SELECT * FROM agents" );
$row = $stmt->fetch( PDO::FETCH_ASSOC );
$conn = null;
          </code></pre>
          <pre><code>
try{
  $conn = new PDO( $dsn, $user, $password );
  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  echo "You are connected<br>";
  $myQuery = "INSERT INTO agents( name, phone )
              VALUES ( "Jim", "(403) 555-5555")";
  $conn->exec( $myQuery );
  
} 
catch(PDOException $e) {
  echo "Failed" . $e->getMessage();
}   
$conn = null;      
          </code></pre>
          
          <hr>
  
CONTENT;
    }

  }
}