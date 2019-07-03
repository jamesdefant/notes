<?php

namespace J\ClassNotes {

  class CS_07_Enumerations extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Enums
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
C# Enumerations
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Declaration</h2>
<p>
  A collection of constant names grouped under one group name 
  where only <strong>one</strong> value is selected at a time.
</p>
<pre><code>
// Declaration
public enum Seasons
{
  Spring,
  Summer,
  Autumn,
  Winter
};

// Usage
Seasons season = Seasons.Spring;
</code></pre>
<p>Enums can exist within a <strong>class</strong> (privately accessible) or within a <strong>namespace</strong> (globally accessible)</p>
<hr>

<h2>Underlying Type</h2>
<p>An enum is implicitly a collection of <string>integers</string> or other numeric value Types</p>
<p>The previous example could be explicitly written as:</p>
<pre><code>
// Declaration
public enum Seasons
{
  Spring = 0,
  Summer = 1,
  Autumn = 2,
  Winter = 3
};
</code></pre>
<p>If only one integer is defined, the following enum values will adopt the sequential int value</p>
<pre><code>
// Declaration
public enum Seasons
{
  Spring = 5,
  Summer,   // inplicitly = 6
  Autumn,   // inplicitly = 7
  Winter    // inplicitly = 8
};
</code></pre>
<p>
  What this <strong>named integer</strong> relationship means 
  is that you can iterate over an enum just as if it was a list or array 
  (an enumerations with an int as it's key)
</p>
<pre><code>
// Length of enum can be found by calling static method Enum.GetNames() : string[] 
int numberOfSeasons = Enum.GetNames(typeof(Seasons)).Length;

// Iterate over the enum
for(Seasons season = Seasons.Spring; season <= Seasons.Winter; seasons++)
{
  Console.WriteLine("The season is: " + season.ToString());
}
</code></pre>
<hr>

<h2>Flags</h2>
<p>
  By setting a <code>[Flags]</code> attribute, 
  you may select more than one enum value at a time. 
  You do, however, need to explicitly define the numeric value, 
  starting at none = 0, the first = 1, and doubling every value thereafter.
</p>
<pre><code>
// A font styling may include any permutation of the following values:
// BOLD
// ITALIC
// UNDERLINE

[Flags]
enum FontSytles
{
  None = 0,
  Bold = 1,
  Italic = 2,
  Underline = 4
}

// This allows us to set a combination of values - ie. Bold AND Underline

// Set Bold AND Underline with Bitwise OR operator
FontStyles style = FontStyles.Bold | FontSytles.Underline;

// Add an additional flag with Bitwise OR operator
style = style | FontStyles.Italic;

// Remove a flag with Bitwise XOR operator
style = style ^ FontStyles.Bold;
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}