<?php

namespace J\ClassNotes {

  class ADO_05_Nullable extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Nullable
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Nullable Types in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A <strong>NULL</strong> value is better described as a <em>lack</em> of value - an <em>absense</em></p>
<p>In C#, by default, value Types are <strong>not nullable</strong> while reference Types <strong>are Nullable</strong></p>
<p>For example, you can write:</p>
<pre><code>
// This will compile
string myString = null;

// This will not compile
char myChar = null;
</code></pre>
<hr/>

<h2>Nullable</h2>
<p>We can define a value Type to be <strong>nullable</strong> either by using the shorthand <strong>(notice the ?)</strong>:</p>
<pre><code>
// Shorthand way to declare a nullable Type
char? myCHar = null;
</code></pre>
<p>...or you can use the more verbose way to see what is happening behind the scenes:</p>
<pre><code>
// T? is a shorthand for creating a Nullable&lt;T&gt; struct
Nullable&lt;char&gt; myChar = null;
</code></pre>
<hr/>

<h2>Casting</h2>
<p>
  If you need to put the value from a nullable type into a non-nullable type, simply cast it 
  <br/>(as long as the value <strong>isn\'t null</strong>)
</p>
<pre><code>
// Nullable
decimal? myNullableDecimal = 4.0m;

// Non-nullable
decimal myDecimal;

// Cast it 
myDecimal = (decimal)myNullableDecimal;

// or, the safer way
if(myNullableDecimal.HasValue)
{
  myDecimal = (decimal)myNullableDecimal;
}
</code></pre>
<hr/>

<h2>Null-Coalescing Operator</h2>
<p>
  When you are assigning a value to an underlying Type from a nullable Type, you can use the 
  <strong>Null-Coalescing operator</strong> to assign a default value <strong>if the value is null</strong>
</p>
<p>Here\'s an example:</p>
<pre><code>
// Nullable
decimal? myNullableDecimal = 4.0m;
decimal? myOtherNullableDecimal = null;

// Non-nullable
decimal myDecimal;

// Null-coalescing operator (sets the value to 4.0m)
myDecimal = myNullableDecimal ?? 0m;

// ...sets the value to 0m
myDecimal = myOtherNullableDecimal ?? 0m;
</code></pre>
<hr/>

<h2>DBNull</h2>
<p>
  When you <strong>INSERT</strong> or <strong>UPDATE</strong> a value in a database 
  and you want to insert a NULL value, you must use <code>DBNull.Value</code> 
</p>
<pre><code>
string updateQuery = "UPDATE Customer SET " +
                     "DateEnded = @newDateEnded " +
                     "WHERE CustomerID = @oldCustomerID";
</code></pre>
';

      return $returnValue;
    }

  }
}