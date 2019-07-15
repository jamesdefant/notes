<?php

namespace J\ClassNotes {

  class CSII_02_CollectionsPlus extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
More Collections
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More Advanced Collections in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are many collection types in c#:</p>
<b>Index based</b>
<ul>
  <li>Array</li>
  <li>List</li>
</ul>
<b>Prioritized</b>
<ul>
  <li>Queue</li>
  <li>Stack</li>
</ul>
<b>Key-Value Based</b>
<ul>
  <li>SortedList</li>
  <li>Dictionary</li>  
</ul>



';
      $collectionTable = [
  ['List Type', 'Description'],
  ['Array', 'Cannot be modified. Uses a numeric index. Efficient sequential access.'],
  ['List&lt;T&gt;', 'Can be modified. Uses a numeric index. Efficient sequential access - inefficient random access.'],
  ['Queue&lt;T&gt;', 'Uses methods to add/remove items from list. <b>First-In-First-Out</b> approach. Maintains chronological order'],
  ['Stack&lt;T&gt;', 'Uses methods to add/remove items from list. <b>Last-In-First-Out</b> approach. Reversed chronological order'],
  ['SorteDList&lt;TKey, TValue&gt', 'Can be modified. Uses a key to retrieve the value. Ineficient sequential access - efficient random access. <b>Keeps items sorted by key. Has an indexer</b>'],
  ['Dictionary&lt;TKey, TValue&gt', 'Can be modified. Uses a key to retrieve the value. Ineficient sequential access - efficient random access']

];
      $returnValue .= \WriteHTML::getTable($collectionTable);
      $returnValue .= '
<h2>Common Properties</h2>
<p>All these collections <b>implement</b> the <code>ICollection</code> interface which has the following properties:</p>
';
      $returnValue .= \WriteHTML::getTable([
        ['Property', 'Description'],
        ['Count', 'Gets the number of elements in the collection']
      ]);
      $returnValue .= '
<p>The <b>key-value based</b> collections share these properties and methods:</p>
';

      $returnValue .= \WriteHTML::getTable([
        ['Property', 'Description'],
        ['Keys', 'Gets a collection that contains all the keys in the collection'],
        ['Values', 'Gets a collection that contains all the values in the collection'],
        ['Capacity', 'Gets or sete the number of elements that the collection can hold']
      ]);

      return $returnValue;
    }

  }
}