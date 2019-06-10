<?php

namespace J\ClassNotes {

  class Site
  {
    // Array of Page objects
    private $pages = array();
    private $currentPage;


    private $path;
    private $indexFile;
    private $files = array();

    // nav HTML element
    private $nav;

    private $isDebug;

    // Object constructor
    function __construct( $indexFile, $isDebug )
    {
      // Set debug variable from calling code
      $this->isDebug = $isDebug;

      $this->path = 'src/courses/';


      $this->fillFilesArray();
/*
      // Select first page as default or create a dummy page if none are found in array
      if(count($this->pages) == 0) {

        $this->currentPage = new GenericPage(
            "Dummy Page",
            "This is a dummy Page",
            "You better believe it is, sucka!");
      } else {
        $this->currentPage = $this->pages[0];
      }
*/
      // Build the nav
//      $this->nav = new Nav($this->pages, $this->currentPage);
      $this->nav = new Nav( $indexFile );
    }


    public function printPageFiles()
    {

      echo '<pre>';
      print_r($this->files);
      echo '</pre>';
    }


    // Test an array of files to see what they are
    private function testFileArray( array $fileArray )
    {
      $count = 0;
      foreach ($fileArray as $file) {
        echo $count++ . ' | Site testFilesArray() |  ' . $file . '<br>';
      }
      echo '<hr>';

      $count = 0;
      foreach ($fileArray as $file) {
        if( is_file(  $this->path . '/' . $file )) { echo $count++ . ' | Site testFilesArray() |  ' . $file . ' is a file' . '<br>'; }
        if( is_dir(  $this->path . '/' . $file )) { echo $count++ . ' | Site testFilesArray() |  ' . $file . ' is a directory' . '<br>'; }
      }
    }

    private function readFolder( $path )
    {
      // Remove . and ..
      $files  = array_diff(scandir($path), array('.', '..'));
//      $files = scandir($this->path);

      echo '<pre>';
      print_r( $files );
      echo '</pre>';


      if( $files == null ) {
        return;
      }
/*
      $count = 0;
      foreach ($files as $file) {
        echo $count++ . ' | Site testFilesArray() |  ' . $file . '<br>';
      }
      echo '<hr>';
*/
      $count = 0;
      foreach ($files as $file) {
        if( is_file(  $this->path . '/' . $file )) {
          echo $count++ . ' | Site readFolder() |  ' . $file . ' is a file' . '<br>';
        }
        elseif( is_dir(  $this->path . '/' . $file )) {
          echo $count++ . ' | Site readFolder() |  ' . $file . ' is a directory' . '<br>';
          $this->readFolder( $this->path . '/' . $file );
        }
      }

    }

    // Function that gets all the filenames from the pages folder
    // ..instantiates it's class and adds it to an array
    private function fillFilesArray()
    {
      // Get all files inside pages folder
//      $this->path = $path;
//      $this->path = 'src/pages';
      $files = scandir($this->path);

      if($this->isDebug) {
//        $this->testFileArray( $files );
        $this->readFolder( $this->path );
        return;
      }

      // Remove . and ..
      $files  = array_diff(scandir($this->path), array('.', '..'));

      foreach($files as $file) {
        array_push($this->files, $file);
      }

      foreach($this->files as $file) {

        // Check if the file should be ignored
        if( !is_dir($file) && $file != 'template.php' && $file != 'GenericPage.php') {

          // If not, require it to get it into the project
          require_once __DIR__ . '/../pages/' . $file;
//          require_once __DIR__ . '/../pages/' . $file;
//          require_once   $file;


          // Strip the extension off the filename
          $classNameArray = explode(
              '.',
              $file
          );

          $class = 'J\\ClassNotes\\' . $classNameArray[0];


          $newPage = new $class($classNameArray[0]);

          // Add the object to the array
          array_push(
              $this->pages,
              $newPage
          );
        }
      }
    }

    private function buildNav()
    {
      foreach($this->pages as $page) {


      }
    }

    public function buildPage(string $pageName = "") : string
    {
//      echo "<br><br><br><br>Site | currentPage = " . $pageName;
      // If no page passed to function, load the first page in array
      if($pageName == "") {
        $this->currentPage = $this->pages[0];
      }
      else {  // ...otherwise open the appropriate page
        foreach($this->pages as $page) {
          if ($page->getFilename() == $pageName) {
//            echo "<br><br><br><br><br>Site Match | PageFilename = " . $page->getFilename();

            $this->currentPage = $page;
          }
        }
      }

      // Set up the nav
      $this->nav->buildNav($this->pages, $this->currentPage);

      return $this->getPage();
    }

    private function getPage() : string
    {
      return '
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>'. $this->currentPage->getTitle() .'</title>
      
  <!-- Bootstrap 4 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
            
<!-- JavaScript code prettifier - https://github.com/google/code-prettify -->     

<!-- 
  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
-->  

<!-- highlight.js - https://highlightjs.org/ -->  
  <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/school-book.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>   
  <script>hljs.initHighlightingOnLoad();</script>       

<!-- Perfect Scrollbar -  
  <script src="../../dist/perfect-scrolbar-1.4.0/dist/perfect-scrollbar.js"></script>
  <link rel="stylesheet" href="../../dist/perfect-scrolbar-1.4.0/css/perfect-scrollbar.css">
-->
  
<!-- Custom css  --> 
  <link rel="stylesheet" href="css/styles.css">
  
<!-- Load common HTML js -->  
  <script src="js/commonHTML.js" ></script> 
  
      
  </head>
  
  <body data-spy="scroll" data-target="#myScrollSpy" data-offset="120" onload="loadCommonHTML()">
  
    '. $this->nav->getNav() .'
    
    <div class="container-fluid">
      <div class="row">
              
        <div class="col-lg-10 col-md-9">
          <h1 class="text-center m-3">'. $this->currentPage->getMainHeading() .'</h1><hr>
          <main>
          '. $this->currentPage->getContent() .'
          </main>
        </div>
               
        <div class="col-lg-2 col-md-3" id="scrollSpyNav">         
        </div>
        

        
      </div>
    </div>
    
    
  </body>  
</html>        
      ';



    }


  }
}