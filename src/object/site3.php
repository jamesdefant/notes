<?php


namespace J\ClassNotes;

  use J\Tree;
  use J\Util;

class Site3
{
  private $path;
  private const PLAIN = "plain";
  private $indexFile;
  private $directoryLevel = 0;

  private $currentPage;

  // nav HTML element
  private $nav;

  private $courses = [];
  private $topics = [];
  private $modules = [];
  private $modulesAssoc = [];

  private $allPages = [];

  private $structure = [];
  private $treeStruct = [];

  private $navbarArray = [];
  private $navbarPageArray = [];
  private $sidebarTopicArray = [];

  private $isDebug;

  // Object constructor
  function __construct($isDebug)
  {
    // Set debug variable from calling code
    $this->isDebug = $isDebug;

    $this->indexFile = 'index';

    $this->path = 'src/courses/';

    $tree = new Tree();
    $this->treeStruct = $tree->dirtree("src/courses", "");
    $_SESSION['tree'] = $this->treeStruct;


    if(isset($_GET[ 'course' ])) {

      $_SESSION[ 'course' ] = $_GET[ 'course' ];
      if (count($this->treeStruct[$_SESSION['course']]) > 0) {
        $_SESSION['topic'] = array_key_first($this->treeStruct[$_SESSION['course']]);
      }
      if (count($this->treeStruct[$_SESSION['course']][$_SESSION['topic']]) > 0) {
        $_SESSION['module'] = $this->stripExtFromFile($this->treeStruct[$_SESSION['course']][$_SESSION['topic']][0]);
      }
    }
    if(isset($_GET[ 'topic' ])) {

      $_SESSION[ 'topic' ] = $_GET[ 'topic' ];
      if ($this->treeStruct[$_SESSION['course']][$_SESSION['topic']] != null &&
          count($this->treeStruct[$_SESSION['course']][$_SESSION['topic']]) > 0) {
        $_SESSION['module'] = $this->stripExtFromFile($this->treeStruct[$_SESSION['course']][$_SESSION['topic']][0]);
      }
    }


    // If SESSION [ page ] not set, default to first in list
    if (!isset($_SESSION['course'])) {
//      echo '<h2>SESSION-page not set</h2>';

      if (count($this->treeStruct) > 0) {
        $_SESSION['course'] = array_key_first($this->treeStruct);
      }
      if (count($this->treeStruct[$_SESSION['course']]) > 0) {
        $_SESSION['topic'] = array_key_first($this->treeStruct[$_SESSION['course']]);
      }
      if (count($this->treeStruct[$_SESSION['course']][$_SESSION['topic']]) > 0) {
        $_SESSION['module'] = $this->stripExtFromFile($this->treeStruct[$_SESSION['course']][$_SESSION['topic']][0]);
      }
    }

    $this->readFolder($this->path, 'Courses', $this->directoryLevel);

//    Util::printArray($this->allPages);
    if($this->isDebug) {
      echo '<span style="color:blue;">count($_SESSION[ \'tree\' ][ $_SESSION[ \'course\' ]][ $_SESSION[ \'topic\' ]])</span>: ' . count($_SESSION['tree'][$_SESSION['course']][$_SESSION['topic']]);
    }

    // Create navbar current Pages array
    if($_SESSION[ 'tree' ][ $_SESSION[ 'course' ]][ $_SESSION[ 'topic' ]] != null) {
      foreach ($_SESSION['tree'][$_SESSION['course']][$_SESSION['topic']] as $page) {
        if ($page != '') {
          $this->navbarPageArray[$this->stripExtFromFile($page)] = $this->navbarArray[$page];
        }
      }
    }

    $tempArray = array_keys($_SESSION[ 'tree' ][$_SESSION[ 'course' ]]);
    sort($tempArray);
    $this->sidebarTopicArray = $tempArray;

    if($this->isDebug) {
      $this->printArrays(false);
//      Util::printSession();
    }
  }

