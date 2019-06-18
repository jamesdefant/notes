<?php

namespace J\ClassNotes {

  class GenericPage extends Page
  {
    protected $title = '';

    protected $mainHeading = '';

    protected $content = '
  
  ';

    function __construct(string $title, string $mainHeading, string $content)
    {
      $this->title = $title;
      $this->mainHeading = $mainHeading;
      $this->content = $content;
    }

  }
}