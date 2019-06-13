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