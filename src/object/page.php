<?php

namespace J\ClassNotes {

  class Page
  {
    protected $filename;
    protected $title;
    protected $mainHeading;
    protected $content;


    function __construct( $filename )
    {
      $this->filename = $filename;
    }


    /**
     * @return mixed
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
      return $this->title;
    }

    /**
     * @return string
     */
    public function getMainHeading(): string
    {
      return $this->mainHeading;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
      return $this->content;
    }
  }
}