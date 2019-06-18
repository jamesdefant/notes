<?php
require_once 'src/includes.php';

set_include_path("c:\WORKSPACE\WEBSITE\_Sites\class_notes\src\PROJ");

$path = 'PROJ';

$site = new J\ClassNotes\Site( $path );

// Set a default value for the current page
$currentPage = '';

// Get GET variable 'page'
if(isset( $_GET['page'] )) {
  $currentPage = $_GET['page'];
//  echo "<br><br><br><br><br>index.php | currentPage =" . $currentPage;
}

echo $site->buildPage($currentPage);