  // Recursively read the folder
  private function readFolder($path, $parent, $depth)
  {
    // Remove . and ..

//        $files = array_diff(scandir($path), array('.', '..'));
    $files = scandir(($path)) ? array_diff(scandir($path), array('.', '..')) : null;

//      $files = scandir($this->path);

    if ($this->isDebug) {
      echo '<h2>Contents of ' . $path . '</h2><pre>';
      print_r($files);
      echo '</pre>';
    }

    if ($files == null) {
      return;
    }

    $count = 0;
    foreach ($files as $file) {

      // Instantiate classes and store their filenames and titles in an array


      $filePath = $path . $file;
      if ($this->isDebug) {
        echo 'readFolder() | filePath = ' . $filePath . '<br>';
      }

      if (is_dir($filePath)) {
        if ($this->isDebug) {
          echo $count++ . ' | Site readFolder() |  ' . $filePath . ' is a directory with a depth of ' . $depth . '<br>';
        }

        switch ($depth) {

          // Is a course
          case 0:

            // Add the directory path to the courses array
            array_push($this->courses, $this->stripClassNameFromFilePath($filePath));

            $this->structure[$parent][$this->stripClassNameFromFilePath($filePath, true)] = array();

            break;

          // Is a Topic
          case 1:

            // Add the directory path to the topics array
            array_push($this->topics, $this->stripClassNameFromFilePath($filePath));

            $this->structure['Courses'][$parent][$this->stripClassNameFromFilePath($filePath, true)] = array();

            break;
        }
        if ($this->isDebug) {
          echo '<br>$filePath = ' . $filePath . '<hr>';
        }

        $this->readFolder($filePath . '/', $this->stripClassNameFromFilePath($filePath, true), $this->directoryLevel + 1);
      } elseif (is_file($filePath)) {
        if ($this->isDebug) {
          echo $count++ . ' | Site readFolder() |  ' . $filePath . ' is a file with a depth of ' . $depth . '<br>';
        }

        // Break the filePath into an array on the '/'
        $array = explode(
            '/',
            $filePath
        );

        $page = $this->stripExtFromFile($array[count($array) - 1]);
        $module = $array[count($array) - 2];
        $course = $array[count($array) - 3];
        $temp = [
            $module,
            $course]
        ;
        $this->allPages[$page] = $temp;

//        array_push($this->allPages, $temp);

        $className = $this->stripClassNameFromFilePath($filePath);

        // Add the file to the modules array

        array_push($this->modules, $className);

        $this->createNavbarArray($filePath);

        $this->modulesAssoc[$className] = $filePath;
      }
    }
  }

  private function printArrays($isPrint)
  {
    if ($isPrint) {
//      Util::printArray($this->courses, 'courses');
//      Util::printArray($this->topics, 'topics');
//      Util::printArray($this->modules, 'modules');
      Util::printArray($this->modulesAssoc, 'modulesAssoc');

//      Util::printArray($this->structure, 'Structure');
//      Util::printArray($this->treeStruct, 'Structure');

      Util::printArray($this->navbarArray, 'Navbar');
      Util::printArray($this->navbarPageArray, 'navbarPageArray');
      Util::printArray($this->sidebarTopicArray, 'sidebarTopicArray');
    }
  }
  // Return a filename without it's extension
  private function stripExtFromFile( $filename ) : string
  {
    $class = explode(
        ".",
        $filename

    );
    return $class[0];
  }

  private function createNavbarArray( $file )
  {
    $newPage = $this->instantiateClass( $file );

    if($this->isDebug) {
      echo '<span style="color:blue;">$newPage->getTitle()</span>: ' . $newPage->getTitle() . '<br>';
    }
    // Add the object to the array
//      $this->navbarArray[ $newPage->getTitle() ] = $newPage->getFilename();
    $this->navbarArray[ $newPage->getFilename() ] = $newPage;

  }

  private function stripClassNameFromFilePath($filePath, $ext = false)
  {
    // Break the filePath into an array on the '/'
    $filePathArray = explode(
        '/',
        $filePath
    );

    // Get the last element from the filePath array ( the filename )
    $filename = $filePathArray[count($filePathArray) - 1];

    // If ext bool set, return filename with extension
    if ($ext) {
      return $filename;
    }

    if ($this->isDebug) {
      echo 'stripClassFromFilePath() | Filename: ' . $filename . '<br>';
    }

    // Break the filename into an array on the '.'
    $classNameArray = explode(
        ".",
        $filename
    );

    // Get the first element from the filename array ( the class name )
    $className = $classNameArray[0];

    if ($this->isDebug) {
      echo 'stripClassFromFilePath() | Class: ' . $className . '<br><hr>';
    }

    return $className;

  }

  // Generic class that instantiates and returns a class from a specified filepath
  private function instantiateClass( $pageFilePath ) : Page
  {
    $isDebug = false;

    if($isDebug) {
      echo '<span style="color:blue;">instantiateClass()</span> | pageFilePath = ' . $pageFilePath . '<br>';
    }
    // Strip the directories off the filename
    $filePathArray = explode(
        '/',
        $pageFilePath
    );

    $filename = $filePathArray[count($filePathArray) - 1];


    $page = $filePathArray[count($filePathArray) - 1];
    $topic = $this->allPages[$this->stripExtFromFile($filename)][0];
    $course = $this->allPages[$this->stripExtFromFile($filename)][1];

    if($isDebug) {
      echo '<span style="color:blue;">Filename</span>: ' . $filename . '<br>';
    }

    $class = explode(
        ".",
        $filename

    );

    if($this->isDebug) {
      echo 'Class: ' . $class[0] . '<br>';
//      echo $this->modulesAssoc[$_SESSION['page']] . '<br>';
//      echo 'J\\ClassNotes\\' . $this->stripClassNameFromFilePath($this->modulesAssoc[$_SESSION['module']], true) . '<br>';
    }
    // Instantiate the class with the filePath ( eg.  )as param
    $className = 'J\\ClassNotes\\' . $class[0];

    if($isDebug) {
      echo '<span style="color:blue;">ClassName</span>: ' . $className . '<br>';
    }
    //     $filepath =  $this->stripClassNameFromFilePath([ $_SESSION[ 'module' ]] );

    require_once $pageFilePath;

    $newPage = new $className( $filename, $topic, $course );


    return $newPage;

  }

