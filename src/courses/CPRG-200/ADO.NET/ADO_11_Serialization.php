<?php

namespace J\ClassNotes {

  class ADO_11_Serialization extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Serialization
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Serialization in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are two read/write classes in C#:</p>
<ul>
  <li><code>StreamReader/Writer</code></li>
  <li><code>BinaryReader/Writer</code></li>
</ul>
<hr/>

<h2>Syntax</h2>
<pre><code>
BinaryWriter binaryOut = new BinaryWriter(new FileStream(path, FileMode.Create, FileAccess.Write));

foreach(Product p in products)
{
  binaryOut.Write(Product.Code);
  binaryOut.Write(Product.Description);
  binaryOut.Write(Product.Price);
}

binaryOut.Close();
</code></pre>


<h2>....</h2>

<h2>Data to XML</h2>
<pre><code>
// myDataSet is the dataset

try
{
  // Writes the XML file
  myDataSet.WriteXml("MyData.xml");
  
  // Writes the schema
  myDataSet.WriteXmlSchema("MyData.xsd");
  
  MessageBox.Show("Data written successfully");

}
catch(Exception ex)
{
  MessageBox.Show("Error while writing XML: " + ex.Message, ex.GetType());
}
</code></pre>

';

      return $returnValue;
    }

  }
}