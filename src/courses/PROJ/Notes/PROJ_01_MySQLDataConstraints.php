<?php

namespace J\ClassNotes {

  class PROJ_01_MySQLDataConstraints extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Constraints
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Travel Experts DB Table Constraints in MySQL
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

      $constraints = [
        ["agents","agencies"],
        ["customers","agents","agencies"],
        ["creditcards","customers","agents","agencies"],
        ["customers_rewards","rewards","customers","agents","agencies"],
        ["bookings","triptypes","packages","customers","agents","agencies"],
        ["bookingdetails","classes","regions","fees","bookings","triptypes","packages","customers","agents","agencies"],
        ["products_suppliers","products","suppliers"],
        ["packages_products_suppliers","packages","products_suppliers","products","suppliers"],
        ["suppliercontacts","suppliers","affiliations"]
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
<p>This is a listing of all the <b>related</b> data in the TravelExperts MySQL database</p>
<p>They are all named after the top table in the hierarchy (no other table relies on it)</p>
 '. $this->describeDBConstraints($conn, $constraints)
;

      return $returnValue;
    }

    private function describeDBConstraints($conn, $constraints)
    {
      $returnValue = '';

      foreach ($constraints as $tables) {
        $count = 0;
        $heading = "";
        $list = "";
        $total = "";
        $section = "";
        $isFirst = true;
        $title = $tables[0];

        $heading .="<h5 class='center'>";
        foreach($tables as $table) {

          if($isFirst) {
            $heading .= $table;
            $isFirst = false;
          } else {
            $heading .= "/" . $table;
          }
        }
        $heading .= "</h5>";

        foreach($tables as $table) {
          $data = $this->describeTable($table, $conn);

          $list .=
            "<h3>" . $table . "</h3>" .
            "<p style='text-indent: 3em'>Number of Columns: <b>" . count($data) . "</b></p>"//        \WriteHTML::getTable($data)
          ;
          $count += count($data);
        }
        $total .= "<h5 style='text-align: end'>Total columns: <b>" . $count . "</b></h5><hr>";
        $section .=
            "<h2 class='center'>" . $title . " - " . $count . "</h2>" .
            $heading .
            $list .
            $total
        ;
        $returnValue .= $section;
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