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
  <div class="card-header">
    <h4 class="card-title">'. $this->title .'</h4>
  </div>
  <div class="card-body">
    <img class="img-fluid" src="'. $this->imageSrc .'" />
  </div>
  ';

    if($this->caption != '') {
    $returnValue .= '    
  <div class="card-footer">'. $this->caption .'</div>';
  }

    $returnValue .= '  
</div>

';

    return $returnValue;
  }
}