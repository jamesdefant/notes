<?php

namespace J\ClassNotes {

  class PROJ_05_TeamsClients extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Teams Clients
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Managing Teams and Clients
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Dealing with Problems</h2>
<h3>Four main causes of wasted project time</h3>
<ul>
  <li>Vague or conflicting project definition and scope</li>
  <li>Lack of clearly articulated expectiations</li>
  <li>Competing (and shifting) priorities</li>
  <li>No precoess established for problem resolution and feedback</li>
</ul>
<hr>

<h2>Project Communication</h2>
<p>Purpose of <strong>Status Reports</strong></p>
<ul>
  <li>Review status</li>
  <li>Compare data</li>
  <li>Check progress on the schedule</li>
  <li>Check resource utilization</li>
  <li>Check budget status</li>
  <li>Watch for any potential problems looming in the future</li>
  <li>Help stakeholders make decisions affecting the project</li>
</ul>
<p>Contents of <strong>Status Reports</strong></p>
<ul>
  <li>From</li>
  <li>To</li>
  <li>Date</li>
  <li>Time period covered</li>
  <li>Potential problems</li>
  <li>Activities during the reporting period</li>
  <li>Activities planned for next reporting period</li>
  <li>Problems / Issues</li>
</ul>
<hr>

<h2>Change Control -- Data Captured</h2>
<ul>
  <li>Change-Request ID</li>
  <li>Change Type - new requirement, enhancement, defect</li>
  <li>Date submitted / Date updated</li>
  <li>Title - One line summary of the proposed change</li>
  <li>Description</li>
  <li>Originator Priority - low, medium, or high</li>
  <li>Team Priority - low, medium, high</li>
  <li>Originator</li>
  <li>Modifier - person responsible for implementing the change</li>
  <li>Verifier - person who is responsible for verifying the change</li>
  <li>Project</li>
  <li>Response / Solutions / Status</li>
</ul>
<hr>

<h2>Problem Reports / Bug Reports</h2>
<p>Forms or software</p>


CONTENT;
    }

  }
}