<?php
require_once 'src/includes.php';

$isDebug = true;

$rootFile = 'index';

// Course => Topic => Module => Section

$currentCourse = '';
$currentTopic = '';
$currentModule = '';


// Instantiate the site object with a path to the index.php file
$site = new J\ClassNotes\Site( $rootFile, $isDebug );

// Set a default value for the current page
$currentPage = '';

// Get GET variable 'page'
if(isset( $_GET['page'] )) {
  $currentPage = $_GET['page'];
//  echo "<br><br><br><br><br>index.php | currentPage =" . $currentPage;
}

if( !$isDebug ) {
  echo $site->buildPage($currentPage);
}