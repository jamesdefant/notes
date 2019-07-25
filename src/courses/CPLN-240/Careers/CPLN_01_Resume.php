<?php

namespace J\ClassNotes {

  class CPLN_01_Resume extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Resume
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Resume Design
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Supply only relevant information</p>
<p>Name the file: <code>cv_FirstnameLastname.doc</code></p>

<h2>Cover Letter Template</h2>
    <p><b>Always supply a cover letter</b></p>
    <p>What you have, what you can do, what you know</p>

<div class="resume container">
  <div class="row">
    <div class="col cover-letter">
    
      <div class="row">
      
        <section class="contact-info col-md-7">
          <h3>Contact</h3>
          <h4>Common Name</h4>
          <p>
            Address: 123 Main St - Cowtown, AB<br/>
            Phone: 555-555-5555<br/>
            Email: name@not.school.com
          </p>
        </section>
      </div>
      <hr/>      
      
      <div class="row">

        <section class="contact-info col-md-7">
          <h3>Company Name</h3>
          <p>
            654 4 St SW - Cowtown, AB<br/>
            July 23, 2019
          </p>                
        </section>
        <p>
          Dear (include full name if it is in the job posting ~or~ 
          Supervisor of Corporate Communications (specific job title),
          Hiring Manager (generic))
        </p>
      </div>
      <hr/>
      
      <h3>Objective</h3>
      <ol>
        <li>How we found out & why we want it</li>
        <li>
          Describe why we fit (paragraph - largest part of cover letter)<br/>
          <p>(If the job is a perfect fit, provide a table:)</p>
          <table class="table">
            <tr>
              <th>Your Requirements</th>
              <th>My Skills</th>
            </tr>
            <tr>
              <td>C#</td>
              <td>Microsoft certified</td>
            </tr>
            <tr>
              <td>javaScript - 2 yrs exp</td>
              <td>5 years experience</td>
            </tr>
            <tr>
              <td>Education</td>
              <td>Object-Oriented Software Dev Certificate</td>
            </tr>
          </table>
        </li>
        <li>
          Availability, invite to contact. Thank you
        </li>
      </ol>
      <hr/>
      
      <p class="col-md-3 offset-md-9">Regards<br/>James Defant</p>
    </div>
  </div>
</div>


<h2>Resume Template</h2>
<div class="resume container">
  <div class="row">
    <section class="contact-info col-md-7">
      <h3>Contact</h3>
      <h4>Common Name</h4>
      <p>
        Address: 123 Main St - Cowtown, AB<br/>
        Phone: 555-555-5555<br/>
        Email: name@not.school.com
      </p>
    </section>
  </div>
  <hr/>
  
  <div class="row">
    <section class="profile">
      <h3>Linkedin Profile</h3>
    </section>
  </div>
  <hr/>
  
  <div class="alert alert-danger">
    <p>Do <b><em>not</em></b> include objective</p>
  </div>
  
  <div class="row">
    <section class="skills">
      <h3>Skills</h3>
      <h4>Technical Skills</h4>
      <ul>
        <li>..</li>
        <li>..</li>
        <li>..</li>
      </ul>
      <h4>Soft Skills</h4>
      <ul>
        <li>..</li>
        <li>..</li>
        <li>..</li>
      </ul>      
    </section>    
  </div>
  <hr/>
  
  <div class="row">
    <section class="work-education">
      <h3>Work/Education</h3>
      <p>
        Lead with whichever is more relevent to the job<br/>
        Supply relevent information here
      </p>
      <h4>Main Work Experience</h4>
      <ul>
        <li>
          <h5><b>Job Title</b></h5>
          <table class="table">
            <tr>
              <td>Company</td>
              <td>2010 - 2012</td>
            </tr>
            <tr>
              <td>Responsible for:</td>
              <td></td>
            </tr>   
            <tr>
              <td></td>
              <td>Duties</td>
            </tr>           
            <tr>
              <td></td>
              <td>Duties</td>
            </tr>                  
          </table>
        </li>
        
        <li>
          <h5><b>Job Title</b></h5>
          <table class="table">
            <tr>
              <td>Company</td>
              <td>2005 - 2010</td>
            </tr>
            <tr>
              <td>Responsible for:</td>
              <td></td>
            </tr>   
            <tr>
              <td></td>
              <td>Duties</td>
            </tr>           
            <tr>
              <td></td>
              <td>Duties</td>
            </tr>                  
          </table>
        </li>
        
      </ul>

      <h4>Secondary Work Experience</h4>
      <p><em>Dont include duties</em></p>
      <ul>
        <li>
          <h5><b>Job Title</b></h5>
          <table class="table">
            <tr>
              <td>Company</td>
              <td>2010 - 2012</td>
            </tr>             
          </table>
        </li>
      </ul>
      
      <h4>Projects</h4>
    </section>
  </div>
  <hr/>

  <div class="row">
    <section class="certificates">
      <h3>Certifications</h3>
      <p>Supply relevent information here</p>
      <p>Simplify the certifications</p>
      <ul>
        <li>Object-Oriented Software Development Certificate - <b>SAIT</b>, 2019</li>
      </ul>
    </section>
  </div>
  <hr/>
  
  <div class="alert alert-danger">
    <p>Do <b><em>not</em></b> include references</p>
  </div>
  
  <div class="row">
    <section class="volunteer">
      <h3>Volunteer Experience</h3>
      <p>Keep it short - don\'t show that you have no time</p>
      <ul><li>7/8 bullet points max</li></ul>
    </section>
  </div>
  <hr/>
  
  <div class="alert alert-warning">
    <p>Only include hobbies <b><em>if</em></b> they are relevant</p>
  </div>
  
</div>
<hr/>

<h2>Formatting</h2>
<p>Very important for a consistent look</p>
<ul>
  <li><b>Text</b> - 10/12 pt font</li>
  <li><b>Headings</b> - 12/14 pt font</li>
  <li><b>Font</b> - Arial, Verdana, Calibri</li>
  <li><b><u>Consistent formatting</u></b></li>
  <li><b>Spell-checked</b></li>
  <li><b>1" margins</b></li>
  <li><b>Bold, italics, underline sparingly</b></li>
</ul>
<hr/>

<h2>PAR</h2>

<ul>
  <li>
    <b>P</b> - Problem (Challenge)<br/>
    <p>Summarize the background, challenge, or problem</p>
  </li>
  <li>
    <b>A</b> - Action<br/>
    <p>Explain how you took on the challenge - what action did you take to solve the problem</p>
  </li>
  <li>
    <b>R</b> - Result<br/>
    <p>Show the business impact of your action</p>
  </li>
</ul>
<pre><code>
Build a login system
--------------------

P - To keep it secure

A - create login for a system, analyze system, 
    gather requrements from client, create a schedule,/plan,
    proposal, design, create prototype, test, release
    
R - user acceptance   - 97%
    positive reviews  - 89%
    wonrking bug free -  1% down time      
</code></pre>

';

      return $returnValue;
    }

  }
}