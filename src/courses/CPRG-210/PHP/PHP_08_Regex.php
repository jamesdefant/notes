<?php

namespace J\ClassNotes {

  class PHP_08_Regex extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
RegEx
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
CPRG-210 Regular Expressions
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
          <h2>RegEx</h2>
          <p>Sequence of Pattern or characters</p>
          <p>Used for search, replace, match, etc => string</p>
          <p>Foundation of pattern-matching functionality</p>
          <ul>
          <li></li>
          </ul>
          
          <h2>preg_match()</h2>
          <p><code>preg_match( "/pattern/", "string", [ $matchArray ]);</code></p>
          <p>Case sensitive, Ignoring case -> Add i after pattern</p></p>
          <pre><code>
if(preg_match( "/[^a-z]/", $username, $match )) {
  echo "Username must be all lowercase!";
}          

preg_match_all( "/pattern/", "string", [ $match ]);
  - same as preg_match, but is global
          </code></pre>       
          <hr>
          
          <h2>Metacharacters</h2>
          <table class="table">
            <tr>
              <td>{ }</td>
              <td>Number of Occurences <code>x{2}, x{2,}, x{2,4}</code></td>
            </tr>
            <tr>
              <td>[ ]</td>
              <td>Set of Chars <code>[abcdefg]</code></td>
            </tr>
            <tr>
              <td>[ - ]</td>
              <td>Range of Chars <code>[a-j], [0-9]</code></td>
            </tr>
            <tr>
              <td>( )</td>
              <td>Group Regular Expressions</td>
            </tr>            
            <tr>
              <td>|</td>
              <td>OR</td>
            </tr>           
            <tr>
              <td>\n</td>
              <td>Newline</td>
            </tr>
            <tr>
              <td>\t</td>
              <td>Tab</td>
            </tr>
            <tr>
              <td>\</td>
              <td>Escape</td>
            </tr>
            <tr>
              <td>\d</td>
              <td>Any digit from 0-9 <code>/ab\d/ - /fgh\d/ - /\d\d/</code></td>
            </tr>
            <tr>
              <td>\w</td>
              <td>Any character a-z, A-Z, and 0-9 <code>/\w\s\d/</code></td>
            </tr>
            <tr>
              <td>\s</td>
              <td>Any whitespace character</td>
            </tr>
            <tr>
              <td>\D</td>
              <td>A non-digit character</td>
            </tr>
            <tr>
              <td>\W</td>
              <td>A non-word character</td>
            </tr>
            
            </table>
          <hr>
          
          <h2>Files and Directories</h2>
          <p>Creation, Reading, Uploading, & Editing</p>
          <p>Be careful and make sure you edit the right file</p>
          <p>Be careful to avoid accidental deletion of file content</p>
          <p>FIle Handling: Open, Handle, Close operations</p>
          <table class="table code">
            <thead>
              <tr>
                <th>Function</th>
                <th>Description / Examples</th>
              </tr>
            </thead>
            <tr>
              <td>fopen()</td>
              <td>$fpointer = fopen( "filename", "mode" );</td>
            </tr>
            <tr>
              <td>file()</td>
              <td>$array = file( "filename" ); // reads entire file into array</td>
            </tr>
            <tr>
              <td>fwrite()</td>
              <td>fwrite( $fpointer, "string" );</td>
            </tr>
            <tr>
              <td>fclose()</td>
              <td>fclose( $filepointer ); // close the file </td>
            </tr>
            <tr>
              <td>rename()</td>
              <td>rename( "oldname", "newname" );  // renames a file or directory</td>
            </tr>
            <tr>
              <td>filesize()</td>
              <td>$fsize = filesize( "fname" ); return the file size</td>
            </tr>
            <tr>
              <td>opendir()</td>
              <td>opendir( "path" );  // open a directory handle</td>
            </tr>
            <tr>
              <td>closedir</td>
              <td>closedir( $dirHandle );  // close the directory handle</td>
            </tr>
            <tr>
              <td>is_file()</td>
              <td>is_file( "fname" );  // check if the file is a regular file</td>
            </tr>
            <tr>
              <td>md5()</td>
              <td>md5( "string" );  // calculates the md5 hash of a string</td>
            </tr>
            
          </table>

CONTENT;
    }

  }
}