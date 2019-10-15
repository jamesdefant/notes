<?php

namespace J\ClassNotes {

  class SEC_04_Controls extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Controls
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Broken Controls
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>You must enforce access control - only allow users in who have privileges</p>
<p>Don\'t show diretory listings (.htaccess)</p>
<p>Deny access by default - require full id checking</p>
<p>Enforce record ownership before allowing create/read/update/delete privileges</p>
<p>Always use access control mechanisms at all requests</p>

<h2>Misconfigurations</h2>
<p>Use best practices to combat security misconfiguration vulnerabilities in your</p>
<ul>
  <li>Directory Listings</li>
  <li>Application test scripts</li>
  <li>Application default files</li>
</ul>

<h2>Preventing Application Errors</h2>
<p>Check incoming requests for expected parameters and values for your app</p>
<p>When a parameter is missing, issue a proper error message or use default values</p>
<p>Applications should verify that their input consists of valid characters after decoding</p>
<p>Enforce values within the expected ranges and types</p>
<p>Verify that the data belongs to the set offered to the client</p>
<p>Do not output debugging error messages or exceptions in a production environment</p>

<h2>Cross-Site Scripting (XSS)</h2>
<p>A malicious script is echoed back into HTML returned from a trusted site and runs under trusted context</p>
<p>The following things can happen:</p>
<ul>
  <li>Steal your cookies for the domain that you are browsing</li>
  <li>Completely modify the content of any page that you see on this domain</li>
  <li>Track every action you do in that browser</li>
  <li>Redirect you to a phishing site</li>
  <li>Exploit browser vulnerabilities to take over the machine</li>
</ul>

<p>Positive security model accepts only good object references - block everything except what is allowed</p>
<p>Negative security model blocks all known exploits - though new exploits are discovered every day</p>

<h2>Known Vulnerabilities</h2>
<p>There are a couple of databases with known vulnerabilities</p>
<p><a href="https://cve.mitre.org/" target="_blank">https://cve.mitre.org/</a> </p>
<p><a href="https://nvd.nist.gov/" target="_blank">https://nvd.nist.gov/</a> </p>


<h2>Logging</h2>
<p>It is best to have s proper logging system in place to ensure all suspicious activity is documented</p>
<p>Things to Log:</p>
<ul>
  <li>Login attempts</li>
  <li>Port scanning</li>
  <li>Warnings</li>
  <li>Errors</li>
</ul>
<p><b>Review the logs!</b></p>
';

      return $returnValue;
    }

  }
}