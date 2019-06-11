<?php

namespace J\ClassNotes {

  class Nav
  {
    private $nav;
    private $path;
/*
    function __construct(array $pages, $currentPage)
    {
      $this->buildNav($pages, $currentPage);
    }
*/
    public function __construct( string $path )
    {
      $this->path = $path;
    }

    public function getNav(): string
    {
      return $this->nav;
    }

    public function buildNav(array $pages, $currentPage)
    {
//      echo "Nav{} | Current Page = " . $currentPage.tostring();
      $this->nav = '
<nav class="navbar navbar-expand-sm fixed-top bg-info navbar-dark" id="nav">            
  <div class="container-fluid navbar-header">
    <a class="navbar-brand" href="index.php">Class Notes</a>
    <button type="button" class="navbar-toggler navbar-right" data-toggle="collapse" data-target="#myNavbar">
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

    // Return an anchor element wrapped in a list-item element
    private function createLink(string $linkName, string $url, string $badge = '', $isActive = false): string
    {
      $returnValue = '
          <li class="nav-item">
            <a class="nav-link';

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