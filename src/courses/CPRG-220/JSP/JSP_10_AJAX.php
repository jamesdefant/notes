<?php

namespace J\ClassNotes {

  class JSP_10_AJAX extends Page
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
AJAX Interaction
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Asynchronous JavaScript And XML</h2>
<p>Use AJAX to communicate with our API to update a webpage without reloading it</p>

<h2>Documentation</h2>
<ul>
  <li>
    <a href="https://www.w3schools.com/js/js_ajax_intro.asp" target="_blank">
      www.w3schools.com/js/js_ajax_intro.asp
    </a> 
  </li>
    <li>
    <a href="https://www.w3schools.com/js/js_json_intro.asp" target="_blank">
      www.w3schools.com/js/js_json_intro.asp
    </a> 
  </li>
</ul>

<h2>An Example</h2>
<p>This is the basic layout of an AJAX call:</p>
<pre><code>
function getAllAgents() {
	
	console.log("getAgentsData()");	
	
	// Create a request object
	const req = new XMLHttpRequest();
		
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			
			console.log("readystate == 4 && req.status == 200");
			
			let agentsArray = JSON.parse(req.responseText);			
		}	
	};
	req.open("GET", HOST + "/TravelExperts/rs/agent/getallagents");
	req.send();
}
</code></pre>

<p>
  This is a simple way to grab some data and do something with it, but if you simply want to return it to do more, it
  leaves you hanging.
</p>

<h2>jQuery</h2>
<p>JQuery is a JavaScript library that makes common js calls a lot simpler</p>
<p><b>You will need to either download <a href="https://jquery.com/" target="_blank">jQuery</a> and provide a link to it in your code:</b></p>
<pre><code>
&lt;script src="jquery-3.4.1.min.js">&lt;/script>
</code></pre>
<p><b>...or just embed them from the CDN (like Bootstrap does)...</b></p>
<pre><code>
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">&lt;/script>
</code></pre>

<p>A similar AJAX call in JQuery looks like this:</p>
<pre><code>
$.ajax({
  url: HOST + "/TravelExperts/rs/agent/getallagents",
  dataType: "json",
  type: "GET",
  success: function(data) {
    agents = data;
  }
});
</code></pre>
<p>This accomplishes the same thing, though you can wrap it in a function to get it to return a value:</p>
<pre><code>
function getAgentData() {

	let agents;
	
	$.ajax({
		url: HOST + "/TravelExperts/rs/agent/getallagents",
		dataType: "json",
		type: "GET",
		async: false,
		success: function(data) {
			agents = data;
		}
	});
	
	return agents;
}
</code></pre>


';

      return $returnValue;
    }

  }
}