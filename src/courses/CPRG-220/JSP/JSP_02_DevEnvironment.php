<?php

namespace J\ClassNotes {

  class JSP_02_DevEnvironment extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Dev Environment
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Setup the Development Environment
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>You need a proper environment setup to create and run servlets</p>
<p>We\'ll develop using <a href="https://www.eclipse.org/downloads/" target="_blank">Eclipse IDE</a> </p>
<p>Once you have it installed, we\'ll need to set up a <b>Server</b></p>

<h2>Server Installation</h2>
<p>Open the <b>Preferences</b> by navigating to <kbd>Window</kbd> => <kbd>Preferences</kbd></p>
<ol>
  <li>Navigate to <kbd>Server</kbd> => <kbd>Runtime Environments</kbd> and click <kbd>Add..</kbd></li>
  <li>Select <b>Red Hat JBoss Middleware</b> from the list, choose <kbd>Install JBoss</kbd> option and click <kbd>Next ></kbd></li>
  <li>You will be prompted to <b>accept the EULA and restart</b></li>
  <li>
    Once Eclipse restarts, navigate back to<br>
    <kbd>Window</kbd> => <kbd>Preferences</kbd> => <kbd>Server</kbd> => <kbd>Runtime Environments</kbd><br>
    and select<br>
    <kbd>JBoss Community</kbd> => <kbd>WildFly 11.0 Runtime</kbd><br>
    Make sure the <b>Create a new local server</b> checkbox is selected and click <kbd>Next ></kbd>
  </li>
  <li>
    Click the link <b>Download and install runtime...</b>
    <ol>
      <li>Select the server (Wildfly 11.0.0 Final) and click <kbd>Next ></kbd></li>
      <li>Accept the EULA and click <kbd>Next ></kbd></li>
      <li>
        Accept or change the <b>Install folder</b> and click <kbd>Finish</kbd><br>
        <em><b>WildFly 11.0</b> will download and install</em>
      </li>
    </ol>
  </li>
  <li>
    Add a <b>JDK</b> by selecting the <b>Alternate JRE</b> radio button<br>
    and click <kbd>Installed JREs...</kbd>
    <ol>
      <li>The <b>Installed JREs</b> dialog will open - click the <kbd>Add...</kbd> button</li>
      <li>Select <kbd>Standard VM</kbd> and click <kbd>Next ></kbd></li>
      <li>
        The <b>JRE Definition</b> dialog will open
        <ol>
          <li>
            Click the <b>JRE home:</b> => <kbd>Directory...</kbd> button and navigate to 
            the <b>JDK</b> you want to use - in our case:<br>
            <code>c:\Program Files\Java\JDK-10.0.2</code>
          </li>
          <li>Click <kbd>Finish</kbd></li>
        </ol>
      </li>
      <li>Select the <b>JDK</b> from the list and click <kbd>Apply and Close</kbd></li>
    </ol>
  </li>
  <li>Click <kbd>Next ></kbd></li>
  <li>
    The <b>Create a new Server Adapter</b> dialog will open
    <ul>
      <li>the server is <b>Local</b></li>
      <li>it is controlled by the <b>Filesystem and shell operations</b></li>
    </ul>
    Click <kbd>Finish</kbd>
  </li>
  <li>Click <kbd>Apply and Close</kbd> to accept the changes</li>
</ol>

<p>
  Once the server is setup, <b>Double-click</b> the server in the <b>Server</b> panel to bring up it\'s options.<br>
  Under <b>Server Behaviour</b>, select <b>Listen on all interfaces to allow remote web connections</b> otherwise the 
  server won\'t be available to outside connections
</p>
';

      return $returnValue;
    }

  }
}