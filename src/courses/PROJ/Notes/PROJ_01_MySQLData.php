<?php

namespace J\ClassNotes {

  class PROJ_01_MySQLData extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
MySQL Tables
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Travel Experts DB Tables in MySQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $tables = [
        "affiliations",
        "agencies",
        "agents",
        "bookingdetails",
        "bookings",
        "classes",
        "creditcards",
        "customers",
        "customers_rewards",
        "fees",
        "packages",
        "packages_products_suppliers",
        "products",
        "products_suppliers",
        "regions",
        "rewards",
        "suppliercontacts",
        "suppliers",
        "triptypes"
      ];

      $server = "localhost";
      $user = "admin";
      $pass = "password";
      $dbName = "travelexperts";

      // Create connection
      $conn = new \mysqli($server, $user, $pass, $dbName);

      // Check connection
      if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $returnValue = '
<p>This is a listing of all the data in the TravelExperts MySQL database</p>
 '. $this->describeDB($conn, $tables)
;

      return $returnValue;
    }

    private function describeDB($conn, $tables)
    {
      $returnValue = "";
      foreach ($tables as $table) {
        $returnValue .= "<h2>" . $table . "</h2>";
        $returnValue .= \WriteHTML::getTable($this->describeTable($table, $conn ));
      }

      return $returnValue;
    }
    private function describeTable($table, $conn)
    {
      $returnValue = [
          ["FIELD", "TYPE", "NULL", "KEY", "DEFAULT", "EXTRA"]
      ];

      $sql = 'Describe ' . $table;

      $result = $conn->query($sql);

      $numCols = $result->field_count;

//      return $numCols;
      if($result->num_rows > 0) {

        while($row = $result->fetch_row()) {

          $array = [];

          for($i = 0; $i < $numCols; $i++) {
            array_push($array, $row[$i]);
          }
          array_push($returnValue, $array);
        }
      }

      return $returnValue;
    }

    private function selectAllQuery($table, $conn)
    {
      $returnValue = [];

      $sql = 'SELECT * FROM ' . $table;

      $result = $conn->query($sql);

      $numCols = $result->field_count;

//      return $numCols;
      if($result->num_rows > 0) {

        while($row = $result->fetch_row()) {

          $array = [];

          for($i = 0; $i < $numCols; $i++) {
            array_push($array, $row[$i]);
          }
          array_push($returnValue, $array);
        }
      }

      return $returnValue;
    }
  }
}