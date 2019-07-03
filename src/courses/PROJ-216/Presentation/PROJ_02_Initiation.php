<?php

namespace J\ClassNotes {

  class PROJ_02_Initiation extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Initiation
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Project Initiation
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Starting Up</h2>
<ul>
  <li>Business Case</li>
  <li>Feasability Study</li>
  <li>Terms of Reference</li>
  <li>Team Job Descriptions</li>
</ul>

<h2>Project Definiition</h2>
<ul>
  <li>Defining the project - G. Horine, "Absolute Beginner's Guide to Project Management", 3<super>rd</super> edition, page 47</li>
  <li>Project Defniition Document ( aka Project CHarter )</li>
  <li>Required Elements</li>
  <li>Optional ELements</li>

</ul>

<h2>Project Execution</h2>
<ul>
  <li>Build Deliverables</li>
  <li>Monitor and Control</li>
  <ul>
    <li>Time</li>
    <li>Cost</li>
    <li>Change</li>
    <li>Risk</li>
    <li>Procurement</li>
    <li>Communications</li>
    <li>Acceptance</li>
  </ul>
</ul>
<hr>

<h2>Project Closure</h2>
<ul>
  <li>Project Closure Report</li>
  <li>Acceptance by the customer</li>
  <li>Review project completion - lessons learned</li>

</ul>
<hr>

<h2>The Request For Proposal (RPF)</h2>
<ul>
  <li>Produced after current system is understood and requirements have been gathered</li>
  <li>Sent to vendors</li>
  <li>Describes situation, expectations, problem to be solved, details of what the vendor is expected to provide</li>
  <li>Sets guidelines for proposal structure</li>
  <li>Vendor prepares a proposal foloowing guidelines in RFP</li>
</ul>

<h3>Proposal Matrix</h3>
<table class="table">
<thead>
  <tr>
    <th></th>
    <th>Feature 1</th>
    <th>Feature 2</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th>Vendor 1</th>
    <td>2</td>
    <td>9</td>
  </tr>
  <tr>
    <th>Vendor 2</th>
    <td>4</td>
    <td>7</td>
  </tr>
</tbody>
</table>

<h3>Importance Matrix</h3>
<table class="table">

<tbody>
  <tr>
    <th>Feature 1</th>
    <td>4</td>
  </tr>
  <tr>
    <th>Feature 2</th>
    <td>9</td>
  </tr>
</tbody>
</table>
<p><strong>Vendor</strong> - feature score x feature importance = total score</p>
<p><strong>Vendor 1</strong> - 2 x 4 + 9 x 9 = <strong>89</strong></p>
<p><strong>Vendor 2</strong> - 4 x 4 + 7 x 9 = <strong>79</strong></p>
<hr>

<h2>The Proposal</h2>
<p>Response to an RFP</p>
<p>Must follow the RFP guidelines for format - Makes evaluation of proposals easier if they are consistent in format</p>
<p>May be written asa speculative proposal witout an RFP</p>
<p>Internet search "IT project Proposal"</p>
<ul>
  <li>Writing tips</li>
  <li>Sample templates</li>
  <li>... take with a grain of salt, customize</li>
</ul>
<p>Project Name, identification codes, date, etc.</p>
<p>Executive overview</p>
<p>Start and finish dates</p>
<p>Goals / Objectives</p>
<p>Scope</p>
<p>Cost estimates</p>
<p>Business justification ( your sales pitch - why they shouold give the project to you )</p>
<p>Information about your company</p>
<p>Team members - biography, or resume</p>
<hr>

<h2>Project Definition</h2>
<h3>Required Elements</h3>
<p><strong>Purpose</strong> - why? (organizational objective, problem bing solved, priority level)</p>
<p><strong>Goals and Objectives</strong></p>
<p><strong>Success Criteria</strong></p>
<p><strong>Project Context</strong> - relation to the organization, relation to other projects</p>
<p><strong>Scope Specification</strong> - defines boundaries</p>
<p><strong>Out-Of_Scope Specifications</strong></p>
<p><strong>Assumptions</strong></p>
<p><strong>Constraints</strong> - any business event, scehdule, budget, resource, technology constraints</p>
<p><strong>Risks</strong> - any uncertain event or condition (risk) that, if occurs, could have a negative effect on the project</p>
<p><strong>Stakeholders</strong> - all individuals, business unites and organizations involved in the project, their roles, and mutual relationships</p>
<ul>
  <li>All stakeholders must be identified</li>
  <li>All major stakeholders must approve the Project Definition document</li>
</ul>
<p><strong>Recommeded Project Approach</strong> - recommended approach to getting the work done and why it was selected over an other options (key strategies, methodologies and technologies to be used)</p>
<h3>Optional Elements</h3>
<p><strong>Alternative Project Approaches</strong> - lists alternatives that were considere</p>
<p><strong>Organizational Change Issues</strong> - p[lanning for the change impact (customers, business processes, poersonel)</p>
<p><strong>Policies and Standards</strong></p>
<p><strong>Preliminary Cost, Schedule, and Resource Estimates</strong></p>
<p><strong>Supporting DOcuments</strong></p>
<hr>

<h2>7 Key Questions</h2>
<ol>
  <li>Why are we doing this?</li>
  <li>What organizational level goals does this project support?</li>
  <li>How does this project fit with other projects that are going on?</li>
  <li>What is the expected benefit from this project?</li>
  <li>Who is impacted, and who must be involved?</li>
  <li>How will we know when we are done or if the project was successful?</li>
</ol>
<hr>

<h2>Visual Communication</h2>
<p>Project Overview Map</p>
<p>Project Organization Chart</p>
<p>Work Breakdown Structure</p>
<hr>

<h2>Changes to Project Definition</h2>
<p>It's a living document</p>
<p>Any changes must be approved by the same set of original stakeholders</p>

<h2>Project Planning</h2>
<p><strong>Purpose</strong>: to develop a plan that enables the project to be executed and controlled</p>
<h3>The Project Plan</h3>
<p>Blueprint for the project</p>
<p>Starts to take form early in the project</p>
<p>Is updated and revised throughout the project</p>
<p>Initial Project Plan defines:</p>
<ul>
  <li>Goals</li>
  <ul>
    <li>General objectives</li>
    <li>Vision for the project</li>
    <li>"Where we want to go"</li>
  </ul>
  <li>Objectives</li>
  <ul>
    <li>Specific, Measurable, Achievable, Realistic, Time-Bound</li>
    <li>"How we will get where we want to go"</li>
  </ul>
</ul>
<hr>

<h2>Initial Project Plan</h2>
<p>Assumptions - Must be documented to avoid problems later</p>
<p>Contingency plans</p>
<ul>
  <li>One for each assumption</li>
  <li>Plan for possible problems - probability and impact</li>
</ul>
<p>Scope - based on all of the above</p>
<p>Define Phases, Milestones and End Products</p>
<p>Define the Tasks</p>
<p>Establish the Task Relationships</p>
<p>Assign Resources and Costs</p>
<p>Establish the Initial Plan as Your Project <strong>Baseline</strong></p>




CONTENT;
    }

  }
}