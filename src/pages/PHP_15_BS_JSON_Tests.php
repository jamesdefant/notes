<?php

namespace J\ClassNotes {

  class PHP_15_BS_JSON_Tests extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
BS-JSON-Testing
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Bootstrap, JSON, and Unit Testing
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<a href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" target="_blank" class="btn btn-outline-info"><h2>Bootstrap</h2></a>
<p>Free, Open-source, Frontend Framework</p>
<p>Faster and easier development</p>
<p>Includes HTML, CSS and JavaScript Based Design Templates (eg. components)</p>
<p>Used to easily create responsive websites</p>

<h3>Why Use Bootstrap?</h3>
<p>Grid system - it allows up to 12 columns that you can asign to your elements</p>
<p>You can create a responsive design by writing classes to your child elements without writing any CSS</p>
<p>Nest the <strong>.col</strong> in a <strong>.row</strong> in a <strong>.container</strong> ( fixed-width ) 
or a <strong>.container-fluid</strong> ( full-width )</p>
<pre><code>
&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    
    &lt;div class="col"&gt;&lt;/div&gt;
    &lt;div class="col"&gt;&lt;/div&gt;
    &lt;div class="col"&gt;&lt;/div&gt;
    
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
<p>These <strong>.col</strong> items will all take up equal space.</p>
<h3>There are additional classes to define the columns explicitly</h3>
<p>Append a column count to the end of the screen-size class (ie. <code>.col-md-6</code> )</p>
<p>It is <strong>crucial</strong> that all the divs counts <strong>add up to 12</strong>, otherwise your divs will wrap unexpectedly</p>
<table class="table">
  <thead>
    <tr>
      <th>Extra Small ( < 576px )</th>
      <th>Small ( >= 576px )</th>
      <th>Medium ( >= 768px )</th>
      <th>Large ( >= 992px )</th>
      <th>Extra Large (>= 1200px)</th>
    </tr>
    <tr>
      <td><code>.col-</code></td>
      <td><code>.col-sm-</code></td>
      <td><code>.col-md-</code></td>
      <td><code>.col-lg-</code></td>
      <td><code>.col-xl-</code></td>
    </tr>

  </thead>

</table>
<p>You can define the element with a <strong>.offset-</strong> class to change the position of the element</p>
<hr>

<h2>JSON: JavaScript Object Notation</h2>
<p>Text-Based Data Interchange format</p>
<p>Used to send data ( as text ) Back and Forth between client and server</p>
<p>Popular notation for defining objects</p>
<p>Written using JavaScript Object Notation</p>
<p>Replace XML and used with AJAX ( Asynchronous JavaScript and XML )</p>

<h3>JSON: Data Types</h3>
<ul>
  <li>string: Sequence of characters wrapped in ""</li>
  <li>number: integer or real</li>
  <li>boolean: true or false</li>
  <li>objects: wrapped in {}</li>
  <li>arrays: Ordered Key/Value paris wrapped in []</li>
  <li>null</li>
</ul>
<p><em>Functions are not a valid JSON object</em></p>
<a href="https://jsonlint.com/">JSON Validator</a>
<pre><code>
{
  // string
  "fname":  "James",
  "lname":  "Defant",  
  
  // number
  "age" : 39,   

  // bool
  "male": true,
  
  // object
  "address": {
      "street": "6036 Bowwater Cres NW",
      "city"  : "Calgary",
      "province": "AB" 
  }
  
  // array
  "skis": [ "Bridge", "Chopstick", "Nunataq", "Code L" ]
  
  // null
  
}


</code></pre>
<p>Use JSON in your JavaScript...</p>
<pre><code>
var person = {
  fname: "James",
  lname: "Defant",
  age: 39,
  address {
    street: "6036 Bowwater Cr NW",
    city: "Calgary",
    province: "AB"
  },
  skis: ["Bridge", "Chopstick"]
}


</code></pre>
<p>Convert JavaScript object -> JSON</p>
<pre><code>
var JSONstring = JSON.stringify( person );

</code></pre>
<p>Convert JSON -> JavaScript object</p>
<pre><code>
person = JSON.parse( JSONstring );

</code></pre>

<pre><code>
var filecount = 1;

var dataRequest = new XMLHttpRequest();

dataRequest.open( 'GET', 'http://localhost:8080/file' + filecount + '.json' );
dataRequest.send();

dataRequest.onload = function() {

  // Get the response data as string
  var myData = dataRequest.responseText
  
  consoloe.log(myData);
  
  // Parse the JSON into a JavaScript object
  var myJSDONData = JSON.parse( myData );
}


</code></pre>

CONTENT;
    }

  }
}