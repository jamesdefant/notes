<?php

namespace J\ClassNotes {

  class AND_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Intro to Android
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Install <a href="https://developer.android.com/studio" target="_blank">Android Studio</a> </p>

<h2>Directory Structure</h2>
<ul>
  <li>
    <kbd>app</kbd>
    <ul>
      <li>
        <kbd>manifests</kbd>
        <ul><li><code>AndroidManifest.xml</code></li></ul>
      </li>
      <li>
        <kbd>java</kbd>
        <ul>
          <li>
            <kbd>com.example.myapplication</kbd>
            <ul><li><code>MainActivity</code></li></ul>
          </li>
          <li>
            <kbd>com.example.myapplication (androidTest)</kbd>
            <ul><li><code>ExampleInstrumentedTest</code></li></ul>
          </li>
          <li>
            <kbd>com.example.myapplication (test)</kbd>
            <ul><li><code>ExampleUnitTest</code></li></ul>
          </li>
        </ul>
      </li>
      <li><kbd>java (generated)</kbd></li>
      <li>
        <kbd>res</kbd>
        <ul>
          <li><kbd>drawable</kbd></li>
          <li>
            <kbd>layout</kbd>
            <ul><li><code>activity_main.xml</code></li></ul>
          </li>
          <li><kbd>mipmap</kbd></li>
          <li>
            <kbd>values</kbd>
            <ul>
              <li><code>colors.xml</code>  - <em>Define your colors here</em></li>
              <li><code>strings.xml</code>  - <em>Define your strings here</em></li>
              <li><code>styles.xml</code>  - <em>Define your themes here</em></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<h2>manifest.xml</h2>
<p>Manifest is an xml file that tells the studio how to load the app</p>
<ul>
  <li>Persmissions</li>
</ul>

<h2>res Directory</h2>
<p>The <code>res</code> directory holds all the data that you will use in your code</p>
<p>
  Android studio automatically creates a class named <code>R</code> from all the Resources in the <kbd>res</kbd> 
  directory so that all you need to access them is the handle <code>R</code> 
</p>
';

      return $returnValue;
    }

  }
}