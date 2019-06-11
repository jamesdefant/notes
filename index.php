<?php
session_start();

require_once 'src/includes.php';

$isDebug = false;

$rootFile = 'index';
$path = 'src/pages/';

// Course => Topic => Module => Section

$currentCourse = '';
$currentTopic = '';
$currentModule = '';


// Instantiate the site object with a path to the index.php file
$site = new J\ClassNotes\Site( $rootFile, $path, $isDebug );

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