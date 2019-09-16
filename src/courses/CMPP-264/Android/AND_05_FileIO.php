<?php

namespace J\ClassNotes {

  class AND_05_FileIO extends Page
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
File IO in Android
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Use buffers to connect input and output streams to efficiently write to disk - <b>don\'t forget to flush the buffer!</b></p>
<p><code>System.in</code> returns an <code>inputStream</code> object</p>
<p><em>An example of getting input from the keyboard:</em></p>
<pre><code>
InputStream is = System.in;
InputStreamReader isr = new InputStreamReader(is);
BufferedReader br = new BufferedReader(isr);
String str = br.readLine();
</code></pre>
<p>Use a file object so that you can verify before writing to it:</p>
<pre><code>
File myFile = new File("c:\\temp");
if (myFile.isDirectory()) {
  System.out.println("This is a directory");
}
</code></pre>

';

      return $returnValue;
    }

  }
}