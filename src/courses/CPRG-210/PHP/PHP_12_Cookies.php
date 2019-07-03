<?php

namespace J\ClassNotes {

  class PHP_12_Cookies extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Cookies
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Cookies, Sessions, and File Upload
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<h2>Cookies</h2>
<p>A small file that is embedded on a users computer</p>
<p>Used to identify a user and remember his/her preferences</p>
<p>Can be created, Modified, Deleted, and Retrieved by CPRG-210</p>
<p>Cookie Information is saved into $_COOKIE</p>
<p>Cookies feature must be enabled in the browser</p>
<p>Enable cookies because most websites add cookies</p>
<ul><h3><code>setcookie( "name", "value", expire_time );</code></h3>
  <li>Recommended to have setcookie() before HTML Tag</li>
  <li><code>$_COOKIE[ 'name' ]</code></li>
  <li>deleting cookie, set expire_time to a time in the past</li>
</ul>
<hr>

<h2>Sessions</h2>
<p>HTTP is <strong>Stateless</strong> - it does not retain state</p>
<p>Similar to Cookies but saved in Server</p>
<p>Must be before HTML Code - Otherwise too many errors</p>
<h3>Inherent problems with cookies</h3>
<ul>
  <li>User can use different machines</li>
  <li>Can't store data on public machines</li>
  <li>User can block cookies or delete cookies</li>
</ul>
<table class="table">

  <thead>
    <tr>
      <th>Statement</th>
      <th>Function</th>
    </tr>
  </thead>
  <tr>
    <td>session_start()</td>
    <td>Starting / Resuming a Session</td>
  </tr>
  <tr>
    <td>$_SESSION[ 'name' ] = "Aaron";</td>
    <td>Creating Session variables</td>
  </tr>
  <tr>
    <td>unset( $_SESSION[ 'name' ]);</td>
    <td>Deleting Session variables</td>
  </tr>
  <tr>
    <td>session_destroy();</td>
    <td>Remove all global session variables and destroy the session</td>
  </tr>
  
</table>
<hr>

<h2>File Upload</h2>
<p>Web applications may need to upload files to server</p>
<p>For example: Webmail needs to attach files - Dropbox, Google Drive</p>
<p>Make sure CPRG-210 is configured to allow file uploads in <code>php.ini</code> configuration file - <code>file_uploads</code> must be set to <code>on</code></p>
<p>CPRG-210 can receive files via HTML forms <code>&lt;input type="file"&gt;</code></p>
<h3>For the HTML form above:</h3>
<ul>
  <li>Make sure <code>method="post"</code></li>
  <li>Include the following attribute: <code>enctype="multipart/form-data"</code></li>
  <li>It specifies which content-type to use when submitting the form</li>
</ul>

<p>File is transmitted as form data and received into a temporary storage directory</p>
<p>Data about the file is received in <code>$_FILES</code> <strong>- a 2-dimensional associative array</strong></p>
<ul>
  <li>name</li>
  <li>temp_name</li>
  <li>size</li>
  <li>type</li>
  <li>error</li>
</ul>
CONTENT;

    }
  }
}