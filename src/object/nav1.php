<?php

namespace J\ClassNotes {

  class Nav1
  {
    private $nav;
    private $path;
    private $courseList = [];


    public function __construct( string $path, array $courseList )
    {
      $this->path = $path;
      $this->courseList = $courseList;
    }

    public function getNav(): string
    {
      return $this->nav;
    }

    public function buildNav(array $pages, $currentPage)
    {
//      echo "Nav{} | Current Page = " . $currentPage.tostring();

      $this->nav = '
<nav class="navbar navbar-expand-sm fixed-top bg-theme" id="nav">            
  <div class="container-fluid navbar-header">
    <!--<a class="navbar-brand" href="index.php">Class Notes</a>-->' .

          $this->createDropDown( $this->courseList )  .

      '<button type="button" class="navbar-toggler navbar-right" data-toggle="collapse" data-target="#myNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
        
    <!-- Links -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ml-auto">
  ';

      foreach ($pages as $filename => $title) {

        if($title === $currentPage) {
          $this->nav .= $this->createLink(
              $title,
              $this->path .'.php?page=' . $filename,
              true,
              "text-theme"

          );
        } else {
          $this->nav .= $this->createLink(
              $title,
              $this->path .'.php?page=' . $filename,
              false,
              "text-theme-hi"
          );
        }
      }

      $this->nav .= '
      </ul>
    </div>
  </div>
   
</nav>
  ';
    }

    /*
        public function buildNav(array $pages, $currentPage)
        {
    //      echo "Nav{} | Current Page = " . $currentPage.tostring();
          $this->nav = '
    <nav class="navbar navbar-expand-sm fixed-top bg-info navbar-dark" id="nav">
      <div class="container-fluid navbar-header">

        <a class="navbar-brand" href="index.php">Class Notes</a>' .

            $this->createDropDown( $this->courseList )  .


        '<button type="button" class="navbar-toggler navbar-right" data-toggle="collapse" data-target="#myNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav ml-auto">
      ';

          foreach ($pages as $page) {

            if($page === $currentPage) {
              $this->nav .= $this->createLink(
                  $page->getTitle(),
                  $this->path .'.php?page=' . $page->getFilename(),
                  "",
                  true
              );
            } else {
              $this->nav .= $this->createLink(
                  $page->getTitle(),
                  $this->path .'.php?page=' . $page->getFilename()
              );
            }
          }

          $this->nav .= '
          </ul>
        </div>
      </div>

    </nav>
      ';
        }
    */
    // Dynamically add courses to navbar dropdown
    /*
<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
</div>
     */

    /*
     <nav class="nav nav-pills flex-column position-fixed" >
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="index.php?topic='PHP'">PHP</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?topic='JS'">JS</a>
        </li>

      </ul>
    </nav>
     */
    public function createSideBarTopic( array $topicArray, $currentTopic )
    {
      $returnValue = '
      <ul id="topics" class="nav flex-column position-fixed">
      ';

      foreach ($topicArray as $topic) {

        if($topic === $currentTopic) {
          $returnValue .= $this->createLink(
              $topic,
              $this->path .'.php?topic=' . $topic,
              true,
              "bg-theme"

          );
        } else {
          $returnValue .= $this->createLink(
              $topic,
              $this->path .'.php?topic=' . $topic,
              false,
              "text-theme"
          );
        }
      }

      $returnValue .= '
      </ul>
      ';

      return $returnValue;
    }

    // Build the dropdown to select a different course
    private function createDropDown( array $courseList )
    {
      $reuturnValue = '
<div class="dropdown">
  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
    '. $_SESSION[ 'course' ] .'
  </button>
  <div class="dropdown-menu">
  ';

      foreach ( $courseList as $course ) {
        $reuturnValue .= '<a class="dropdown-item';

        if($course == $_SESSION[ 'course' ]) {
          $reuturnValue .= ' active bg-theme';
        }
        else {
          $reuturnValue .= ' text-theme';
        }

        $reuturnValue .= '" href="index.php?course=' . $course . '"><div class="course-name">' . $course . '</div> - 
<div class="course-desc">'. CourseList::$courseObjects[ $course ][0] . '</div></a>';

      }

      $reuturnValue .= '  
  </div>
</div> 
      ';


      return $reuturnValue;

    }
    // Return an anchor element wrapped in a list-item element
    private function createLink(string $linkName, string $url, $isActive = false, $a_classes = '', $badge = ''): string
    {
      $returnValue = '
          <li class="nav-item">
            <a class="nav-link '. $a_classes ;

          // If this is the current page, attach an 'active' class to the anchor
          if( $isActive ) {
            $returnValue .= ' active';
          }

      $returnValue .= '" href="' . $url . '" id="link_' . $linkName . '">';

      // If there is a value for the badge parameter, create a span element with an icon in it
      if ($badge != '') {
        $returnValue .= '<span class="badge badge-light mr-1 bg-info text-light">
                <span class="lnr ' . $badge . '"></span>
              </span>';
      }
      $returnValue .= $linkName . '
              </a>
          </li>
  ';

      return $returnValue;
    }
  }
}