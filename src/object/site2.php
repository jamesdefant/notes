<?php

namespace J\ClassNotes {

  use J\Tree;
  use J\Util;

  class Site2
  {
    // Array of Page objects
    private $pages = array();
    private $currentPage;
    private $curentCourse;
    private $curentTopic;
    private $curentModule;


    private $path;
    private $indexFile;
    private $files = array();

    // nav HTML element
    private $nav;


    private $directoryLevel = 0;
    private $courses = [];
    private $topics = [];
    private $modules = [];
    private $coursesPath = [];
    private $topicsPath = [];
    private $modulesPath = [];
    private $modulesAssoc = [];

    private $structure = [];

    private $isDebug;

    // Object constructor
    function __construct( $isDebug )
    {
      // Set debug variable from calling code
      $this->isDebug = $isDebug;

      $this->indexFile = 'index';

      $this->path = 'src/courses/';
/*
      if($this->isDebug) {
        $this->path = 'src/courses/';
      }
      else {
        $this->path = 'src/pages/';
      }
*/
//      $this->path = 'src/pages/';

      $this->readFolder( $this->path, 'Courses', $this->directoryLevel );
//      $this->buildArray();
      $this->printArrays();

      // If SESSION [ page ] not set, default to first in list
      if(!isset($_SESSION['page'])) {
        echo '<h2>SESSION-page not set</h2>';
//        $_SESSION['page'] = array_key_first( $this->modulesAssoc );
      }
      Util::printSession();
//      echo $this->buildPage( $_SESSION['page'] );
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
//      $this->nav = new Nav1( $indexFile );
    }


    public function printPageFiles()
    {

      echo '<pre>';
      print_r($this->files);
      echo '</pre>';
    }


    private function buildArray()
    {
      foreach ($this->modulesPath as $modulePath) {

        // Break the path into pieces

        // Remove the extension
        $pathArray = explode(".", $modulePath);
        $path = $pathArray[0];

        $nodesArray = explode("/", $path);
        $module = $nodesArray[4];
        $topic = $nodesArray[3];
        $course = $nodesArray[2];



      }
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
        if( is_file(  $this->path . '/' . $file )) {
          echo $count++ . ' | Site testFilesArray() |  ' . $file . ' is a file' . '<br>';
        }
        if( is_dir(  $this->path . '/' . $file )) {
          echo $count++ . ' | Site testFilesArray() |  ' . $file . ' is a directory' . '<br>';
        }
      }
    }

