<?php

namespace J\ClassNotes {

  class PHP_03_Arrays extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Arrays
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
PHP Arrays
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Array Intro</h2>
<p>Special variable: Can store multiple values in a single variable</p>
<p>Array: ELements & Index (0 to count - 1)</p>
<code><pre>
$names = array( "Dave", "John", "Jim" );        
// Index is automatically assigned

$names[0] = "Dave"; // Index is assigned manually
$names[1] = "John"; // Index or offset
$names[2] = "Jim";

$car = array( "GMC", 2018, "Envoy" );   // Different data types
</pre></code>
<p><code>print_r()</code> is a special print function that prints in a human readable form</p>
<p>Surrounding <code>print_r()</code> with <code>&lt;pre&gt;</code> tags makes it even more legible</p>
<hr>

<h2>Associative Arrays / Hash Tables</h2>
<p>Alphanumeric keys is used instead of numeric index</p>  
<p>Keys <strong>MUST</strong> be unique</p>
<code><pre>
$airports = array( "YYC"=>"Calgary", "YEG"=>"Edmonton" );     
echo '$airports[ "YYC" ]';  // Key is case sensitive   
print_r( $airports );
</pre></code>

<h3>Functions: Accessing and manipulating arrays</h3>
<p><code>count( $array )</code> - returns the length of the array</p>

</div>
CONTENT;

      return $returnValue;
    }

  }
}