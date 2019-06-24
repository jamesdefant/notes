<?php

namespace J\ClassNotes {

  class CS_08_File_IO extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
File IO
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
File I/O
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Classification</h2>
<p>Files classified by how it is stored:</p>
<ul>
  <li>Text</li>
  <li>Binary</li>
</ul>
<p>Files classified by how data is accessed:</p>
<ul>
  <li>Sequential</li>
  <li>Random Access - Use database instead</li>
</ul>
<hr>

<h2>System.IO</h2>
<p>Namespace defined to work with files and directories</p>
<p>Instantiate a <code>FileStream</code> object to manipulate (read/write) a file:</p>
<pre><code>
// Define a string to pass to the FileStream constructor
string path = @"c:\WORKSPACE\myFile.txt";

// Create the FileStream object by passing it the path, the mode,
FileStream fs = new FileStream( path, mode, access, share );
</code></pre>
<h3>Members of FileMode enum</h3>
<ul>
  <li>Append</li>
  <li>Create</li>
  <li>CreateNew</li>
  <li>Open</li>
  <li>OpenOrCreate</li>
  <li>Truncate</li>
</ul>
<h3>Members of FileAccess enum</h3>
<ul>
  <li>Read</li>
  <li>ReadWrite</li>
  <li>Write</li>
</ul>
<h3>Members of FileShare enum</h3>
<ul>
  <li>None</li>
  <li>Read</li>
  <li>ReadWrite</li>
  <li>Write</li>
</ul>
<hr>

<h2>Flow</h2>
<p><code>string path</code> => <code>FileStream object</code> => <code>StreamReader object</code></p>
<p><em>or</em></p>
<p>Wrap it in a try block so that if (when) an error occurs, it gets handled</p>
<pre><code>
// Define the path
string path = @"c:\WORKSPACE\myFile.txt";
FileStream fs;
StreamReader sr;
string line;

try
{
  // open the file
  fs = new FileStream(path, FileMode.Open, FileAccess.Read);
  sr = new StreamReader(fs);
  
  // read the file
  while(!sr.EndOfStream)
  {
    line = sr.ReadLine();
    
  }
}
catch(Exception ex)
{
  MeassageBox.Show(ex.Message);
}
finally
{
  if(sr != null) { sr.Close(); }
  if(fs != null) { fs.Close(); }
}
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}