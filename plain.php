<?php
session_start();

require_once 'src/includes.php';

$rootFile = 'index';
$path = 'src/pages/';

$isDebug = false;

//unset($_SESSION);

//$_SESSION['page'] = isset( $_GET['page'] ) ? $_GET['page'] : '';


// Instantiate the site object with a path to the index.php file
$site = new J\ClassNotes\Site3( $isDebug);

// Assign either the get variable or an empty string to $currentPage
if(isset($_GET[ 'page' ])) {
  $_SESSION[ 'module' ] = $_GET[ 'page' ];
}



if( !$isDebug ) {
  echo $site->buildPage(false);
}
