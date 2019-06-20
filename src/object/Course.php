<?php

namespace J\ClassNotes;

class Course
{
  private $name;
  private $Color;
  private $description;

  /**
   * Course constructor.
   * @param $name
   * @param $Color
   * @param $description
   */
  public function __construct($name, $description)
  {
    $this->name = $name;

    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @return mixed
   */
  public function getColor()
  {
    return $this->Color;
  }

  /**
   * @return mixed
   */
  public function getDescription()
  {
    return $this->description;
  }


}
