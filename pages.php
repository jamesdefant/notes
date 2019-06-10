<?php
require_once 'src/includes.php';

$path = 'pages';

$site = new J\ClassNotes\Site( $path );

// Set a default value for the current page
$currentPage = '';

// Get GET variable 'page'
if(isset( $_GET['page'] )) {
  $currentPage = $_GET['page'];
//  echo "<br><br><br><br><br>index.php | currentPage =" . $currentPage;
}

echo $site->buildPage($currentPage);