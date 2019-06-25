<?php



namespace J\ClassNotes;

use Mexitek\PHPColors\Color;

class Course
{
  private $name;
  private $color;
  private $color_hi;
  private $color_low;
  private $description;

  /**
   * Course constructor.
   * @param $name
   * @param $Color
   * @param $description
   */
  public function __construct($name, $description, $color)
  {
    $this->name = $name;

    $this->description = $description;

//    $this->color = $color;
    $this->color = new Color($color);

    $this->color_hi = $this->color->lighten(40);
    $this->color_low = $this->color->darken(20);

  }

  /**
   * @return mixed
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * @return string
   */
  public function getColorHi(): string
  {
    return '#' . $this->color_hi;
  }

  /**
   * @return string
   */
  public function getColorLow(): string
  {
    return '#' . $this->color_low;
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
  public function getDescription()
  {
    return $this->description;
  }


}