    private function readFolder( $path, $parent,  $depth )
    {
      // Remove . and ..

//        $files = array_diff(scandir($path), array('.', '..'));
        $files = scandir(($path)) ? array_diff(scandir($path), array('.', '..')) : null;

//      $files = scandir($this->path);

      if($this->isDebug) {
        echo '<h2>Contents of ' . $path . '</h2><pre>';
        print_r($files);
        echo '</pre>';
      }

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

        $filePath = $path . $file;
        if($this->isDebug) {
          echo 'readFolder() | filePath = ' . $filePath . '<br>';
        }

        if( is_dir(  $filePath )) {
          if($this->isDebug) {
            echo $count++ . ' | Site readFolder() |  ' . $filePath . ' is a directory with a depth of ' . $depth . '<br>';
          }

          switch ($depth) {

            // Is a course
            case 0:

              // Add the directory path to the courses array
   //           array_push( $this->coursesPath, $filePath );
              array_push( $this->courses, $this->stripClassNameFromFilePath( $filePath ) );

//              array_push( $_SESSION[ 'courses' ], array ($this->stripClassNameFromFilePath( $filePath )) );

              //             $_SESSION[ $parent ] = $this->stripClassNameFromFilePath( $filePath );


              $this->structure[$parent][$this->stripClassNameFromFilePath( $filePath, true )] = array();

              break;

            // Is a Topic
            case 1:

              // Add the directory path to the topics array
//              array_push( $this->topicsPath, $filePath );
              array_push( $this->topics, $this->stripClassNameFromFilePath( $filePath ) );
//              $_SESSION[ $parent ] = $this->stripClassNameFromFilePath( $filePath );

              $this->structure[ 'Courses' ][$parent][$this->stripClassNameFromFilePath( $filePath, true )] = array();

              break;
          }
          if($this->isDebug) {
            echo '<br>$filePath = ' . $filePath . '<hr>';
          }

          $this->readFolder( $filePath . '/', $this->stripClassNameFromFilePath( $filePath, true ),$this->directoryLevel + 1 );
        }
        elseif( is_file(  $filePath )) {
          if($this->isDebug) {
            echo $count++ . ' | Site readFolder() |  ' . $filePath . ' is a file with a depth of ' . $depth . '<br>';
          }

          $className = $this->stripClassNameFromFilePath( $filePath );

          // Add the file to the modules array
//          array_push( $this->modulesPath, $filePath );

          array_push( $this->modules, $className );

          $node = $this->findNode($this->structure, 'Courses');
          echo 'Parent = ' . $parent . '<br>';
          Util::printArray( $node, "Node" );


          $tree = new Tree();
          $treeStruct = $tree->dirtree( "src/courses", "");

          Util::printArray( $treeStruct, 'Tree struct' );
//          array_push( $node, $className );

//          $this->findNode($this->structure, $parent) = $this->stripClassNameFromFilePath( $filePath, true );

          $this->modulesAssoc[ $className ] = $filePath;
//          $_SESSION[ $parent ] = $className;
        }
      }
    }

    private function findNode( array $array, $nodeName )
    {
      if(count($array) > 0) {
        if (array_key_exists($nodeName, $array)) {
          return $array[$nodeName];
        }
        else {
          foreach ($array as $child) {
            $this->findNode($child, $nodeName);
          }
        }
      }
    }

    private function printArrays()
    {
      foreach ( $this->modulesAssoc as $key => $value ) {

      }

      Util::printArray($this->courses, 'courses');
      Util::printArray($this->topics, 'topics');
      Util::printArray($this->modules, 'modules');
      Util::printArray($this->modulesAssoc, 'modulesAssoc');

      Util::printArray($this->coursesPath, 'coursesPath');
      Util::printArray($this->topicsPath, 'topicsPath');
      Util::printArray($this->modulesPath, 'modulesPath');

      Util::printArray($this->structure, 'Structure');


//      $this->buildPage( $this->modules[0] );
    }

    private function stripClassNameFromFilePath( $filePath, $ext = false )
    {
      // Break the filePath into an array on the '/'
      $filePathArray = explode(
          '/',
          $filePath
      );

      // Get the last element from the filePath array ( the filename )
      $filename = $filePathArray[ count($filePathArray) - 1 ];

      // If ext bool set, return filename with extension
      if($ext) {
        return $filename;
      }

      if($this->isDebug) {
        echo 'stripClassFromFilePath() | Filename: ' . $filename . '<br>';
      }

      // Break the filename into an array on the '.'
      $classNameArray = explode(
          ".",
          $filename
      );

      // Get the first element from the filename array ( the class name )
      $className = $classNameArray[0];

      if($this->isDebug) {
        echo 'stripClassFromFilePath() | Class: ' . $className . '<br><hr>';
      }

      return $className;

    }
    // Function that gets all the filenames from the pages folder
    // ..instantiates it's class and adds it to an array
    private function fillFilesArray()
    {
      // Get all files inside pages folder
//      $this->path = $path;
//      $this->path = 'src/pages';
      $files = scandir($this->path);

      // If debug flag is set, divert to printing arrays in courses folder
      if($this->isDebug) {
//        $this->testFileArray( $files );
        $this->readFolder( $this->path, $this->directoryLevel );
        $this->readArrays();
        return;
      }

      // Remove . and ..
      $files  = array_diff(scandir($this->path), array('.', '..'));

      foreach($files as $file) {
        array_push($this->files, $file);
      }

      // Instantiate all page classes and store them in array
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

    private function instantiateClass( $pageFilePath ) : Page
    {
      // If there is no $Session set
      if($pageFilePath == '') {


      }

      // Strip the directories off the filename
      $filePathArray = explode(
          '/',
          $pageFilePath
      );

      $filename = $filePathArray[count($filePathArray) - 1];

      if($this->isDebug) {
        echo 'Filename: ' . $filename . '<br>';
      }

      $class = explode(
          ".",
          $filename

      );

      if($this->isDebug) {
        echo 'Class: ' . $class[0] . '<br>';
        echo $this->modulesAssoc[$_SESSION['page']] . '<br>';
        echo 'J\\ClassNotes\\' . $this->stripClassNameFromFilePath($this->modulesAssoc[$_SESSION['page']], true) . '<br>';
      }
      // Instantiate the class with the filePath ( eg.  )as param

      $className = 'J\\ClassNotes\\' . $class[0];

      require_once $this->modulesAssoc[ $_SESSION[ 'page' ] ];
      $newPage = new $className( $this->stripClassNameFromFilePath($this->modulesAssoc[ $_SESSION[ 'page' ]], true ));


      return $newPage;
    }

    public function buildPage(string $pageName = "") : string
    {
      $this->currentPage = $this->instantiateClass($_SESSION[ 'page' ]);

      if($this->isDebug) {
        echo '<h2>Current Page:<br>' . $this->currentPage->getTitle() . '</h2>';
      }

      $this->nav = new Nav( $this->indexFile );
      // Set up the nav
      $this->nav->buildNav($this->modulesAssoc, $this->currentPage);

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