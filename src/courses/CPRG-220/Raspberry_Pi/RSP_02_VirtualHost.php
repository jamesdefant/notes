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
<p>We\'ll create a website named <code>joebob.com</code></p>
<p>We must first setup the virtual host on the Pi, then define the hostname on the machine we\'ll load it from (Windows)</p>
<h2>On the Pi</h2>
<ul>
  <li>
    We\'ll use <code>gedit</code> instead of <code>vi</code> as a text editor.<br> You can use either, 
    just substitue one for the other or install <code>gedit</code>
    <pre><code>
$ sudo apt install gedit
</code></pre> 
  </li>
  </ul>
  <ol>
  <li>
    Navigate to <code>/var/www/html</code> and create a new directory named <code>vhosts</code>:<br>
     <em>If it doesn\'t already exist</em>
    <pre><code>
$ sudo mkdir /var/www/html/vhosts
    </code></pre>
  </li>
  <li>
    Create a new directory within the <code>vhosts</code> directory
    <pre><code>
-- enter the vhosts directory  
$ cd /var/www/html/vhosts    

-- create a new sub-directory
$ sudo mkdir joebob.com
    </code></pre>
  </li>
  <li>
    Create a new <code>index.html</code> file within the new directory
    <pre><code>
-- enter the joebob.com directory  
$ cd joebob.com    

-- create a new file
$ sudo touch index.html

-- open the file in an editor (in our case gedit - cuz vi sux)
$ sudo gedit index.html
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
    Create a new <code>.conf</code> file in the <code>/etc/apache2/sites-available</code> directory 
    by copying the default one in there:
    <pre><code>
-- change to the sites-available directory
$ sudo cd /etc/apache2/sites-available    

-- copy the file
$ sudo cp 000-default.conf joebob.com.conf  
    </code></pre>
  </li>
  <li>
    Edit the file that was just created:
    <pre><code>
$ sudo gedit joebob.com.conf    
    </code></pre>
    and define the following:
    <pre><code>
...    
ServerName joebob.com
ServerAlias www.joebob.com         -- optional
ServerAdmin wemaster@joebob.com    -- optional
DocumentRoot /var/www/html/vhosts/joebob.com/
...
    </code></pre>
  </li>
  <li>
    Activate the host by running the apache command:
    <pre><code>
$ sudo a2ensite joebob.com    
    </code></pre>
  </li>
  <li>
    Reload the apache server:
    <pre><code>
$ sudo systemctl reload apache2    
    </code></pre>
  </li>
</ol>

<h2>On Windows</h2>
<p>Navigate to <kbd>C:/Windows/System32/drivers/etc</kbd> and edit the <code>hosts</code> file</p>
<p>Add the IP and domain name to the end of the file</p>
<pre><code>
...
10.163.37.227  joebob.com
</code></pre>
';

      return $returnValue;
    }

  }
}