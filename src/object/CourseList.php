<?php

namespace J\ClassNotes;


use J\Util;

class CourseList
{

  public static $courses = [
      "CPRG200" => "R.A.D. in C#",
      "CPRG210" => "Web Dev",
      "PROJ216" => "Project Mgmt"
  ];
  public static $courseObjects = [
      "CPRG200" => ["R.A.D. in C#", '51a051'],
      "CPRG210" => ["Web Dev", '17a2b8'],
      "PROJ216" => ["Project Mgmt", 'ad74bc']
  ];

  public static $courseList = [];
  public static $currentCourse;

  // Constructor
  public function __construct()
  {
    self::$currentCourse = $_SESSION[ 'course' ];

    // Initialize courseList as assoc array of objects
    foreach(self::$courseObjects as $course=>$value){
//      $courseList[$course] = new Course($course, $value[0]);
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

</style>    
    ';
  }


}