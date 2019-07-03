<?php

namespace J\ClassNotes {

  class JS_04_Objects extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Objects
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
JavaScript Objects
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Javascript objects</h2>
<p>A <strong>class</strong> is the blueprint that describes properties and methods of an object.</p>
<p>An <strong>object</strong> is an instance of the class.</p>
<hr>

<h2>Javascript object components</h2>
<p>A <strong>constructor</strong> initializes the object with appropriate values.</p>
<p>A <strong>field</strong> is a variable that holds data.</p>
<p>A <strong>property</strong> is also known as a <strong>getter or setter</strong> and accesses the fields. It is a <strong>method</strong>.</p>
<p>A <strong>method</strong> defines a behaviour that the object can perform.</p>
<hr>

<h2>Create a class</h2>
<pre><code>
function Instructor( fname, lname, noOfCourse, dept ) {
this.firstname = fname;
this.lastname = lname;
this.noOfCourse = noOfCourse;
this.dept = dept;
this.getFullName = function() {
  return this.firstname + " " + this.lastname;
}
}
</code></pre>
<hr>

<h2>Create an object</h2>
<pre><code>
var hamdy = new Instructor( "Hamdy", "Ibrahim", "5", "ITC" );
</code></pre>
<hr>


<h2>Built in objects</h2>
<ul>

  <li><code>forms[]</code> is an Array of form objects</li>
  <li><code>links[]</code> is an Array of hyperlink (a) objects</li>
  <li><code>URL</code> is the property for the current page</li>
  <li><code>clear()</code> is a method for clearing the window</li>
  <li><code>write()</code>is a method for sending output to the browser for display</li>

</ul>
<hr>

<h2>Image Object Instantiation</h2>
<pre><code>
photo1 = new Image();
photo1.src = "photo1.jpg";

photo2 = new image();
photo2.src = "photo2.gif";

for(i = 0; i < 5; i++) {
photo[i] = new image();
photo[i].src = "photo" + i + ".gif";
}
</code></pre>
<hr>

<h2>Regular Expression Object</h2>

<p>Used to describe a Pattern of CHaracters</p>
<p>Useful in Performing Pattern-Matching, Search, & Replace</p>
<p>Basic Syntax: <strong>/Pattern/Modifiers or Attributes</strong></p>
<p><strong>Pattern:</strong> characters you would like to search/replace</p>
<p><strong>Modifiers: (i)</strong> Case-Insensitive, <strong>(g)</strong> Global Matching, & <strong>(m)</strong> Multiline Matching</p>
<p>Brackets [] can be used in Pattern to identify Range of CHaracters</p>
<pre><code>
var myRegExp = /web/ig;
result = myRegExp.exec( "Welcome to Web Development" );
}
</code></pre>
<hr>

CONTENT;

      return $returnValue;
    }

  }
}