<?php

class WriteHTML
{

  /*
   * <div class="class_diagram">
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

   */

  /*
   * Turn a SQL Server Report into a HTML table
   * Use comma as a delimiter
   * include query
   */
  public static function getTableFromReport($reportFilename) : string
  {
    // Open the file
    $myFile = fopen($reportFilename, "r") or die("Unable to open file!");

    // Create the array from the file
    $line = '';
    $array = [];

//    $count = 0;
    $isQuery = false;
    $isData = false;
    $query = '';
    while(!feof($myFile)) {

      // If the first char is not '(' - split the line and add the elems to an array

      $lineArray = [];

      $line = fgets($myFile);

      if($isData) {
        // If line does not contain '('
        if (strpos($line, '(') === false) {

          // If line does contain ','
          if ($line != "" && $line != "\n" && $line != "\r" && $line != "\r\n" && $line != "\R") {
//          if () {

            $stringArray = explode(",", $line);

            foreach ($stringArray as $string) {
              array_push($lineArray, $string);
            }

            if (count($lineArray) > 0) {
              array_push($array, array_filter($lineArray));
            }
          }
        }
        else {
          $isData = false;
        }
      }

      if(stripos($line, "-*") !== false) {
        $isQuery = false;
        $isData = true;
      }


      if($isQuery === true) {
        $query .= $line;
      }

      if(stripos($line, '*-') !== false) {
        $isQuery = true;
      }
    }
    $newArray = array_filter($array);
//    \J\Util::printArray($newArray, "table array");

    return '
<div class="table-example">
  <pre class="SQL">' . $query . '</pre>' .
  self::getTable($newArray).
'</div>';
  }

  // Get a table from a sql report with custom delimiter
  public static function getTableFromReportDelimiter($reportFilename, $delimiter = "|", $showQuery = true) : string
  {
    // Open the file
    $myFile = fopen($reportFilename, "r") or die("Unable to open file!");

    // Create the array from the file
    $array = [];

    // Init variables
    $isQuery = false;
    $isData = false;
    $query = '';

    // Read the file
    while(!feof($myFile)) {

      // If the first char is not '(' - split the line and add the elems to an array

      $lineArray = [];

      $line = fgets($myFile);

      // Skip this until the flag goes up
      if($isData) {
        // If line does not contain '('
        if (strpos($line, '(') === false) {

          // If line does contain ','
          if ($line != "" && $line != "\n" && $line != "\r" && $line != "\r\n" && $line != "\R") {
//          if () {

            $stringArray = explode($delimiter, $line);

            foreach ($stringArray as $string) {
//              echo "<br/>" . $string;
              array_push($lineArray, $string);
            }

//            \J\Util::printArray($lineArray, "line array");

            if (count($lineArray) > 0) {
              array_push($array, $lineArray);
            }
          }
        }
        else {
          $isData = false;
        }
      }


      if(stripos($line, "-*") !== false) {
        $isQuery = false;
        $isData = true;
      }


      if($isQuery === true) {
        $query .= $line;
      }

      if(stripos($line, '*-') !== false) {
        $isQuery = true;
      }
    }
    $newArray = array_filter($array);
//    \J\Util::printArray($newArray, "table array");

    $returnValue = '
<div class="table-example">';

    if($showQuery) {
      $returnValue .=
      '<pre class="SQL">' . $query . '</pre>';
  }
    $returnValue .=
        self::getTable($newArray).
        '</div>';

    return $returnValue;
  }


  public static function getTable(array $dataTable, bool $displayHeaders = true) : string
  {
    // Set the first row depending on whether or not we display headers
    $startRow = $displayHeaders ? 1 : 0;

    if($displayHeaders) {
      $headers = '';
      foreach ($dataTable[0] as $tableCell) {
        $headers .= '<th>' . $tableCell . '</th>
    ';
      }
    }

    $returnValue = '
    <table class="table">
    ';
    if($displayHeaders) {
      $returnValue .= '
      <thead>
        <tr>
' . $headers . '
</tr>
</thead>
';
    }
    $returnValue .= '

<tbody>

    ';

    // Start at 1 to skip the header row
    for ($row = $startRow, $end = count($dataTable); $row < $end; $row++) {

      $returnValue .= '<tr>';

      for($col = 0, $last = count($dataTable[$row]); $col < $last; $col++) {
        $returnValue .= '<td>' . $dataTable[$row][$col] . '</td>';
      }

      $returnValue .= '</tr>';
    }

    $returnValue .= '
</tbody>
</table>
    ';

    return $returnValue;
  }

  public static function getClassDiagram(
      string $className,
      array $properties,
      array $operations = null) : string
  {
    $returnValue = '
<div class="class_diagram">
  <div class="class_diagram_head">
  ';

    $returnValue .= $className;

    $returnValue .= '
  </div>
  <div class="class_diagram_body">
  ';

    foreach ($properties as $property) {
      $returnValue .= '<p>';
      $returnValue .= $property;
      $returnValue .= '</p>';
    }

    $returnValue .= '
  </div>
  ';
    if ($operations != null) {
      $returnValue .= '
      <div class="class_diagram_footer">
  ';

      foreach ($operations as $operation) {
        $returnValue .= '<p>';
        $returnValue .= $operation;
        $returnValue .= '</p>';
      }


      $returnValue .= '
  </div>
  ';
    }
    $returnValue .= '
</div>
';
    return $returnValue;
  }
}