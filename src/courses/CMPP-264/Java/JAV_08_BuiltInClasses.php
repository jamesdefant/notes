<?php

namespace J\ClassNotes {

  class JAV_08_BuiltInClasses extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
BuiltIn Classes
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
BuiltIn Classes in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>String</h2>
<p><code>String</code> is a class that allows us to work with, you guessed it, strings</p>
<p>
  In Java, strings are <b>immutable</b> - meaning that they cannot be changed. When you make a change to a string,
  like a concatenation or such, a new object is created and the old one is destroyed.
</p>
<p>There are a number of methods in the <code>String</code> class that allow us to manipulate them:</p>
<ul>
  <li></li>
</ul>

<h3>clear() vs setText("")</h3>
<p>
  Behind the scenes, <code>clear()</code> is less expensize then <code>setText()</code>, so <b>when you need to clear a
  TextField, use <code>clear()</code></b>
</p>

';

      return $returnValue;
    }

  }
}