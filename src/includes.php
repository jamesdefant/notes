<?php




// Course => Topic => Module => Section

$currentCourse = '';
$currentTopic = '';
$currentModule = '';


// Variable to hold all the include paths
$paths = [
  "/object",
  "/Mexitek/PHPColors"
];

requireObjects( $paths );

function requireObjects( array $paths )
{
  // Loop through each folder and require all files inside it
  foreach($paths as $path) {

    // Remove . and ..
    $contents  = array_diff(scandir(__DIR__ . $path), array('.', '..'));
    $files = [];

    foreach($contents as $file) {
      array_push($files, $file);
    }

    foreach($files as $file) {

      // Check if the file is the template file
      if ($file != 'template.php' && $file != 'GenericPage.php') {

        // If not, require it to get it into the project
        require_once __DIR__ . $path . '/' . $file;
      }
    }
  }

}