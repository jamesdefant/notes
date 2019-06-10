<?php

class BS4_Card
{
  // Path of the image src
  private $imageSrc;

  private $title;
  private $caption;

  /**
   * BS4_Card constructor.
   * @param $imageSrc
   * @param $caption
   */
  public function __construct($imageSrc, $title, $caption)
  {
    $this->imageSrc = $imageSrc;
    $this->title = $title;
    $this->caption = $caption;
  }


  public function getCard() : string
  {
    $returnValue = '
<div class="card">
  <img class="card-img-top img-fluid" src="'. $this->imageSrc .'" />
  <div class="card-body">
    <h4 class="card-title">'. $this->title .'</h4>
  </div>
  <div class="card-footer">'. $this->caption .'</div>
</div>

';

    return $returnValue;
  }
}