<?php

namespace J\ClassNotes {

  class CSII_07_Deployment extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Deployment
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Deploying a C# Project
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are 3 ways of deploying a C# program:</p>
<ul>
  <li><b>Xcopy</b></li>
  <li><b>ClickOnce</b></li>
  <li><b>Setup program</b></li>
</ul>
<hr/>

<h2>XCopy</h2>
<p>Copy folder directly to the users hard drive.</p>
<p>Works as long as all files required are included in the folder</p>
<p>Is adequate for some simple applications with just a few users</p>
<ol>
  <li>Change <b>Build Type</b> from <b>Debug</b> to <b>Release</b></li>
  <li>
    Under <kbd>Project / Properties</kbd> window, select the <kbd>Debug</kbd> panel
    uncheck <b>Enable native code debugging</b> and <b>Enable SQL Server debugging</b>
  </li>
  <li>Build the solution</li>
  <li>Copy the /bin/Release folder to your destination</li>
</ol>
<h3>Disadvantages</h3>
<ul>
  <li>Manual install / update</li>
  <li>Has to be repeated to introduce updates</li>
  <li>Does not automatically install prerequisite files including the >NET Framework</li>
  <li>Does not deal with dependencies</li>
  <li>Does not provide a standard way to install</li>
</ul>
<hr/>

<h2>ClickOnce</h2>
<p>Users run a setup.exe file from a network server or web page</p>
<p>Creates a shortcut for the app in the start menu</p>
<p>Allows the app to be <b>Uninstalled from the Control Panel</b></p>
<p>Provides a way to automatically check for and install any files needed by the app</p>
<p>Provides a way to automatically distribute updates to the app</p>
<p>Is adequate for many types of applications with multiple users</p>

<h3>Publishing an application</h3>
<p>When you use ClickOnce, you <b>Publish</b> the application</p>
<p>Work from the <b>Publish Page</b> of the <b>Project Properties</b></p>
<p>Publish to file system, to a website on a remote server, or to a directory on an FTP server</p>
<p>When you publish to a web server, <b>the server must have FrontPage Server Extensions installed</b></p>
<p>It is possible to install the application in a different location from one where it is published</p>

<ol>
  <li>Under <kbd>Project / Properties</kbd> window, select the <kbd>Publish</kbd> page:</li>
  <ul>
    <li>Select the <b>Publishing Folder Location</b></li>
    <li>Select whether the app is online only or offline as well</li>
    <li>Define the <b>Application Files</b></li>
    <li>Define the <b>Prerequisites</b></li>
    <li>Define how the app should check/download updates</li>
    <li>Define the <b>Publish Options</b></li>
  </ul>
</ol>
<hr/>

<h2>Setup Program</h2>
<p>Allows users to install the app by running a Windows Setup program</p>
<p>Allows users to specify the installation directory</p>
<p>Can create shortcuts for the application in the Start menu and on the desktop</p>
<p>Allows the app to be uninstalled from the Control Panel</p>
<p>Provides a way to restrict an app from being installed on certain operating systems</p>
<p>Provides a way to automatically check for and install any files needed by the app</p>
<p><b>Can be used to modify the registry</b></p>
<p>Is adequate for all but the most complex applications</p>

';

      return $returnValue;
    }

  }
}