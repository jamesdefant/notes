<?php

namespace J\ClassNotes {

  class PROJ_03_Methodologies extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Methodologies
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Software Development Methodologies
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Software Development Lifecycle</h2>

<p>=> Feasability => Study Current System => Gather Requirements => Select Solution</p>
<p>etc.</p>

<h3>Phases</h3>
<p>Analysis Phases</p>
<ul>
  <li>Feasbility study</li>
  <li>Analysis of the current system</li>
etc.
</ul>
CONTENT;
      /*
<h2>Waterfall Development</h2>
<img src="img/PROJ_216_A/WaterfallDevelopment.png" class="img-fluid" />

<h2>Parallel Development</h2>
<img src="img/PROJ_216_A/ParallelDevelopment.png" class="img-fluid" />

<h2>Rapid Application Development</h2>
<figure>
  <img src="img/PROJ_216_A/RADDevelopment.png" class="img-fluid" />
  <figcaption>Phased Development</figcaption>
</figure>
<h2>Rapid Application Development 2</h2>
<figure>
  <img src="img/PROJ_216_A/RADDevelopment2.png" class="img-fluid" />
  <figcaption>System Prototyping</figcaption>
</figure>

<h2>Rapid Application Development 3</h2>
<figure>
  <img src="img/PROJ_216_A/RADDevelopment3.png" class="img-fluid" />
  <figcaption>Throwaway Prototyping</figcaption>
</figure>
*/
//      $waterfall = new \BS4_Card("img/PROJ_216_A/WaterfallDevelopment.png", "Waterfall Development", "");
//    $returnValue .=

    $returnValue .= <<< 'CONTENT'
    
<h2>AGILE Development</h2>
<p>Encourages frequent inspection and adaptation</p>
<p>Leadership philosophy that encourages team work, self-organization nad accountability</p>
<p>Allows for rapid  delivery of high-quality software</p>
<p>Aligns development with customer needs</p>
<p>Iterations</p>

CONTENT;

      return $returnValue;
    }

  }
}