<?php

namespace J\ClassNotes {

  class PHP_11_Forms extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Forms
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
CPRG210 Forms
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
          <h2>Forms</h2>
          <p>Popular way to Gather Data from Users</p>
          <p>Form data are saved into 3 associative arrays</p>
          <p><code>$_GET, $_POST, $_Request</code></p>
          <pre><code>
&lt;form action="getexample.php"&gt;
  Username: &lt;input type="text" name="username" /&gt;
  Password: &lt;input type="password" name="upassword" /&gt;
            &lt;input type="submit" name="submit" /&gt;
&lt;/form&gt;
          
&lt;?php
  echo "GET Content:" . "&lt;br/&gt;";
  print_r( $_GET );
  echo "&lt;br/&gt;" . "POST Content: &lt;br/&gt;";
  print_r( $_POST );
?&gt;          
          
          </code></pre>
          <ul>
            POST Content
            <li><code>Array ([username]=>John David [password]=>mypw1234])</code></li>
          </ul>
          <hr>
          
          <h2>Validation</h2>
          <uL>
            <h3>RULES</h3>
            <li>All data must be validated</li>
            <li>Validate as much as possible on client to minimize traffic</li>
            <li>No control over who might be submitting data to the server and if they validated it</li>
            <li>Problem occurs if form submitted to a new page for validation</li>                  
          </uL>
          <p>It is customary to combine the form display and form processing in one CPRG210 script</p>  
          <p>If form action is missing, page reloads itself</p>
          <p>Need to check if page is loading for first time, or being submitted</p>
          <p><code>isset()</code> - used to determine if submitted</p>
          <p>Need to re-display form with message to user</p>
          <p>Need to carry form data from one submit to next until valid</p>
          <hr>
          
          <h2>Submitting the form</h2>
          <pre><code>
// Check to see if the POST superglobal is set
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  foreach($_POST as $key=>$value) {
    
    echo 'Key = ' . $key;
    echo 'Value = ' . $value;
    $$key = $value;
    
  }
}          
          
    -- for each input in the form, this loop will dynamically create 
       a new variable with the name of the fields who's value is what was submitted
       
          </code></pre>

CONTENT;
    }

  }
}