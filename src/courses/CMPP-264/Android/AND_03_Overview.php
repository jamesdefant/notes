<?php

namespace J\ClassNotes {

  class AND_03_Overview extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Overview
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Overview of the Android Ecosystem
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '

<h2>Activity</h2>
<p></p>
<hr>

<h2>Create an icon</h2>
<p>You can create either a bitmapped icon set or a vector bassed icon set</p>
<ol>
  <li>
    Navigate to <kbd>File</kbd> => <kbd>New</kbd>
    <ul>either
      <li>
        => <kbd>Image Asset</kbd> - Create a bitmapped icon set
        <ul>
          <li>Load a picture</li>
        </ul>
      </li>
      <li> => <kbd>Vector Asset</kbd> - Create a vector bassed icon set</li>
    </ul>
  </li>
  
</ol>

<h2>MainActivity</h2>
<pre><code>
package com.jamesdefant.day7exercise;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }
}
</code></pre>
<p>This is the generated main hub. It overrides the <code>onCreate()</code> method</p>


';

      return $returnValue;
    }

  }
}