<?php

namespace J\ClassNotes {

  class RSP_02_VirtualHost extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
VirtualHosts
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Setup a website on the Pi
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Setup a VirtualHost on the Pi</h2>
<p>
  <a href="http://httpd.apache.org/docs/2.4/vhosts/" target="_blank">http://httpd.apache.org/docs/2.4/vhosts/</a> 
</p>
<p>If we create a virtual host on our Pi and enter the hostname and IP in our hostfile in Windows, we can</p>
<ol>
  <li>
    Navigate to <code>/var/www/html</code> and create a new directory named <code>vhosts</code>:
    <pre><code>
[user]@[server]:/var/www/html $ sudo mkdir vhosts
    </code></pre>
  </li>
  <li>
    Create a new directory within the <code>vhosts</code> directory
    <pre><code>
-- enter the vhosts directory  
[user]@[server]:/var/www/html $ cd vhosts    

-- create a new directory
[user]@[server]:/var/www/html/vhosts $ sudo mkdir jd.com
    </code></pre>
  </li>
  <li>
    Create a new <code>index.html</code> file within the new directory
    <pre><code>
-- enter the jd.com directory  
[user]@[server]:/var/www/html/vhosts $ cd jd.com    

-- create a new file
[user]@[server]:/var/www/html/vhostsjd.com $ sudo touch index.html

-- open the file in an editor (in our case gedit - cuz vi sux)
[user]@[server]:/var/www/html/vhostsjd.com $ sudo gedit index.html
    </code></pre>
    ...and add this to the file:
    <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;title&gt;Hosted!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1&gt;This is a hosted site&lt;/h1&gt;
&lt;/bodyv
&lt;/html&gt;    
    </code></pre>
  </li>
  <li>
    Open <kbd>Webmin</kbd> and navigate to <kbd>Servers</kbd> => <kbd>Apache Servers</kbd> = <kbd>Create Virtual Host</kbd>
    and define the <b>Document Root</b> as the directory where the <code>index.html</code> file is located (<code>/var/www/html/vhosts/jd.com</code>)<br>
    as well as the <b>Server Name</b> that you would like the domain name to be<br>
    Click <kbd>Create New</kbd>
  </li>
  <li>Navigate to the <kbd>Existing Virtual Hosts</kbd> tab and click the icon to the left of the virtual host that was just created to bring up the options for the virtual server
    <ul>
      <li>Click the <kbd>Log Files</kbd> button and define the file to log errors to</li>
      <li>
        Click the <kbd>Networking and Addresses</kbd> button and define the
        <ul>
          <li><b>Server Hostname</b> - <code>jd.com</code></li>
          <li><b>Server Admin Email Address</b> - <code>webmaster@jd.com</code></li>
        </ul> 
      </li>
      <li>Click the <kbd>Document Options</kbd> button to define various options for the site - <b>Follow symbolic links</b></li>
      <li>Click the <kbd>Error Handling</kbd> button to define custom error handling</li>
      <li>Click the <kbd>Processes and Limits</kbd> button to define limits for CPU usage and number of processes</li>
    </ul>
  </li>
  <li><b>Restart the webserver</b></li>
</ol>

<h2>On Windows</h2>
<p>Navigate to <kbd>C:/Windows/System32/drivers/etc</kbd> and edit the <code>hosts</code> file</p>
<p>Add the IP and domain name to the end of the file</p>
<p><code>10.163.37.227  jd.com</code></p>
';

      return $returnValue;
    }

  }
}