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
    Navigate to the <code>/home</code> directory and open <code>.bashrc</code> with <code>gedit</code>
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
  <code>/standalone/configuration/standalone.xml</code> file 
  </div>
  <li>
    Open your browser and navigate to <b>localhost:8080</b> (<em>or whichever port you specified</em>)<br>
    If the WildFly page opens, your server is running
  </li>
</ol>
<hr>

<h2>Start the Server at Boot</h2>

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

# Start the WildFly server
$JBOSS_HOME/bin/standalone.sh    
    </code></pre>
    Save the file and quit <code>gedit</code>
  </li>
  <li>
    Create another shell script that runs on boot:
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
';

      return $returnValue;
    }

  }
}