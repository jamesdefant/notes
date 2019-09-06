<?php

namespace J\ClassNotes {

  class JAV_07_Collections extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Collections
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Collections in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  There are many collection types in the 
  <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/collections/index.html" target="_blank">
    Collection Framework
  </a>
</p>
<ul>

  <li>
    <code>Collection</code> - <b>interface</b>
    <ul>
      <li>
        <code>List</code> - <b>interface</b> - <em>Duplicates allowed</em>
        <ul>
          <li><code>ArrayList</code> - <b>class</b> - <em>resizable array, fast iteration, fast random access</em></li>  
          <li>
            <code>LinkedList</code> - <b>class</b> - <em>items are linked to their next and previous items. 
            Slower iteration than ArrayList but faster insertion and deletion</em>
          </li>  
          <li><code>Vector</code> - <b>class</b> - <em>like an ArrayList, but thread-safe</em></li>  
        </ul>        
      </li>
      <li>
        <code>Queue</code> - <b>interface</b>
      </li>  
      <li>
        <code>Set</code> - <b>interface</b> - <em>No duplicates allowed</em>
        <ul>
          <li>
            <code>SortedSet</code> - <b>interface</b>
            <ul>
              <li>
                <code>TreeSet</code> - <b>class</b> - <em>sorted in ascending order</em>
              </li>  
            </ul>          
          </li>  
          <li><code>HashSet</code> - <b>class</b> - <em>unsorted, unordered Set</em></li>  
          <li>
            <code>LinkedHashSet</code> - <b>class</b> - <em>like a HashSet, but items are linked to their next and 
            previous</em>
          </li>  
        </ul>        
        
      </li>  
        
    </ul>
  </li>
  
  <li>
    <code>Map</code> - <b>interface</b> - <em>Organized in Key/Value pairs</em>
    <ul>
      <li>
        <code>SortedMap</code> - <b>interface</b>
        <ul>
          <li>
            <code>TreeMap</code> - <b>class</b> - <em>sorted Map</em>
          </li>  
        </ul>
      </li>  
      <li><code>HashMap</code> - <b>class</b> - <em>unsorted, unordered Map</em></li>
      <li>
        <code>LinkedHashMap</code> - <b>class</b> - <em>maintains insertion order - slower for insertion/deletion
        but faster iteration</em>
      </li>
      <li>
        <code>Hashtable</code> - <b>class</b> - <em>note the small "t" - thread-safe (synchronized) version of 
        HashMap</em>
      </li>
    </ul>
  </li>
  
</ul>
<hr>

<h2>Declaration</h2>
<p>To decalre a generic collection, use angle brackets - <b>&lt;T&gt;</b> as in:</p>
<p><em>You don\'t need to write the type on the right side of the declaration</em></p>
<pre><code>
ArrayList&lt;String&gt; strings = new ArrayList&lt;&gt;();
</code></pre>


';

      return $returnValue;
    }

  }
}