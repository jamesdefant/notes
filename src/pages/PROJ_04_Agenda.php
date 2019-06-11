<?php

namespace J\ClassNotes {

  class PROJ_04_Agenda extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Agenda
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Scheduling the Project
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Scheduling</h2>
<p>Break the project down</p>
<ul>
  <li>Phases</li>
  <li>Sub-Phases</li>
  <li>Tasks</li>
  <li>Milestones</li>
  <ul>
    <li>Can have deliverables</li>
    <li>Zero time duration</li>  
  </ul>
</ul>
<p>Phase, sub-phase, task hierarchy is called the <strong>Work Breakdown Structure ( WBS )</strong></p>
<p>Gantt chart</p>
<ul>
  <li>Plots timeline using bars</li>
  <li>Most commonloy used chart</li>
</ul>
<hr>
<h2>Use MS Project</h2>
<h3>Gantt Chart</h3>
<ol>
  <li>Assign a name to the task</li>
  <li>Either set the Task Mode to "Auto Scheduled" or assign a start/end and duration time to the task</li>
  <li>You can nest tasks within another task by selecting child tasks and indenting them</li>
  <li>Define flow by assigning an item's predessesor ( the row number of the item that comes before it )</li>
</ol>
<h3>Resource sheet</h3>
<p><em>Define what your fixed costs are ( labour, supplies, etc )</em></p>
<ul>
  <li>Add a resource under "Resource Name"</li>
  <li>Define the type ( Work, Material, Cost )</li>
  <li>Define the rate of pay / cost</li>
</ul>
<h3>Assign resources</h3>
<ul>
  <li>For each task that needs resources assigned, Add the approipriate resource under "Resource Names"</li>
  <li>
    If there is a scheduling conflict, right-click the "Info" icon and choose either 
    <strong>Reschedule to an available date</strong> or <strong>Ignore Problems for this task</strong>
  </li>
</ul>

<hr>

<h2>eg. Build an Android App</h2>
<ol>
  <li>Analyze the market</li>
  <ol>
    <li>Conduct feasability study</li>
    <li>Create marketing plan</li>
    <li>Do comparative analysis</li>
  </ol>
  <li>Gather user requirements</li>
  <ol>
    <li>Conduct interviews with potential users</li>
    <ol>
      <li>Identify main tasks users will perform</li>
      <li>Prepare questions</li>
      <li>Interview users</li>
    </ol>
    <li>Collect information about similar applications and about how they are used</li>
  </ol>
  <li>Design the app</li>
  
  <li>Do the testing</li>
  
  <li>Take it to market</li>

</ol>
<hr>

<h2>Critical Path Method - CPM</h2>
<ol>
  <li>Determine Early Start / End times for all tasks</li>
  <li>Determine Late Start / End times for all tasks</li>
  <li>Determine Total Float of each task ( Late Finish - Early Finish )</li>
  <li>Determine Free Float of each taks ( Early Start of Successor - Early End )</li>
  <li>Longest path <em>is</em> the Critical Path</li>
</ol>
<hr>

<h2>Predessesor-Successor Relationships</h2>
  <p>A => B</p>
<ol>
  <li>End-to-Start</li>
  <p><em>We can start B after A has ended</em></p>
  <li>Start-to-Start</li>
  <p><em>B can only start after B has started</em></p>
  <li>Start-to-End</li>
  <p><em>B can finish only after A has started</em></p>
  <li>End-to-End</li>
  <p><em>B can finish only after A has finished</em></p>
</ol>

<h2>End-to-Start</h2>
<p><strong>Lag time</strong> is the amount of time that must pass after finishing A before you are able to start B</p>
<p><strong>Lead time</strong> is the amount of time that B can be started before A finishes</p>
<hr>

<h2>Constraints</h2>
<ul>
  <li>Start no later than...</li>
  <li>Finish no later than...</li>
  <li>Must start on...</li>
  <li>Must finish on...</li>
</ul>
<hr>

<h2>Costs</h2>
<ul>
  <li>Kinds of costs</li>
  <li>Estimating</li>
  <ul>
    <li>Who should do it?</li>
    <li>Fixed price vs. hourly rates</li>
  </ul>
  <li>Tracking completino status and actual vs. estimates</li>
  <ul><li>Slippage</li></ul>
</ul>
<hr>

<h2>Estimating Task Duration</h2>
<ul>
  <li>Mathematical method ( PERT weighted average )</li>
  <ul>
    <li>Determine optimistic time for task, most likely time, pessimistic time</li>
    <li>Sample formula:</li>
    <ul>
      <li><strong>Estimate = ( optimistic + ( 4 x most likely ) + pessimistic ) / 6</strong></li>
    </ul>
  </ul>
  <li>History</li>
  <li>Experience</li>
</ul>
<p>For example build a webpage:</p>
<table class="table">
  <tr>
    <th>Optimistic time</th>
    <td>1 day</td>
  </tr>
  <tr>
    <th>Most likely time</th>
    <td>2 days</td>
  </tr>
  <tr>
    <th>Pessimistic time</th>
    <td>7 days</td>
  </tr>
</table>
<p><strong>Estimate = ( 1 + ( 4 x 2 ) + 7 ) / 6</strong></p>
<p><strong>Estimate = 2.66 days</strong></p>

CONTENT;
    }

  }
}