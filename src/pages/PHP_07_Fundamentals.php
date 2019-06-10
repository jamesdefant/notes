<?php

namespace J\ClassNotes {

  class PHP_07_Fundamentals extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Fundamentals
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
CPRG210 Fundamentals
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
          <h2>CPRG210</h2>
          <p>Free, open source, Iterpreted, Server-Side scripting</p>
          <p>Can be embedded in HTML of External File</p>
          <pre><code>&lt;?php   This is some code  ?&gt;</code></pre>
          <h3>Why CPRG210?</h3>
          <ul>
            <li>Easy to learn</li>
            <li>CPRG210 code is hidden</li>
            <li>HTML/CSS/JavaScript limitations</li>
            <li>Need for dynamic generation</li>
            <li>Complex data needs (can connect to several DBs)</li>
          </ul>
          <hr>
          
          <h2>Syntax</h2>
          <pre><code>
&lt;body&gt; 
&lt;?php
  echo 'This will be printed to the body tag';
?&gt;   
&lt;/body&gt;   
          </code></pre>
          <hr>
          
          <h2>Running CPRG210</h2>
          <ol>
            <p>You can run the interpreter by either of two ways:</p>
            <li>At the command line: (ie. <code>c:/xampp/htdocs/website/php index.php</code> )</li>
            <li>Or through a browser: (ie. <code>localhost:8080/website/index.php</code> )</li>
          </ol>
          <hr>
          
          <h2>What do you need?</h2>
          <ol>
            <li>Webserver</li>
            <li>CPRG210</li>
            <li>MySQL</li>
            <li>Text Editor</li>
          </ol>
          
          <h3>Webservers</h3>
          <ul>
            <li>LAMP - Linux, Apache HTTP Server, MySQL, CPRG210</li>
            <li>MAMP - MacOS, Apache, MySQL, CPRG210</li>
            <li>WAMP - Windows, APache, MySQL, CPRG210</li>
            <li>XAMPP - Apache, MariaDB, CPRG210 & Perl Interpreters</li>
          </ul>
          <hr>
          
          <h2>Comments</h2>
          <p>Use // for single line comments</p>
          <p>Use /*  */ for multiline comments</p>
          <hr>
          
          <h2>Output statements</h2>
          <p>Basic statements: echo() and print() - Almost the same</p>
          <p>Both can display/output data</p>
          <p>Difference: print() returns 1 and echo has no return</p>
          <p>Difference: print() takes </p>
          <hr>
          
          <h2>Escape Sequences/Characters</h2>
          <p>Used for escaping special characters in a string</p>
          <hr>
          
          <h2>Variables</h2>
          <p>Memory location holding a value that can be changed</p>
          <p>In CPRG210, no declaration</p>
          <p>Standard data types: integer, float, string, boolean</p>
          <p>Name starts with $ then a letter or _ then alpha or numeric characters, Case sensitive, <strong>no spaces</strong>, descriptive</p>
          <h3>Assignment</h3>
          <pre><code>
$NumberHours  = 45;
$WorkersFirstName = "Jim";        
$counter = $counter + 1;
echo $counter;
          </code></pre>
          
          <hr>
          
          <h2>Variable Interpolation</h2>
          <p>Including variables within string value enclosed by ""</p>
          <p>CPRG210 replaces interpolated variable with it's value</p>
          <p>Double Quotes "" -- do variable interpolation and backslash interpretation (eg. "\")</p>
          <p>Single Quotes '' -- suppress interpolation and interpretation</p>
          <hr>
          
          <h2>Constants</h2>
          <p>Like variables but <strong>cannot be changed</strong> after defined</p>
          <p><strong>No $</strong> before the name and starts with a letter of underscore</p>
          <p><strong>Creation:</strong> <code>define( name, value, case-insensitive)</code></p>
          <p><strong>Optional case-sensitivity:</strong> true / false (default)</p>
          <p>For example:</p>
          <pre><code>
define("GST", 0.05);
define("TAXRATE", 0.15, false);
define("TAXRATE", 0.15, true);
          </code></pre>
          <hr>
          
          <h2>Output Statements: <code>printf()</code></h2>
          <p><em>Display</em> a formatted string: <code>printf(format, arg1, arg2)</code></p>
          <p>Format: specifies the string and variable format</p>
          <pre><code>
$first = "Fred";          
$last = "Smith";
printf("First name is %s, and last name is %s.", $first, $last);
          </code></pre>
          <table class="table">
            <tr>
              <td>%s</td>
              <td>String (%10s - field width of 10)</td>
            </tr>
            <tr>
              <td>%d</td>
              <td>Signed decimal number (-ve, 0, +ve)</td>
            </tr>
            <tr>
              <td>%u</td>
              <td>Unsigned decimal value ( >= 0 )</td>
            </tr>
            <tr>
              <td>%f</td>
              <td>Floating point number (% - 7.2f left justified, field width of 7, 2 decimal places) (Right justification is the default)</td>
            </tr>
          </table>
          <hr>
          
          <h2>Output Statements: <code>sprintf()</code></h2>
          <p><em>Return</em> a formatted string: <code>sprintf( format, arg1, ag2 )</code></p>
          <hr>
CONTENT;
    }

  }
}