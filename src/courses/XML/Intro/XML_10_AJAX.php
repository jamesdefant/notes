<?php

namespace J\ClassNotes {

  class XML_10_AJAX extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
AJAX
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Asynchronous JavaScript and XML
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro</h2>
<p>With AJAX you can:</p>
<ul>
  <li>Update a web page without reloading the page</li>
  <li>Request data from the server <strong>AFTER</strong> the page has loaded</li>
  <li>Receive data from the server <strong>AFTER</strong> the page has loaded</li>
  <li>Send data to the server in the <strong>BACKGROUND</strong></li>
</ul>
<p>Used by: Google MAps, Gmail, Youtube, Facebook</p>
<hr>

<h2>How AJAX works</h2>
<h3>BROWSER</h3>
<ol>
  <li>An event occurs...</li>
  <li>Create an XMLHttpRequest object</li>
  <li>Send HttpRequest</li>
</ol>
<h3>SERVER</h3>
<ol>
  <li>Process HTTPRequest</li>
  <li>Create a response and send data back to the browser</li>
</ol>
<h3>BROWSER</h3>
<ol>
  <li>Process the returned data using JavaScript</li>
  <li>Update page content</li>
</ol>
<hr>

<h2>Parsing a .txt Document</h2>
<pre><code>
&lt;script&gt;

  // Instantiate a new XMLHttpRequest object
  var xhttp = new XMLHttpRequest();
  
  // AJAX event handler
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState==4 && xhttp.status==200){
      
      // Get the JSON form tthe server and parse it into custs
      var custs = JSON.parse(xhttp.responseText);
      
      // Call a function to output the data
      outputCustomer(custs);
    }
  }
  
    // Here's the AJAX open and send calls/functions
    // Get ->http Get method
    //customers.txt -> file on the server we're getting data from' 
    // true -> do we want the call to be asynchronous or not?
    xhttp.open("GET", "data/XML_10_AJAX_customers.txt", true);
    xhttp.send();
    
    // funciotn to output customers
    function outputCustomer(custArray){
      
      console.log(custArray);
      
      // var for my output
      var output ='';
      
      // Loop through the array and set the output
      for(customer of custArray) {
        output += "<p>Name: <strong>" + customer.Name + "</strong><br/>" + "City: " + customer.City + "<br/>" + "Country: " + customer.Country + "</p>";
      }    
      
      document.getElementById("customers").innerHTML = output;
    }
    
&lt;/script&gt;
</code></pre>

<div class="demo shadow">
  <h3>CUSTOMERS</h3>
  <hr>
  <p id="customers"></p>
</div>

<script>
  // Instantiate a new XMLHttpRequest object
  var xhttp = new XMLHttpRequest();
  
  // AJAX event handler
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState==4 && xhttp.status==200){
      
      // Get the JSON form tthe server and parse it into custs
      var custs = JSON.parse(xhttp.responseText);
      
      // Call a function to output the data
      outputCustomer(custs);
    }
  }
  
  // Here's the AJAX open and send calls/functions
  // Get ->http Get method
  //customers.txt -> file on the server we're getting data from' 
  // true -> do we want the call to be asynchronous or not?
  xhttp.open("GET", "data/XML_10_AJAX_customers.txt", true);
  xhttp.send();
  
  // funciotn to output customers
  function outputCustomer(custArray){
    
    console.log(custArray);
    
    // var for my output
    var output ='';
    
    // Loop through the array and set the output
    for(customer of custArray) {
      output += "<p>Name: <strong>" + customer.Name + "</strong><br/>" + "City: " + customer.City + "<br/>" + "Country: " + customer.Country + "</p>";
    }    
    
    document.getElementById("customers").innerHTML = output;
  }
  
</script>

CONTENT;

      return $returnValue;
    }

  }
}