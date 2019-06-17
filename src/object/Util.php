<?php

namespace J;

class Util
{
  public static function printSession()
  {
    self::printArray( $_SESSION, '$_SESSION' );
/*
    echo '<h2>The $_SESSION variable has data!</h2><pre>';
    print_r( $_SESSION );
    echo '</pre>';
*/
  }

  public static function printArray( array $array, $arrayName = '' )
  {
    if( count($array) > 0 ) {
      if ($arrayName != '') {
        echo '<h2>The ' . $arrayName . ' variable has data!</h2><pre>';
      } else {
        echo '<pre>';
      }
      print_r($array);
      echo '</pre>';
    }
  }
}
