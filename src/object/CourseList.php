<?php

namespace J\ClassNotes;


use J\Util;

class CourseList
{

  public static $colors = [
    "2b00a3",
    "f4b11f",
    "ffff3d",
    "ff1462",
    "abff63",
    "00535e",
    "630057"
  ];
  /*
  public static $courses = [
      "CPRG-200" => "R.A.D. in C#",
      "CPRG-210" => "Web Dev",
      "PROJ-216" => "Project Mgmt",
      "GIT" => "Version Control"

  ];
  */
  public static $courseObjects = [
      "CMPP-264" => ["Java", "66c3f2"],
      "CPRG-200" => ["R.A.D. in C#", '51a051'],
      "CPRG-210" => ["Web Dev", '17a2b8'],
      "CPRG-212" => ["Database Dev", '630000'],
      "PROJ-216" => ["Project Mgmt", 'cc584d'],
      "PROJ" => ["GROUP PROJECT", 'cc584c'],
      "GIT" => ["Version Control", 'ad74bc'],
      "XML" => ["Markup Languages", "00535e"],
      "INSTRUCTORS" => ["Notes", "c48000"],
      "CPLN-240" => ["Career Planning", "5ca188"],
      "CMPS-200" => ["Operating Systems","630057"]

  ];

  public static $courseList = [];
  public static $currentCourse;

  // Constructor
  public function __construct()
  {
    self::$currentCourse = $_SESSION[ 'course' ];

    // Initialize courseList as assoc array of objects
    foreach(self::$courseObjects as $course=>$value){
      self::$courseList[$course] = new Course($course, $value[0], $value[1]);
    }

  }


  public static function getThemeStyle()
  {
    // Get current course
    $course = self::$courseList[ $_SESSION[ 'course' ] ];


    return '
<style>
.bg-theme, .bg-theme.active {
  background-color: '. $course->getColor() .';
  color: white;
}
.text-theme {
  color: '. $course->getColor() .';
}
.text-theme:hover, .text-theme-hi:hover {
  color: '. $course->getColorLow() .';
}
a.text-theme-hi {
  color: '. $course->getColorHi() .';
}
.text-theme-low {
  color: '. $course->getColorLow() .';
}

.dropdown-item.active{
  background-color: '. $course->getColor() .';
}
.dropdown-item:active {
  background-color: '. $course->getColorLow() .';
}
ul li a.active, .dropdown-item:active {
  background-color: '. $course->getColor() .';
}
ul li a:hover{
  color: '. $course->getColorLow() .';
}
ul#topics li a.active {
  background-color: transparent;
  color: '. $course->getColor() .';
  border: 3px solid '. $course->getColor() .';
  border-radius: 5px;

}
</style>
    ';
  }


}
