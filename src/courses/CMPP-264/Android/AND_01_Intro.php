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
      $componentsTable = [
        ["Component", "Description"],
        ["Activites", "They dictate the UI and handle user interaction to the device's screen"],
        ["Services", "They handle background processsing associated with an application"],
        ["Broadcast Receivers", "They handle communication between Android OS and applications"],
        ["Content Providers", "They handle data and database management issues"]
      ];
      $moreComponents = [
        ["Component", "Description"],
        ["Manifest", "Configuration file for the application"],
        ["Resources", "External elements, such as strings, constants and drawable pictures"],
        ["Intents", "Messages wiring components together"],
        ["Layouts", "View hierarchies that control screen format and appearance of the views"],
        ["Views", "UI elements that are drewn on-screen including buttons, list forms, etc"],
        ["Fragments", "Represents a portion of user interface in an Activity"]
      ];
      $returnValue = '
<h2>Intro</h2>
<p>
  Android is an operating system that runs on top of the Linux Kernel. It has been developed to run on tablets and phones
  as well as a number of other devices
</p>
<p>
` The architecture of components that comprise a Android system are:
  <ul>
    <li><b>Linux Kernel</b> - base level access to the system components - drivers, storeage, etc</li>
    <li><b>Libraries / Android Runtime</b> - libraries that provide access to GUI controls, etc</li>
    <li>
      <b>Application Framework</b> - provides services to applications in the form of Java classes - Activity Manager,
      Resource Manager, etc
    </li>
    <li><b>Applications</b> - the apps you install on your device</li>
  </ul>
</p>

<h2>Components</h2>
<p>Components are the essential building blocks of an Android App</p>
<p>They are defined by the application manifest file <code>AndroidManifest.xml</code> that describes each component</p>' .

\WriteHTML::getTable($componentsTable). '
<hr>

<h2>Activities</h2>
<p>
  An activity represents a single screen with a UI. If an application has more than one, one of them needs to be marked
  as the activity that starts with the application 
</p>
<p>An activity is implemented as a subclass of <code>Activity</code></p>
<pre><code>
public class MainActivity extends Activity {
}
</code></pre>
<hr>

<h2>Services</h2>
<p>
  A service is a component that runs in the background to perform long-running operations withouth blocking
  interaction from the user
</p>
<p>A service is implemeted as a subclass of <code>Service</code></p>
<pre><code>
public class MyService extends Service {
}
</code></pre>
<hr>

<h2>Broadcast Receivers</h2>
<p>
  Braodcast Receivers simply respond to braodcast meassages from other applications or from the system. For example,
  apps can also initiate braodcasts to let other applicaitons know that some data has been downloaded to the device
  and is available for them to use, so this braodcast receiver will intercept this communication and will initiate 
  appropriate action 
</p>
<p>
  A Broadcast Receiver is implemeted as a subclass of <code>BroadcasrReceiver</code> class and each message is 
  braodcast as an <code>Intent</code> object
</p>
<pre><code>
public class MyReceiver extends BroadcastReceiver {
  public void OnReceive(context, intent) {
  }
}
</code></pre>
<hr>

<h2>Content Providers</h2>
<p>
  Content Provider components supply data from one app to others on request. Such requests are handled by the mehods 
  of the <code>ContentProvider</code> class. The data may be stored in the file system, the database or somewhere 
  else entirely  
</p>
<p>
  A Content Provider is implemented as a subclass of <code>ContentProvider</code> class and must implement a standard 
  set of APIs that enable other applications to perform transactions
</p>
<pre><code>
public class MyCOntentProvider extends ContentProvider {
  public void onCreate() {
  }
}
</code></pre>
<hr>

<h2>Other Components</h2>
<p>
  There are additional components which are used in the construction of above mentioned entities, their logic, and 
  wiring between them
</p>' .
\WriteHTML::getTable($moreComponents). '

';

      return $returnValue;
    }

  }
}