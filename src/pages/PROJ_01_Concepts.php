<?php

namespace J\ClassNotes {

  class PROJ_01_Concepts extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Project Mgmt
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Project Management Concepts
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Good Books</h2>
Absolute Beginner's guide to Project Management by Greg Horie

<hr>
<h2>Project Definition</h2>
<ul>
  <li><strong>Project</strong> is a finite endeavour (having specific <strong>start</strong> and <strong>completion</strong> dates) 
  undertaken to cerate a unique product or service which brings about beneficial change or added value</li>
  <li>Contrast with <strong>Process</strong> "Permanent or semi-permanent functional work to repetetively produce the same product or service""</li>
</ul>
<hr>

<h2>Projects vs Processes</h2>
<h3>Similarities</h3>
<ul>
  <li>Planned, executed and controlled</li>
  <li>Performed by people</li>
  <li>Resource constrained</li>
</ul>
<h3>Differences</h3>
<table class="table">
<thead>
<tr>
  <th>Feature</th>
  <th>Projects</th>
  <th>Processes</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Purpose</td>
  <td>Attain objectives and teminate</td>
  <td>Sustain organization</td> 
</tr>
<tr>
  <td>Time</td>
  <td>Temporary, defined start and end</td>
  <td>Ongoing</td> 
</tr>
<tr>
  <td>Outcome</td>
  <td>Unique product, service or result</td>
  <td>Multiple products, services or results</td> 
</tr>
<tr>
  <td>People</td>
  <td>Temporary teams; not aligned with organization's structure</td>
  <td>Functional teams aligned with organization's structure</td> 
</tr>
<tr>
  <td>Authority of manager</td>
  <td>Varies by organization. Minimal line of authority</td>
  <td>Generally formal; direct line of authority</td> 
</tr>
</tbody>
</table>
<hr>

<h2>Project Characteristics</h2>
<ul>
  <li>A <em>set of tasks</em> which may be performed concurrently and/or sequence, to <em>achieve a goal or objective</em></li>
  <li>A distinct <em>start and finish date</em></li>
  <li>A <em>limited set of resources</em> which may be used on more than one project</li>
  <li>Examples of Projects?</li>
</ul>
<hr>

<h2>Project Goals and Objectives</h2>
<h3>Goal</h3>
<ul><li>End result - what are we trying to accomplish</li></ul>
<h3>Objectives</h3>
<ul>
  <li>Steps - how are we going to reach the goal</li>
  <li><strong>S</strong> = Specific</li>
  <li><strong>M</strong> = Measurable</li>
  <li><strong>A</strong> = Achievable ( or Agreed-To )</li>
  <li><strong>R</strong> = Relevant ( or Realistic, Rewarding )</li>
  <li><strong>T</strong> = Time-Bound</li>
</ul>
<p>Maybe the acronym should be SMARRRRT?</p>
<hr>

<h2>Project Management</h2>
<ul>
  <li>"Discipline of planning, orgainizing, and managing resources to bring about the successful completion of specific project goals and objectives"</li>

</ul>
<h3>Determining project success</h3>
<p>Achieves desired objectives (Quality) within given deadlines and budget</p>
<p>Balance between <strong>Scope/Quality, Time</strong> and <strong>Cost</strong></p>
<hr>

<h2>Project Manager Resonsibilities</h2>



CONTENT;
    }

  }
}