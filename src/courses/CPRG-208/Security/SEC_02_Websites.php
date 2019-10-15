<?php

namespace J\ClassNotes {

  class SEC_02_Websites extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Websites
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Website Security
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Client tier</h2>
<p>Same origin policy - A script loaded from one origin cannot get or set properties of a document from a different origin</p>
<p>The term <em>origin</em> is defined using the following values:</p>
<ul>
  <li>Domain name</li>
  <li>Protocol</li>
  <li>Port</li>
</ul>
<p>Scripts can access other frames only from the same origin</p>
<p>Scripts can issue requests to documents from a different origin, butr annot view the corresponding responses</p>

<h2>Middle tier</h2>

<h2>Data tier</h2>

<h2>Injection Flaws</h2>
<p>
  Injection flaws such as SQL, OS, LDAP injection happen when unsanitized data is sent to an interpreter as part of a 
  command or query; sending this data can cause the interpreter to run unauthorized commands as a result of the attacker\'s malicious data
</p>
<h2>SQL Injection</h2>
<p>SQL injection is the most common type of injection</p>
<p>SQL injection is performed by an attacker inserting SQL database commands within a form field or onther parameter</p>
<p>If no sanitization is performed on the field, the commands are passed on the SQL server and executed</p>
<p>With SQL injection, an attacker is able to return and steal tables of information, make changes to records, or eevn delete the entire database</p>
<p>These are implications of SQL injection vulnerabilities:</p>
<ul>
  <li>Information leakage through DB error messages</li>
  <li>Data extracted from your DB</li>
  <li>Attackers can take ccomplete control of your DB</li>
  <li>Execute commands on your system</li>
  <li>Complete system compromise</li>
</ul>

<h2>Form Login</h2>
<p>Inputs must be <b>sanitized</b> otherwise they are vulnerable</p>
<p>Consider the following form:</p>
<form>
  <div>
    Username:
    <input type="text" />
    Password:
    <input type="password" />
  </div>
</form>
<p>They are generally set up as the following SQL:</p>
<pre><code>
query = "SELECT * FROM tUsers 
         WHERE userid= \'" + iUserID + "\' 
         AND password = \'" + iPassword + "\'";
</code></pre>
<p>If the user types in <code>\' or 1=1 --</code> in the Username field, the SQL statement resolves to true and the user is in!</p>

<h2>Protection from SQL Injection</h2>
<p>Ues <b>input validation</b> whenever possible, accept only knows good values, rather than sanitizing</p>
<p><b>Never</b> use dynamic queries</p>
<p>Use parameterized query APIs because these APIs encode the user input and make sure that it doesn\'t break the SQL statements</p>
<p>
  Use <b>stored procedures</b> because they are generally sage from SQL injection<br>
  <b>Note: </b><em>Concatenating arguments or using <code>exec()</code> within a stored procedure can make it vulnerable</em>
</p>
<p>
  Avoid detailed error messages<br>
  <em>The attacker can use the information generated in the error message to construct an attack</em>  
</p>
<p>
  Enforce least privilege<br>
  <em>Make sure connections to the database use the least privilege necessary</em>
</p>
<p>
  Watch out for <b>canonicalization</b><br>
  <em>Decode input before trying to sanitize it</em>
</p>
<p>
  Avoid simple escaping<br>
  <em>Simple escaping (for example, string replace functions) are weak and have been successfully exploited</em>
</p>

<h2>Session Hijacking</h2>
<p>You can embed a javascript script into a search bar that will display the Session ID</p>
<pre><code>
&lt;script>alert(document.cookie);&lt;/script>
</code></pre>
<ul>
  <li>Lock out account after 3 unsuccssful attempts</li>
  <li>Keep a log of failed attempts, but <b>don\'t log the actual password</b></li>
  <li>Provide a generic error message for failed logins</li>
  <li>Do not allow users to use previous passwords</li>
  <li>Passwords should be stored as  ahash or encrypted value with decryption strongly protected</li>
  <li>The entire login transaction should be sent through SSL</li>
  <li>A single mechanism should be provided for users to change their passwords</li>
  <li>Users should have to provide their new and old passwords</li>
  <li>
    Forgotten passwords can be emailed, <b>but</b> users must be <em>reauthenticated</em> to change their email addresses
  </li>
  <li>Make sure Session cookies expire in a timely manner</li>
  <li>
    Use secure coding techniques and modern developer frameworkds to strengthen application authentication and session 
    management
  </li>
  <li>Combine the source IP address of the user with the Session ID</li>
  <li>
    Ensure user <em>reauthentication</em> before allowing users to change their key account details, such as passwords 
    and emails<br>
    <b>Note:</b> Changes to passwords and presonal details are a common first action by hackers upon hijacking a web 
    session
  </li>
  <li>
    Forcing <em>reauthentication</em> terminates the jijacked session, which is s simple coding technique that reduces 
    risk
  </li>
  <li>Terminating sessions after a timed period of user inactivity is another simple coding technique to consider</li>
  <li>Do not use permanent cookies to store session values</li>
  <li>Protect the session ID with SSL so that the value is not stolen over the network</li>
  <li>Generate Session IDs with long, complicated, random numbers that cannot be guessed</li>
  <li>Set Session IDs to expire after a certain period of time and expire after logging out</li>
  <li>Assign a new Session ID when switching to SSL or authenticating</li>
  <li>Replace the Session ID after logging in</li>
</ul>
<h2>Have I Been Pwned?</h2>
<p><a href="https://haveibeenpwned.com/" target="_blank">https://haveibeenpwned.com/</a> </p>



';

      return $returnValue;
    }

  }
}