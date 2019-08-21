<?php

namespace J\ClassNotes {

  class GIT_03_GitHubDesktop extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
GitHub Desktop
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
GitHub Desktop
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  <a href="https://desktop.github.com/" target="_blank">GitHub Desktop</a> is a version control system that 
  harnesses the power of Git and filters out the complexity of working with the command line interface (CLI). 
  It allows an individual to backup their work incrementally and to collaborate easily with others.
</p>
<hr>

<h2>Terminology</h2>
<ul>
  <li><b>Commit</b> - submit the changes you\'ve made to your local repo</li>  
  <li><b>Git</b> - the underlying technology that tracks the changes in your project</li>   
  <li><b>origin</b> - an alias to the remote repo\'s URL</li>
  <li><b>master</b> - the default Branch that is set up</li>
  <li><b>Push</b> - submit what is in your local repo to the remote repo</li>
  <li><b>Pull</b> - retreive the project from the remote repo</li>
  <li><b>Repo</b> - <em>Repository</em> - the project or folder that you\'re having Git track</li>
</ul>
<hr>

<h2>Environment</h2>
<p>It looks like this:</p>
<div class="col-md-4">
  <div class="box box-file"><b>File folder- UnCommitted</b></div>
<!--
  <div class="box box-stage"><b>Staging area</b></div>  
-->  
  <div class="box box-local"><b>Local repo - Committed</b></div>
  <div class="box box-remote"><b>Remote repo - GitHub</b></div>
</div>

<h2>Workflow to set up GitHub Desktop</h2>
<ol>
  <li>Clone/Create/Add a repository (setup the local repo)</li>
  <li>Choose which Branch you\'re using (if you\'re using more than one Branch)</li>
  <li>Write a summary note and Commit to your local repo</li>
  <li>Push your changes to the remote repo</li>
</ol>
<hr>

<p>Once your repo is set up, the main flow is simply <b>Commit</b> and <b>Push</b></p>
<hr>

<h2>Setup the local repo</h2>
<p>
  <b>Navigate either to:</b><br> 
  the <b>MenuBar</b> and choose <kbd>File</kbd><br>
  <b>~or~</b><br>
  directly under the <b>MenuBar</b>, click the <kbd>Current Repository</kbd> and choose <kbd>Add</kbd> 
</p>
<ul>
  <li>
    <kbd>Clone repository</kbd>
    <p>This is the option to choose if you\'d like to clone a remote repo that is already hosted on GitHub</p>
  </li>
  <li>
    <kbd>Create new repository</kbd> / <kbd>New repository</kbd>
    <p>This is the option to choose if you\'d like to initialize a new local repo on your computer</p>
  </li>
  <li>
    <kbd>Add existing repository</kbd> / <kbd>Add local repository</kbd>
    <p>This is the option to choose if you\'ve initialized a local repo, but have not hosted it on GitHub</p>
  </li>
</ul>
<hr>

<h2>Choose your Branch</h2>
<p>Navigate to directly under the <b>MenuBar</b> and click <kbd>Current Branch</kbd></p>
<p>This will display all the Branches that the current repo has. There is by default only one - <b>master</b></p>
<p>If you are working in a group, you\'ll most certainly be using multiple Branches - <b>name them appropriately</b></p>
<hr>

<h2>Perform your first Commit</h2>
<p>Every commit needs a summary note so that the changes that have been Commited are documented</p>
';

      return $returnValue;
    }

  }
}