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

  public static function getTable(array $dataTable) : string
  {
    $headers = '';
    foreach ($dataTable[0] as $tableCell) {
      $headers .= '<th>' . $tableCell . '</th>
';
    }

    $returnValue = '
    <table class="table">
      <thead>
        <tr>
' . $headers . '
</tr>
</thead>
<tbody>

    ';

    for ($row = 1, $end = count($dataTable); $row < $end; $row++) {

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
      array $operations) : string
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
  <div class="class_diagram_footer">
  ';

    foreach ($operations as $operation) {
      $returnValue .= '<p>';
      $returnValue .= $operation;
      $returnValue .= '</p>';
    }

    $returnValue .= '
  </div>
</div>
';
    return $returnValue;
  }
}