<?php

namespace J\ClassNotes {

  class Page
  {
    protected $filename;
    protected $filePath;

    protected $topic;
    protected $course;

    protected $title;
    protected $mainHeading;
    protected $content;

/*
    function __construct( $filePath, $filename )
    {
      $this->filePath = $filePath;
      $this->filename = $filename;
    }

*/
    /**
     * Page constructor.
     * @param $filename
     * @param $topic
     * @param $course
     */
    public function __construct($filename, $topic, $course)
    {
      $this->filename = $filename;
      $this->topic = $topic;
      $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @return mixed
     */
    public function getFilePath()
    {
      return $this->filePath;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
      return $this->topic;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
      return $this->course;
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