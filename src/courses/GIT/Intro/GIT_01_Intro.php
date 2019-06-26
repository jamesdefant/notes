<?php

namespace J\ClassNotes {

  class GIT_01_Intro extends Page
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
GIT Intro
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro to Git</h2>
<p>Version control to track a history as you progress in the development of your project</p>
<p>There are 4 Stages to the git environment</p>
<ol>
  <li>The local environment</li>
  <li>The staging area</li>
  <li>The local repo</li>
  <li>The remote repo</li>
</ol>
<hr>

<h2>Commands</h2>
<p><strong>user</strong> - the user that is associated with Git</p>
<p><strong>repo</strong> - is the repository that holds the project</p>
<p><code>git init</code> - Initialize a new repo</p>
<p><code>git clone</code> - clones an existing repo naming the local folder the same as the remote repo</p>
<p><code>git status</code> - displays a message with whether or not anything has been tracked</p>
<p><code>git add *</code> - will add all files and directories <strong>to the staging area</strong></p>
<p><code>git commit -m "Write a commit message here"</code> - commits all the staged files <strong>to the local repo</strong></p>
<p><code>log</code> - displays a message with all the recent changes</p>
<p>
  <code>git stash</code> - if you have made changes that have not been commited, 
  you can <em>stash</em> the changes and change commits (checkout)
</p>
<p><code>git stash pop</code> - will commit the changes that were <em>stashed</em></p>
<p><code>git push</code> - will <em>push</em> the changes that have been commited to the local repo <strong>to the remote repo</strong></p>
<p><code>git diff</code> - displays a report highlighting the differences between the local files and whichever commit you have checked out</p>
<p><code>git pull</code> - will download all the files <strong>from the remote repo</strong></p>
<hr>

<h2>Commit Messages</h2>
<p>Write descriptive messages so that anyone can track where a bug may have appeared</p>
<p>Commit often, and in chunks that make sense together:</p>
<ul>
  <li>Aesthetic changes</li>
  <li>Database access</li>
  <li>etc.</li>
</ul>
<p>
  This makes it easier to track bugs as there is no need to search through aesthetic changes 
  for problems with database access
</p>
<hr>

<h2>.gitignore</h2>
<p>A text file that tells Git which files/directories to ignore</p>
<p>Best practice to ignore any file that is generated from other files</p>
<ul>
  <li>.css generated from .scss</li>
  <li>cache files for displaying thumbnails</li>
  <li>etc.</li>
</ul>
<hr>

<h2>README.md</h2>
<a href="https://help.github.com/en/articles/about-readmes" target="_blank">Link to GitHub's site</a>
<p>Supply a description of your project so that you or others may know what the hell it is (or is supposed to be)</p>
<p>Is displayed very prominently on GitHub's site - just below the list of files</p>
<p>Written in markdown (<code>.md</code>) which allows for a fair bit of flexibility in formatting</p>
<ul>
  <li>How to install</li>
  <li>How to configure</li>
  <li>What the dependencies are</li>
  <li>Status of the project</li>
  <li>Link to license file</li>
</ul>
<hr>

CONTENT;

      return $returnValue;
    }

  }
}