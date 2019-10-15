<?php

namespace J\ClassNotes {

  class SEC_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Intro to Security
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $testingTechniques = [
        ["", "Dynamic Analysis", "Static Analysis"],
        ["<b>Scan input</b>", "Live web application", "Source code"],
        ["<b>Assessment techniques</b>", "Tampering with HTTP messages", "Taint analysis & pattern matching"],
        ["<b>Results & output</b>", "Results are presented as HTTP messages (exploit requests)", "Results are presented by line of code"]
      ];

      $returnValue = '
<h2>Intro</h2>
<ul>
  <li>
    <h4>Gartner group</h4>
    <p>In a decade, companies will deal with <b>30 times</b> more information</p>
  </li>
  <li>
    <h4>McKinsey Group</h4>
    <p>Investors are willing to <b>pay 28% more</b> for stocks if company data is secure</p>
  </li>
  <li>
    <h4>Aberdeen Group</h4>
    <p><b>40%</b> of companies now employ a CSO (Chief Security Officer)</p>
  </li>
</ul>
<p>
  <a href="https://www.nomoreransom.org/" target="_blank">https://www.nomoreransom.org/</a> is a site that offers tools
  to deal with ransomware 
</p>
<p>Web applications are the number one target of hackers</p>
<p>
  <b>AppScan</b> is a desktop solution that automates application security testing for IT security, auditors, and 
  penetration testers
</p>
<p>
  Certified Information Security Manager - get certified @<br>
  <a href="https://www.isaca.org/Certification/CISM-Certified-Information-Security-Manager/Pages/default.aspx" 
    target="_blank">https://www.isaca.org/Certification/CISM-Certified-Information-Security-Manager/Pages/default.aspx</a>
</p>

<h2>OWASP</h2>
<p>
  <a href="https://www.owasp.org/index.php/Main_Page" target="_blank">https://www.owasp.org/index.php/Main_Page</a>
  is a website thta freely produces guidance on application security risks 
</p>
<p>OWASP maintains a list of top 10 critical application security risks</p>
<p>Using the list is considered industry <b>best practice</b> </p>

<h2>WASC</h2>
<p>The <b>Web Application Security Consortium</b> develops, asopts, and advocates standards for web application security</p>

<h2>Intrusion Detection vs Intrusion Prevention</h2>

<h2>Types of Security Testing</h2>
<ul>
  <li>
    Network / Infrastructure Testing
    <ul><li>Network Penetration test</li></ul>
  </li>
  <li>
    Application Security Testing
    <ul>
      <li>Vulnerability assesment using <b>AppScan</b></li>
      <li>Application penetration test</li>
      <li>Partial / Component security test</li>
      <li>Tests used as part of the purchasing process</li>
    </ul>
  </li>
</ul>

<ul>
  <li>
    Black Box testing - <b>Dynamic Application Security Testing (DAST)</b>
    <ul><li>No information is provided about the target</li></ul>
  </li>
  <li>
    White Box testing - <b>Static Application Security Testing (SAST)</b>
    <ul>
      <li>Information about the target is provided to assist the test</li>
      <li>Includes logon details and, in some cases, code</li>
      <li>Traditionally used if fucntions and unit test cycles</li>
    </ul>
  </li>
</ul>
' . \WriteHTML::getTable($testingTechniques) . '

<h2>Attack & Penetration Tests</h2>
<p>
  An attacker can use a variety of techniques to exploit the web application. The following list shows some of the
  most common attacks 
</p>
<ul>
  <li><b>Parameter tempering:</b> Modifying parameters that form part of the URL or hidden HTML form tags</li>
  <li><b>Forced Parameter:</b> Tampering with debug and test flags within the passed code to change the nature of the application</li>
  <li><b>Cookie Poisoning:</b> Modifying cookies in order to gain unauthorized access</li>
  <li><b>Cross-site scripting:</b> Injecting a script into unsanitized input fields, which can lead to phishing attacks</li>
  <li><b>SQL injection:</b> Passing SQL code into unsanitized input fields</li>
  <li><b>Brute-force attack:</b> Cycling through a predefined list of logins</li>
  <li><b>Buffer Overflow:</b> Sending too much data into a buffer, causing an overflow - might execute the "extra" data</li>
  <li><b>Direct access browsing:</b> Browsing directly to directories on the server, bypassing any authentication</li>
  <li><b>Directory traversal:</b> Traversing up the web server directory structure in order to gain access to the web root</li>
  <li><b>Form manipulation:</b> Exploiting credentials that are passed in plain text within the HTTP POST request</li>
</ul>

       
<p>Altoro Mutual is a mock website that IBM setup to test attacks</p>
<p>
  The source is available on GitHub @<br>
  <a href="https://github.com/tapansirol/AltoroMutual" target="_blank">https://github.com/tapansirol/AltoroMutual</a>
</p>          
';

      return $returnValue;
    }

  }
}