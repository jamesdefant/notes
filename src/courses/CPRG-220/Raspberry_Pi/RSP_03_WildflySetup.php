<?php

namespace J\ClassNotes {

  class RSP_03_WildflySetup extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
WildFly
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Setup WildFly 11.0 on the Pi
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Install Java and WildFly</h2>
<p>
  <a href="https://prabg.wordpress.com/2018/04/07/jboss-wildfly-as-setup-on-raspberry-pi-3/" target="_blank">
    https://prabg.wordpress.com/2018/04/07/jboss-wildfly-as-setup-on-raspberry-pi-3/
  </a> 
</p>
<p>
  <b>You\'ll need</b><br>
  <a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html?printOnly=1" 
    target="_blank">Linux ARM 32 Hard Float ABI
  </a> <b>(32 bit JDK 8)</b><br>
  <b>and</b><br>
  <a href="https://download.jboss.org/wildfly/11.0.0.Final/wildfly-11.0.0.Final.zip" target="_blank">WildFly 11.0</a>
</p>
<p>
  <b>Considering that we\'re installing the server to run with JDK 8 32-bit, you should also develop your REST API 
  with the 32-bit JDK 8</b>
</p>
<ol>
  <li>Copy via FileZila the WildFly 11.0 zip and the ARM jdk 1.8.2 tar.gz to the Pi\'s desktop</li>
  <li>On the Pi, navigate to the Desktop and rename both files to <code>wildfly_11.zip</code> and <code>jdk_1.8.2.tar.gz</code></li>
  <li>
    Extract both files to the <code>/opt</code> directory and check the contents of <code>/opt</code>:
    <pre><code>    
$ sudo unzip ~/Desktop/wildfly_11.zip -d /opt

$ sudo tar -xzvf ~/Desktop/jdk_1.8.2.tar.gz -C /opt

$ cd /opt
$ ls
    </code></pre>
  </li>
  <li>
    Navigate to the <code>/home</code> directory and open <code>.bashrc</code> with <code>gedit</code>...
    <pre><code>
$ cd ~    
$ sudo gedit .bashrc    
    </code></pre>
    ...and add the following code to the end of the file:<br>
    <em>make sure the paths match the directories you just listed</em>
    <pre><code>
export JAVA_HOME=/opt/jdk1.8.0_221
export JBOSS_HOME=/opt/wildfly-11.0.0.Final
export PATH=$JAVA_HOME/bin:$PATH
    </code></pre>
  </li>
  <li>Save and close <code>gedit</code></li>
  <li>
    Run the following command to refresh the <code>PATH</code>
    <pre><code>
$ source ~/.bashrc 
    </code></pre>
  </li>
  <li>
    Test that Java was installed correctly by running the following command:
    <pre><code>
$ java -version    
    </code></pre>
    It should display the following:
    <pre><code>
Java(TM) SE Runtime Environment (build 1.8.0_221-bll)
...    
</code></pre>
  </li>
  <li>
    Start the WildFly server by running this script:
    <pre><code>
$ cd $JBOSS_HOME
$ sudo ./bin/standalone.sh
    </code></pre>
  </li>
  <div class="alert alert-info">
  If you need to change the port that WildFly is using edit the<br>
  <code>$JBOSS_HOME/standalone/configuration/standalone.xml</code> file 
  </div>
  <li>
    Open your browser and navigate to <b>localhost:8080</b> (<em>or whichever port you specified</em>)<br>
    If the WildFly page opens, your server is running
  </li>
</ol>
<hr>

<h2>Start the Server on Boot</h2>
<h5>Optional</h5>

<ol>
  <li>
    Create a shell script that starts the server:
    <pre><code>
$ cd /etc/systemd/system

$ sudo touch server_startup.sh

$ sudo gedit server_startup.sh    
    </code></pre> 
    ...and add the following:
    <pre><code>
#!/bin/sh#
source ~/.bashrc
source $JAVA_HOME
source $JBOSS_HOME

# Start the WildFly server
$JBOSS_HOME/bin/standalone.sh    
    </code></pre>
    Save the file and quit <code>gedit</code>
  </li>
  <li>
    Create a service that runs on boot:
    <pre><code>
$ sudo touch server_startup.service

$ sudo gedit server_startup.service
    </code></pre>
    ...and add the following:
    <pre><code>
[Unit]Description=JBOSS startup script[Service]

ExecStart=/usr/local/etc/server_startup.sh    

[Install]

WantedBy=multi-user.target
    </code></pre>
  </li>
</ol>

<h2>Add a User</h2>
<p>You\'ll have to setup a user to be able to access the WildFly administration page</p>
<ol>
  <li>
    Navigate to <code>$JBOSS_HOME/bin</code> and run the <code>add-user.sh</code> shell script:
    <pre><code>
$ cd $JBOSS_HOME/bin
  
$ sudo ./add-user.sh
    </code></pre>
  </li>
  <li>
    The script will prompt you for the type of user you\'d like to create - <b>Management</b> or <b>Application</b><br>
    <b>Choose Management User</b>
  </li>
  <li>
    Choose a <b>Username</b> - we\'ll use <b>admin</b><br>
    <em>though you\'d probably want to choose something more secure</em>
  </li>
  <li>Choose a <b>Password</b> and re-enter it</li>
  <li>The script will prompt you to join groups - simply hit <kbd>Enter</kbd></li>
  <li>The script will ask for your confirmation - type <b>yes</b> to confirm</li>
  <li>
    The script will ask if the user will be used to connect accross the application server processes - type <b>no</b>
  </li>
  <li>
    Open your browser and navigate to <b>localhost:8080</b> (<em>or whichever port you specified</em>)<br>
    Click the link <b>Administration Console</b> and type in the user credentials you just set up
  </li>
  <li>
    From here you can <b>Deploy Applications</b>, <b>Monitor the Server</b>, <b>Configure Settings</b>, and 
    <b>Manage User Permissions</b>
  </li>
</ol>


<h2>Enable Remote Access</h2>
<p>
  By default, WildFly 11 is setup to only allow local access. To enable remote access, navigate to the 
  <code>configuration</code> directory and edit the <code>standalone.xml</code> file:
  <pre><code>
$ cd $JBOSS_HOME/standalone/configuration

$ sudo gedit standalone.xml  
  </code></pre>
  Locate the part of the file that defines the <b>interface -> address</b> and change it from this:
  <pre><code>
&lt;interface name="management">
   	&lt;inet-address value="${jboss.bind.address.management:127.0.0.1}"/>
&lt;interface />  
&lt;interface name="public">
   	&lt;inet-address value="${jboss.bind.address:0.0.0.0}"/>
&lt;interface />    
</code></pre>
  ...to this:
  <pre><code>
&lt;interface name="management">
   	&lt;any-address />
&lt;interface />  
&lt;interface name="public">
   	&lt;any-address />
&lt;interface />  
  </code></pre>   
</p>
<p>Save your changes and restart WildFly</p>
';

      return $returnValue;
    }

  }
}