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
<p>There are many collection types in the <b>Collection Framework</b></p>
<ul>

  <li>
    <code>Collection</code> - interface
    <ul>
      <li>
        <code>List</code> - interface
        <ul>
          <li><code>Vector</code> - class</li>  
          <li><code>ArrayList</code> - class</li>  
          <li><code>LinkedList</code> - class</li>  
        </ul>        
      </li>
      <li>
        <code>Queue</code> - interface
      </li>  
      <li>
        <code>Set</code> - interface        
        <ul>
          <li>
            <code>SortedSet</code> - interface
            <ul>
              <li>
                <code>TreeSet</code> - class
              </li>  
            </ul>          
          </li>  
          <li><code>HashSet</code> - class</li>  
          <li><code>LinkedHashSet</code> - class</li>  
        </ul>        
        
      </li>  
        
    </ul>
  </li>
  
  <li>
    <code>Map</code> - interface
    <ul>
      <li>
        <code>SortedMap</code> - interface
        <ul>
          <li>
            <code>TreeMap</code> - class
          </li>  
        </ul>
      </li>  
      <li><code>HashMap</code> - class</li>
      <li><code>LinkedHashMap</code> - class</li>
      <li><code>HashTable</code> - class</li>
    </ul>
  </li>
  
</ul>


';

      return $returnValue;
    }

  }
}