<?php

namespace J\ClassNotes;


class CourseList
{

  public static $courses = [
      "CPRG200" => ["R.A.D. in C#", "#51a051"],
      "CPRG210" => ["Web Dev", "#17a2b8"],
      "PROJ216" => ["Project Mgmt", "#ad74bc"]
  ];

  public static $courseList = [];
  public static $currentCourse;

  // Constructor
  public function __construct()
  {
    self::$currentCourse = $_SESSION[ 'course' ];

    foreach(self::$Courses as $course=>$value){
      $courseList[$course] = new Course($course, $value[0]);
//      $courseList[$course] = new Course($course, $value[0], $value[1]);
    }
  }
/*

  public static function getThemeStyle()
  {
    // Get current course
    $course = self::$courseList[ $_SESSION[ 'course' ] ];


    return '
<style>
.bg-theme, .bg-theme.active {
  background-color: '. $course->getColor() .'$bg-color;
  color: white;
}
.text-theme {
  color: $bg-color;
}
.text-theme:hover, .text-theme-hi:hover {
  color: $bg-low;
}
.text-theme-hi {
  color: $bg-hi;
}
.text-theme-low {
  color: $bg-low;
}

</style>    
    ';
  }

  */
}