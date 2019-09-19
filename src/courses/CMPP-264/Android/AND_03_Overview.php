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
<p>
  <b>A single, focused thing that the user can do.</b> Typically, it has a <b>layout</b> resource associated with it. 
  Almost all activities interact with the user, so the Activity class 
  takes care of creating a window for you in which you can place your UI with <code>setContentView(View)</code>
</p>
<p>
  Initialize the activity in <code>onCreate(Bundle)</code>. This is where you will usually call 
  <code>setContentView(int)</code> with a layout resource defined in the manifest, and use <code>findViewById(int)</code>
  to retrieve the widgets that you need to interact with programmatically
</p>
<p>
  <code>onPause()</code> is where you deal with the user pausing active interaction with the activity. Any changes made 
  by the user should at this point be committed - usually to the <code>ContentProvider</code> holding the data.
</p>
<p>
  To be of use with <code>Context.startActivity()</code>, all activity classes must hava a corresponding 
  <code>&lt;activity&gt;</code> declaration in their package\'s <code>AndroidManifest.xml</code>
</p>
<hr>

<h2>Manifest</h2>
<p>
  The manifest file is an XML file that contains essential information about how the app interacts with the Android 
  system
</p>
<p><b>All the components of an app must be declared in the manifest</b></p>
<p>It is located at: <code>/manifests</code></p>
<hr>

<h2>Views</h2>
<p>Every visual element that makes up the GUI inherits from the <code>View</code> class including:</p>
<ul>
  <li><code>TextView</code> - display text</li>
  <li><code>EditText</code> - enable the user to enter text</li>
  <li><code>Button</code> - provide interactive behaviour</li>
  <li><code>ScrollView</code> - display scrollable items</li>
  <li><code>ImageView</code> - display images</li>
  <li><code>ConstraintLayout</code> - contain other <code>View</code> elements</li>
</ul>
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