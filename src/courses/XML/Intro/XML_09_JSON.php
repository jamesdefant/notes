<?php

namespace J\ClassNotes {

  class XML_09_JSON extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JSON
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
JavaScript Object Notation
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Definition</h2>
<ul>
  <li>Used for storing and exchanging data (application communication) over the internet. A light-weight data interchange format</li>
  <li>Language independent</li>
  <li>Self describing</li>
  <li>Hierarcichal</li>
</ul>
<hr>

<h2>JSON vs XML</h2>
<pre><code>
<span class="comment">// JSON</span>

{"employees":[
  {"firstName":"Roger", "lastName":"Rabbit"},
  {"firstName":"Donald", "lastName":"Duck"}
]}

<span class="comment">// XML</span>

&lt;employees&gt;
  &lt;employee&gt;
    &lt;firstName&gt;Roger&lt;/firstName&gt;
    &lt;lastName&gt;Rabbit&lt;/lastName&gt;
  &lt;/employee&gt;
  &lt;employee&gt;
    &lt;firstName&gt;Donald&lt;/firstName&gt;
    &lt;lastName&gt;Duck&lt;/lastName&gt;
  &lt;/employee&gt;
&lt;/employees&gt;
</code></pre>
<p>They both:</p>
<ul>
  <li>Are self describing</li>
  <li>Are hierarchical (nested values)</li>
  <li>Can be be fetched from the XMLHttpRequest</li>
  <li>Can be parsed and used by almost all programming languages</li>
</ul>
<p>JSON is unlike XML in that:</p>
<ul>
  <li>It's shorter</li>
  <li>It's easier to read and write</li>
  <li>It doesn't require an end-tag</li>
  <li>It <strong>CAN</strong> use arrays</li>
  <li><strong>XML needs to be parsed by an XML parser while JSON can be parsed by a standard JavaScript function</strong></li>
</ul>
<hr>

<h2>Syntax</h2>
<ul>
  <li>Data is in name/value pairs</li>
  <ul><li><code>"firstName":"Tony"</code></li></ul>
  <li>Data is seperated by commas</li>
  <ul><li><code>"firstName":"Tony","lastName":"Stark"</code></li></ul>
  <li>Curly braces hold objects</li>
  <ul><li><code>{"firstName":"Tony","lastName":"Stark"}</code></li></ul>
  <li>Square brackets hold arrays</li>
  <ul><li><code>[{"firstName":"Tony","lastName":"Stark"},<br/> {"firstName":"Donald","lastName":"Duck"}]</code></li></ul>

</ul>

<h2>JavaScript Parsing</h2>
<pre><code>

// Out HTML element to plug the data into
&lt;p id="demo"&gt;&lt;/p&gt;

&lt;script&gt;

// name/value pairs are seperated with ':'
// Different properties are seperated with ','
// One object is shown using {}
// You MUST use double quotes around names/values

var jsonText = '{"name":"Jack Johnson","street":"123 Maple street","phone":"234-234-4568"}';
                 
// Use javaScript's JSON object to parse our jsonText
// into something we can use in javascript/html
var jsonObj = JSON.parse(jsonText);

// Output our data
document.getElementById().innerHTML = jsonObj.name + "<br/>" + jsonObj.street + "<br/>" + jsonObj.phone;                 

&lt;/script&gt;

</code></pre>
<div class="demo shadow">
  <h3>DEMO</h3>
  <hr>
  <p id="demo"></p>
</div>

<h2>JavaScript Frameworks</h2>
<ul>
  <li><a href="https://angularjs.org/" target="_blank">AngularJS</a></li>
  <li><a href="https://reactjs.org/" target="_blank">ReactJS</a></li>
  <li><a href="https://nodejs.org/en/" target="_blank">NodeJS</a></li>
</ul>



<script>
var jsonText = '{"name":"Jack Johnson","street":"123 Maple street","phone":"234-234-4568"}';
                 
var jsonObj = JSON.parse(jsonText);

document.getElementById("demo").innerHTML = jsonObj.name + "<br/>" + jsonObj.street + "<br/>" + jsonObj.phone;                 
</script>

CONTENT;

      return $returnValue;
    }

  }
}