  private function printPageToHTML()
  {

  }

  public function buildPage($hasDependencies = true) : string
  {
    if(true) {

      if ($this->isDebug) {
        echo '<span style="color:blue;">$_SESSION[ \'module\' ]</span>: ' . $_SESSION['module'] . '<br>';
      }
      // Retrieve path from modulesAssoc
      $filepath = $this->modulesAssoc[$_SESSION['module']];

      if ($this->isDebug) {
        echo '<span style="color:blue;">$filepath</span>: ' . $filepath . '<br>';
      }
    }
    $this->currentPage = $this->instantiateClass($filepath);

    if($this->isDebug) {
      echo '<h2>Current Page:<br>' . $this->currentPage->getTitle() . '</h2>';
    }

    $this->nav = new Nav1( $this->indexFile, array_keys($_SESSION[ 'tree' ]) );

    // Set up the nav
    $this->nav->buildNav($this->navbarPageArray, $this->currentPage->getTitle());
//    $this->nav->createTopicNav($this->navbarPageArray, $this->currentPage->getTitle());
//    $this->nav->createTopicNav($this->sidebarTopicArray, $_SESSION[ 'topic' ]);

    if($hasDependencies) {
      return $this->getPage();
    } else {
      return $this->getPage($hasDependencies);
    }
  }

  private function getPage($hasDependencies = true) : string
  {
    $cl = new CourseList();

    $returnValue = "";

    $returnValue .= '
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>'. $this->currentPage->getTitle() .'</title>' .

    $this->GetCommonHead() .
        ' 
            
<!-- JavaScript code prettifier - https://github.com/google/code-prettify -->     

<!-- 
  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
-->  

<!-- Perfect Scrollbar -  
  <script src="../../dist/perfect-scrolbar-1.4.0/dist/perfect-scrollbar.js"></script>
  <link rel="stylesheet" href="../../dist/perfect-scrolbar-1.4.0/css/perfect-scrollbar.css">
-->
  ';

    if($hasDependencies) {
          $returnValue .= '
      <!-- Custom css  --> 
        <link rel="stylesheet" href="css/newStyles.css">
        
      <!-- Load common HTML js -->  
        <script src="js/createScrollSpyNav.js" ></script> ';
    }
    else {
      $returnValue .= '
        <!-- Load common HTML js from GitHub as a CDN -->         
        <script src="https://cdn.jsdelivr.net/gh/jamesdefant/Create-ScrollSpy-Nav/createScrollSpyNav.js"></script>
      ';
    }
  
    $returnValue .=
   CourseList::getThemeStyle() .'

  </head>
  
  <body data-spy="scroll" data-target="#myScrollSpy" data-offset="120" onload="loadCommonHTML()"> 
  ';

    if($hasDependencies) {
      $returnValue .= $this->nav->getNav() .
        '<div class="plain-html-link">
          <a href="' . self::PLAIN . '.php?course=' . $this->currentPage->getCourse() .
          '&topic='. $this->currentPage->getTopic() .
          '&page=' . $this->stripExtFromFile($this->currentPage->getFilename()) .'">
            Generate plain HTML
          </a>
        </div> 
      ';
    }
    else {
      $returnValue .= '
        <div class="plain-html-link">
          <a href="index.php?course=' . $this->currentPage->getCourse() .
          '&topic='. $this->currentPage->getTopic() .
          '&page=' . $this->stripExtFromFile($this->currentPage->getFilename()) .'">
            Return to site
          </a>
        </div> 
      ';
    }
    $returnValue .=
        $this->GetMain($hasDependencies).'
    
  </body>  
</html>        
      ';

    return $returnValue;
  }

  private function GetCommonHead()
  {
    return '
  <!-- Bootstrap 4 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
            
<!-- highlight.js - https://highlightjs.org/ -->  
  <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/school-book.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>   
  <script>hljs.initHighlightingOnLoad();</script>         ';
  }
  private function GetMain($hasDependencies) {
    $returnValue = '
    <div class="container-fluid">
      <div class="row">
             
        <div class="col-md-2">';

    if($hasDependencies) {
      $returnValue .= $this->nav->createSideBarTopic($this->sidebarTopicArray, $_SESSION['topic']);
//          $this->nav->createCourseNav( $this->navbarPageArray, $this->currentPage->getTitle() ) .
    }
        $returnValue .=

                '</div>

        <div class="col-lg-8 col-md-7">
          <h1 class="text-center m-3">'. $this->currentPage->getMainHeading() .'</h1><hr>
          <main>
          '. $this->currentPage->getContent() .'
          </main>
        </div>
               
        <div class="col-lg-2 col-md-3" id="scrollSpyNav">         
        </div>
        
      </div>
    </div>
';

    return $returnValue;
  }

}

