<?php

namespace J\ClassNotes {

  class CPLN_HW_Jobs extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Job Postings
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Career Skills Assignment<br>
<small>James Defant</small>
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {

      $helcim = [
        ["Experience with PHP, Java, C# or Python", "Have 5 years in PHP/C#<br>Recently studied Java", "Python",
            "Python courses offered on <a href='http://www.udemy.com' target='_blank'>Udemy.com</a>"],
        ["Experience with JavaScript", "Intermediate knowledge", "",""],
        ["Experience with GIT", "Have used GIT for 6 months", "Better use of the Command Line Interface",
            "<a href='https://try.github.io/' target='_blank'>Learn more about the CLI</a>"],
        ["Experience with MySQL or other SQL", "Intermediate knowledge", "",""],
        ["Experience with Vue.js, Angular or React", "", "No experience with any JS frameworks",
            "<a href='https://www.youtube.com/watch?v=4deVCNJq3qc' target='_blank'>Vue.js videos</a><br>
             <a href='https://thinkster.io/tutorials/learn-angular-2' target='_blank'>Angular tutorials</a><br>
             <a href='https://reactjs.org/tutorial/tutorial.html' target='_blank'>React tutorials</a>"],
        ["Experience with Linux", "Basic knowledge of Linux", "Better understanding of the Linux way of doing things",
            "Setup a Linux server at home<br>
              Courses offered at <a href='https://training.linuxfoundation.org/' target='_blank'>The Linux Foundation</a>"]
      ];

      $cisco = [
        ["Ruby on Rails or equivalent", "", "No experience with Ruby",
            "<a href='https://www.youtube.com/watch?v=wbZ6yrVxScM' target='_blank'>FreeCodeCamp\'s video tutorial</a>"],
        ["HTML/CSS/Javascript", "5 years experience", "", ""],
        ["Understanding of Unix systems", "12 years in OSX/MacOS", "", ""],
        ["SQL", "Intermediate knowledge", "", ""],
        ["Data structures and algorithms", "5 years programming experience", "Cursory knowledge of design patterns",
            "<a href='https://www.amazon.ca/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612/ref=asc_df_0201633612/?tag=googleshopc0c-20&linkCode=df0&hvadid=292982483438&hvpos=1o1&hvnetw=g&hvrand=9330694506669265304&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9001331&hvtargid=pla-395340045790&psc=1' target='_blank'>
                The 'Bible' of design patterns</a>"]
      ];

      $zyris = [
        ["Minimum 1 year work experience as a developer", "", "Have not yet worked as a dev", "Must get another job first"],
        ["Understanding of logical processes to solve complex problems",
            "Have run my own business<br>Maintain and troubleshoot complicated machinery",
            "Software problems are unique", "Need more experience - <em>especially in an enterprise setting</em>"],
        ["Knowledge of Adobe Suite<br>Photoshop/Illustrator", "Have used these products for 10+ years", "", ""],
        ["Clear written and verbal communication skills<br>Ability to request clarification",
            "Have dealt with the public for 25 years running my own repair shop", "", ""],
        ["Self directed<br>Good time management", "I prefer to work at my own pace - I always deliver", "", ""],
        ["Portfolio of previous work", "Have a number of projects", "Projects are not centrally located",
            "Build a website to showcase my efforts"]
      ];

      $returnValue = '
<h2>Helcim Inc</h2>
<h5>Junior Developer</h5>
<p>
  <a href="https://ca.indeed.com/viewjob?cmp=Helcim-Inc&t=Junior+Developer&jk=ec6d09c62a31258e&q=junior+developer&vjs=3"
  target="_blank">
    Posting on Indeed.com    
  </a> 
</p>
'. $this->getMatrixTable($helcim) .'
<hr>

<h2>Cisco Careers</h2>
<h5>Junior Software Developer</h5>
<p>
  <a href="https://ca.indeed.com/viewjob?jk=f17e690b2e90d90f&tk=1dm2ocvlbf1p5800&from=serp&vjs=3"
  target="_blank">
    Posting on Indeed.com    
  </a> 
</p>
'. $this->getMatrixTable($cisco) .'
<hr>

<h2>Zyris Software</h2>
<h5>Junior Software Developer</h5>
<p>
  <a href="https://ca.indeed.com/viewjob?jk=61eae7e70dbdedda&tk=1dm2p529df1p5801&from=serp&vjs=3"
  target="_blank">
    Posting on Indeed.com    
  </a> 
</p>
'. $this->getMatrixTable($zyris) .'
<hr>

<h2>Job search Plans</h2>
<p>
  Apply to 15 jobs on Indeed.com by Oct 31<br>
  Have 3 interviews from these postings
</p>
<p>
  Identify all the companies in Calgary who are hiring developers in IoT by Nov 30<br>
  Canvas them all with resumes and secure 3 interviews
</p>

';

      return $returnValue;
    }

    /*-----------------------------------------------------------------*/
    /* CUSTOM FUNCTIONS */
    private function getMatrixTable(array $data)
    {
      // Headings
      $table = [
          ["Target Job Skills", "My Skills", "Gaps", "Plan to Close Gaps"]
      ];

      // Add data to table
      foreach($data as $row) {
        array_push($table, $row);
      }

      // Output table
      return \WriteHTML::getTable($table);
    }
  }
}