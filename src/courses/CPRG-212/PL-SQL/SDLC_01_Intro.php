<?php

namespace J\ClassNotes {

  class SDLC_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
SDLC
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Software Development Life Cycle
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<h2>Analysis</h2>
<ul>
  <li>Talk to managers, customers, technical staff, users, suppliers</li>
  <li>
    Gather information about report needed, security needed, input forms needed, interfaces needed, calculations needed
    processing speeds expected
  </li>
  <li>
    Ways to gather information
    <ol>
      <li>Interviews</li>
      <li>Surveys</li>
      <li>Document study</li>
      <li>
        Job analysis
        <ul>
          <li>Observe</li>
          <li>Do job yourself</li>
        </ul>
      </li>
    </ol>
  </li>  
</ul>
<hr>

<h2>Design</h2>
<p><b>Major Diagrams</b></p>
<ul>
  <li>ER</li>
  <li>Class</li>
  <li>Chen</li>
  <li>Micheal Jackson</li>
  <li>Flowchart</li>
  <li>Hipo</li>
  <li>Action CHart</li>
  <li>State chart</li>
  <li>Warnier-orr diagrman</li>
</ul>
<hr>

<h2>Implementation</h2>
<ol>
  <li>
    Build
    <ul>
      <li>Top-down (traditional) - start with the GUI</li>
      <li>Bottom-up (object-oriented) - start with the classes</li>
    </ul>
  </li>
  <li>
    Testing
    <ul>
      <li>Unit testing - test each program</li>
      <li>Integration testing - test how the programs fit together</li>
      <li>System testing - test interfaces, security, processsing speeds, etc.</li>
      <li>
        Acceptance testing - testing by the user
        <ul>
          <li>Alpha testing - use fake data</li>
          <li>Beta testing - use real data at <b>one location</b></li>
        </ul>
      </li>
    </ul>
  </li>
  <li>
    Install - options
    <ul>
      <li>Cutover - replace old with new (overnight)</li>
      <li>Parallel - put in new but keep old system for a month (track how much users use the new)</li>
      <li>Phased - install a piece of new system at a time (incremental change)</li>
    </ul>
  </li>
</ol>

<h2>Book on SYSTEMS ANALYSIS</h2>


';

      return $returnValue;
    }

  }
}