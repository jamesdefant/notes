<?php

namespace J\ClassNotes {

  class CPLN_02_Skills extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Skills
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Developing Career Skills
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $skillsMatrix = [
        ["Target Job Skills", "My Skills", "Gaps", "Plan to Close Gaps"],
        ["Technical Skills", "", "", "Course"],
        ["Soft Skills", "", "", "Mentoring"],
        ["Education", "", "", "Wiki, Reading"],
        ["Years of Experience", "", "", "Video, Podcasts"],
        ["Other?", "", "", "Group"],
        ["", "", "", "Volunteer"],
      ];
      $returnValue = '
<h2>Skills Matrix</h2>
<p>Write 3 job postings</p>
'. \WriteHTML::getTable($skillsMatrix) .'
<hr>

<h2>Job Search Plan</h2>
<p>2 Job Search Activities --> <b>create 1 goal per activity</b></p>
<p>2 goals = job search plan</p>
<p>Each goal should answer:</p>
<ul>
  <li>What, specifically, will you do?</li>
  <li>By when?</li>
  <li>How will you measure success?</li>
</ul>
<hr>

<h2>Sample Goal</h2>
<p>
  Identify <b>25 companies</b> in the financial sector and cold call these by Oct 15, 2019.<br>
  Have <b>30%</b> of these agree to review my resume leading to at least <b>2 job interviews</b> by <b>Nov 1, 2019</b>
</p>

';

      return $returnValue;
    }

  }
}