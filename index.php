<?php
session_start();

require_once 'src/includes.php';

$rootFile = 'index';
$path = 'src/pages/';

$isDebug = false;


// Instantiate the site object with a path to the index.php file
$site = new J\ClassNotes\Site( $rootFile, $path, $isDebug );

// Assign either the get variable or an empty string to $currentPage
$currentPage = isset( $_GET['page'] ) ? $_GET['page'] : '';

if( !$isDebug ) {
  echo $site->buildPage($currentPage);
}