<?php

namespace J\ClassNotes {

  class SEC_05_AppScan extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
AppScan
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
IBM AppScan
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $knowForTest = [
        ["PAGES", "WHAT TO KNOW"],
        ["1-18", "Grouping of Results"],
        ["1-19", "Tab Purposes"],
        ["2-11", "License Types"],
        ["3-18", "Manual vs Automatic Exposure"],
        ["4-5", "Scan Types"],
        ["4-5", "Incomplete Result Reasons"],
        ["5-34", "Re-Scan Types"],
        ["8-12", "JavaScript Types"],
        ["8-16", "Flash Vulnerabilities"],
        ["8-17", "Where Unsupported Flash Movies Can Be Seen"],
        ["9-5", "Metric Groups For Vulnerability Scoring"],
        ["9-8", "Differences Between Exceptions and Exclusions"],
        ["13-5", "Vulnerabilities of Web Services"],
        ["15-18", "Reasons For Communication Errors"]
      ];

      $returnValue = '
<h2>WASC Classification</h2>
<ol>
  <li>Authentication</li>
  <li>Authorization</li>
  <li>Client Attack</li>
  <li>Command Execution</li>
  <li>Information Disclosure About System</li>
  <li>Logical Attack (Denial Of Service)</li>
</ol>

<h2>PAROS</h2>
<p><b>SCAN</b> - Intrusive</p>
<p><b>PROXY</b> - Not Intrusive</p>
<p>Other non-intrusive:</p>
<ul>
  <li>Tamper</li>
  <li>Force Browse</li>
  <li>Directory</li>
  <li>Validate</li>
</ul>

<h2>HTML5 Elements</h2>
<p><b>article</b> - Unrelated (independent) content</p>
<p><b>section</b> - Related content</p>
<p><b>aside</b> - Supplementary content</p>

<h2>GlassBox Tests</h2>
<p>GlassBox tests can detect the following:</p>
<ul>
  <li>Command Execution</li>
  <li>Files Included</li>
  <li>Connection Strings</li>
  <li>MX Injection</li>
  <li>XPATH Injection</li>
  <li>LDAP Injection</li>
  <li>Sink Calls (Class Library)</li>
</ul>

<h2>Report Output Types</h2>
<p>You may output reports in the following formats:</p>
<ul>
  <li><code>.PDF</code></li>
  <li><code>.XML</code></li>
  <li><code>.HTML</code></li>
  <li><code>.TXT</code></li>
  <li><code>.RTF</code></li>
</ul>

<h2>HTTPS Certifications</h2>
<p>Only the following certifications are allowed:</p>
<ul>
  <li><b>PFX</b></li>
  <li><b>PEM</b></li>
</ul>

<h2>Default Configuration</h2>

<h4>Values</h4>
<ul>
  <li><b>CLICK DEPTH</b> = 20</li>
  <li><b>REDUNDANT PATH</b> = 5</li>
  <li><b>PAGE LIMIT</b> = 500</li>
  <li><b>CLICK DEPTH</b> = 20</li>
</ul>

<h4>States</h4>
<ul>
  <li><b>OPEN</b> (issue)</li>
  <li><b>NOISE</b></li>
</ul>

<h4>Results Grouped By</h4>
<ol>
  <li><b>VULNERABILITIES</b> - (Type of test)</li>
  <li><b>WEB PAGES</b></li>
  <li><b>PARAMETERS</b></li>
</ol>

<h4>Flash Defaults</h4>
<ul>
  <li><b>DEPTH LIMIT</b> = 20</li>
  <li><b>CLICK LIMIT</b> = 500</li>
  <li><b>SCREEN LIMIT</b> = 200</li>
</ul>


<h2>Notes</h2>
<p>
  <b>To reduce false positives: ?</b><br>
  <ul><li>Use a custom error page</li></ul>
</p>
<p>
  <b>To fix communication errors to website: ?</b><br>
  <ul>
    <li>Increase timeout allowed</li>
    <li>Reduce # of threads (tests)</li>
  </ul>
</p>
<p>
  <b>Can see communication errors in: ?</b>
  <ul>
    <li>Traffic Log</li>
    <li>System Log</li>
    <li>Scan Log</li>
  </ul>
</p>
<p>
  <b>Noise</b> - Never a Problem<br>
  <b>Non-Vulnerable</b> - Problem but not on your website
</p>

<h2>Test - Must Know</h2>
' . \WriteHTML::getTable($knowForTest) . '

<h2>Definitions</h2>
<ul>
  <li><b>Federation</b> - Central ID Management</li>
  <li><b>IAM</b> - ID Access Management</li>
  <li><b>UTM</b> - Unified Threat Management</li>
  <li><b>DLP</b> - Data Loss Prevention</li>
  <li><b>MSS</b> - Managed Security Services</li>
  <li><b>ISS</b> - Internet Security Services</li>
  <li><b>XSS</b> - Cross-Site Script (Phishing Attack)</li>
  <li><b>HASM</b> - Hosted Application Security Management</li>
  <li><b>VMS</b> - Vulnerability Management Services</li>
  <li><b>IDS</b> - Intrusion Detection System</li>
  <li><b>IPS</b> - Intrusion Prevention System</li>
  <li><b>SSO</b> - Single Sign-On</li>
  <li><b>CWE</b> - Common Weakness Evaluation</li>
</ul>


';

      return $returnValue;
    }

  }
}