<?php

namespace J\ClassNotes {

  class CSDB_03_ParameterizedQuery extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
ParameterizedQuery
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Parameterized Queries
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  If our primary key is not numeric and incremented, we need a way to navigate through the
  records
</p>
<p>
  After you add a textbox to a Form, click the arrow in hte top-right corner of the Textbox
  and select <kbd>New Query...</kbd>
</p>
<p>Name the query to your liking</p>
<p>Edit the query - add a <strong>WHERE</strong> clause that says:</p>
<code>WHERE ProductCode = @ProductCode</code>
<p>Click <kbd>OK</kbd> and run the program</p>
<p>It has created a <strong>TexxtBox</strong> and a <strong>Button</strong></p>
<p>
  Now you can input the <strong>ProductCode</strong> into the generated textbox, click the ProductCode
  button, and it will bring up the matching record
</p>
<hr/>

<h2>Editing the Query</h2>
<p>
  To change the query:</p>
<ol>
  <li>
    Navigatte to the <strong>Data Sources</strong> panel and <strong>right-click</strong>
    the table you used to genereate the inputs
  </li>
  <li>Select <kbd>Edit DataSet with Designer</kbd></li>
  <li>
    Select the <strong>Query</strong> you just created in the <strong>ProductsTableAdapter</strong>   
  </li>
  <li>
    Navigate to the <strong>Properties</strong> panel and click the elipsis <strong>[...]</strong> in  the 
    <strong>CommandText [...]</strong> which opens the <strong>Query Builder</strong>
  </li>
</ol>   

';

      return $returnValue;
    }

  }
}