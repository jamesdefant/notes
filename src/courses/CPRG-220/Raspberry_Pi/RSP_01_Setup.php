<?php

namespace J\ClassNotes {

  class RSP_01_Setup extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Setup
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Setup Raspberry Pi
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p><a href="https://www.raspberrypi.org/" target="_blank">https://www.raspberrypi.org/</a> </p>
<p>Raspberry Pi is a tiny form-factor, Linux based computer that was originally designed for students to prototype</p>
<p>Runs a compact version of Linux:</p>
<ul>
  <li>Runs <b>Raspian</b> - a Linux distro based on Debian</li>
  <li><b>NOOBS</b> - New Out Of the Box Software - package</li>
  <li>Has <b>Python</b> and <b>Java</b> installed</li>
</ul>
<p>Uses a Micro-SD card instead of a HDD/SDD</p>
<p>Has many extension ports and pins to facilitate connecting many different sensors, LEDs, motors, etc</p>
<hr>

<h2>OS Installation</h2>
<p>
  Download the latest version of <b>Raspian</b> - <a href="https://www.raspberrypi.org/downloads/raspbian/" 
  target="_blank">
    https://www.raspberrypi.org/downloads/raspbian/
  </a>
</p>
<p>
  Download a <b>SD card formatter</b> - <a href="https://www.sdcard.org/downloads/formatter/" target="_blank">
    https://www.sdcard.org/downloads/formatter/
  </a>
</p>
<p>
  Download an <b>SD image copier</b> - <a href="https://sourceforge.net/projects/win32diskimager/" target="_blank">
    https://sourceforge.net/projects/win32diskimager/
  </a> 
</p>
<ol>
  <li>Plug the SD card into your Windows computer</li>
  <li>Format it if necessary</li>
  <li>Run <b>Win32DiskImager</b> to copy the image to the SD card</li>
  <li>Plug the SD card into the Raspberry Pi and boot it up</li>
  <li>Follow the prompts to setup the OS</li>
</ol>
<hr>

<h2>Set the time</h2>
<p>The time may not be set properly so open the terminal and run the following command:</p>
<pre><code>
-- displays the current time set by the system
$ date

-- set the current date/time to 2:30 pm - sept 25 2019
$ date -s "SEP 25 2019 14:30:00"
</code></pre>
<hr>


<h2>Setup</h2>
<p>
  Download <b>IP Scanner</b> for your Windows computer here: <a href="https://www.advanced-ip-scanner.com/" target="_blank" >
    https://www.advanced-ip-scanner.com/
  </a> 
</p>
<ol>
  <li>Open <kbd>Pi</kbd> => <kbd>Preferences</kbd> => <kbd>Respberry Pi Configuration</kbd></li>
  <li>On the <b>System</b> tab</li>
  <li>
    Set the following:
    <ul>
      <li><b>Password</b> - change it to something - <b>P@ssw0rd</b></li>
      <li><b>Hostname</b> - change it to something unique - <b>JD</b></li>
  </li>
  <li>Navigate to the <b>Interfaces</b> tab</li>
  <li>
    Enable the following:
    <ul>
      <li><b>Camera</b></li>
      <li><b>SSH</b></li>
      <li><b>VNC</b></li>
      <li><b>SPI</b></li>
      <li><b>I2C</b></li>
      <li><b>1-Wire</b></li>
    </ul>
    ...and click <kbd>OK</kbd>
  </li>
  <li>
    Run the command following commands to update the system:
    <pre><code>
$ sudo apt-get update
$ sudo apt-get upgrade
$ sudo apt-get update
    </code></pre>
  </li>
</ol>
<hr>

<h2>Apache</h2>
<p>Install apache2 like so:</p>
<ol>
  <li>Install <code>vsftpd</code> by running the following command:<br> 
    <pre><code>sudo apt-get install vsftpd</code></pre>
  </li>
  <li>
    Edit the <code>vsftpd.conf</code> file by running:<br> 
    <pre><code>sudo vi /etc/vsftpd.conf</code></pre><br>
    ...and alter the following lines:
    <ul>
      <li><code>anonymous_enable=NO</code></li>
      <li><code>local_enable=YES</code></li>
      <li><code>write_enable=YES</code></li>
      <li><code>local_unmask=022</code></li>
    </ul>
  </li>
  <li>
    Restart the <code>vsftpd</code> service by running the command:<br> 
    <pre><code>sudo systemctl restart vsftpd</code></pre>
  </li>
  <li>
    Install <code>Apache</code> by running the following command:<br>
    <pre><code>sudo apt install apache2</code></pre>
  </li>
</ol>
<p>
  Download <b>FileZilla FTP Client</b> for Windows here: <a href="https://filezilla-project.org/" target="_blank">
    https://filezilla-project.org/
  </a> 
</p>
<p>Determine the Pi\'s IP address by typing:</p>
<pre><code>
$ ifconfig
</code></pre>
<p>
  Run <b>FileZilla</b> and insert the IP address (<b>10.163.37.227</b>), username (<b>pi</b>), and password 
  (<b>P@ssw0rd</b>)
</p>
<p><b>Start/Stop the Apache server</b> by running:</p>
<pre><code>
$ systemctl start apache2
</code></pre>
<hr>

<h2>VNC</h2>
<p>
  Download <b>Tight VNC</b> for your Windows computer here: <a href="https://www.tightvnc.com/" target="_blank">
    https://www.tightvnc.com/
  </a> 
</p>
<ol>
    <li>Open the <b>Terminal</b> and type <code>ifconfig</code> to determine the IP of the Pi - <b>10.163.37.227</b></li>
  <li>
    Alter these settings on the Pi to configure <b>VNC Server</b>:
    <ol>
      <li>
        Open <kbd>VNC Server</kbd> (in the upper right-hand corner) and click the elipsis to enter the <b>Options...</b> 
        page
      </li>
      <li>
        Under the <kbd>Security</kbd> panel:
        <ul>
          <li>Change the <kbd>Encryption</kbd> to <b>Prefer Off</b></li>
          <li>Change the <kbd>Authentication</kbd> to <b>VNC Password</b> and set a password</li>
        </ul>
      </li>
      <li>Navigate to the <kbd>Connections</kbd> tab and take note of the <b>Port #</b> that VNC Server is broadcasting over (<b>5900</b>)</li>
    </ol> 
    Click <kbd>Apply</kbd> and then <kbd>OK</kbd>
  </li>
  <li>Run <b>VNC Viewer</b> on your Windows machine, and type in the IP to access the Pi remotely</li>

</ol>


<h2>MySQL</h2>
<p><a href="https://www.mysql.com/" target="_blank">https://www.mysql.com/</a> </p>
<p>Install it like so:</p>
<pre><code>
$ sudo apt install mariadb-server
</code></pre>

<h2>PHPMyAdmin</h2>
<p><a href="https://www.phpmyadmin.net/" target="_blank">https://www.phpmyadmin.net/</a> </p>
<p>
  <a href="https://pimylifeup.com/raspberry-pi-phpmyadmin/" target="_blank">
    https://pimylifeup.com/raspberry-pi-phpmyadmin/
  </a> 
</p>
<h4>Install phpmyadmin</h4>
<ol>
  <li>
    <pre><code>
$ sudo apt install phpmyadmin
    </code></pre>
  </li>
  <li>
    When prompted, select the <kbd>apache2</kbd> option by pressing <kbd>SPACE</kbd> and <kbd>ENTER</kbd><br>
    <em><b>There must be an asterisk in the option!</b></em><br>
    <p><em>If you miss pressing SPACE, run this command to get back to the option:</em></p>
    <pre><code>
$ sudo dpkg-reconfigure phpmyadmin    
    </code></pre>
  </li>
  <li>When asked whether or not to install a database, choose <kbd>YES</kbd></li>
  <li>Type a master password to connect to the MySQL db and confirm it when prompted</li>
  <li>
    We will need to create a new user as root is disabled, so, login to the MySQL CLI:
    <pre><code>
$ sudo mysql -u root -p    
    </code></pre>
    and enter your password when prompted
  </li>
  <li>
    Now run this command to create a new MySQL user with full privileges: ' . "
    <pre><code> 
mysql> GRANT ALL PRIVILEGES ON database_name.* TO \'username\'@\'host\';

-- set the username and password appropriately

-- we\'ll use \'admin\' and \'P@ssw0rd\'
MariaDB [(none)]> GRANT ALL PRIVILEGES ON *.* TO \'username\'@\'localhost\' IDENTIFIED BY \'password\';      
    </code></pre> " . '
    <p>Exit the CLI by typing <code>quit</code> and pressing <kbd>ENTER</kbd></p>
  </li>
</ol>
<h4>Now we\'ll have to edit the config files</h4>
<ol>
  <li>
    Edit the <code>apache2.conf</code> file by typing:<br> 
    <pre><code>sudo gedit /etc/apache2/apache2.conf</code></pre>
     - or use <kbd>nano</kbd> or <kbd>vi</kbd> if you havent installed <code>gedit</code><br>
    Add the following line to the end of the file so that the <code>phpmyadmin.conf</code> file is loaded 
    when apache2 is loaded:<br>
    <code>Include /etc/phpmyadmin/apache.conf</code><br>
    <em>Save and exit</em>    
  </li>
  <li>
    Restart the apache2 service by typing:<br>
    <pre><code>sudo service apache2 restart</code></pre>
  </li>
</ol>
<h4>Configure NGINX</h4>
<ul>
  <li>
    To configure NGINX, we need to create a link between the phpmyadmin folder and our root html folder:<br>    
    <code>sudo ln -s /usr/share/phpmyadmin /var/www/html</code>
  </li>
</ul>
<h4>Log in to PHPMyAdmin</h4>
<ul>
  <li>
    Log in by typing the IP followed by <code>/phpmyadmin</code> in a web browser:<br>
    <code>http://10.163.37.227/phpmyadmin</code>
  </li>
</ul>
<p>Logging in as <b>root</b> is now disabled as it is a security risk</p>
<hr>

<h2>Tomcat</h2>
<p>Install Tomcat by typing the following commands:</p>
<pre><code>
$ sudo apt install tomcat9
$ sudo apt install tomcat9-docs
$ sudo apt install tomcat9-examples
$ sudo apt install tomcat9-admin
</code></pre>
<p>
  Edit the <code>/etc/tomcat9/tomcat-users.xml</code> file to setup <b>manager-gui</b> & 
  <b>admin-gui</b> roles<br>
  <em>Tomcat <b>Admin</b> and <b>Manager</b> can only sign on through localhost</em>
</p>
<pre><code>
-- Open the file
$ sudo gedit /etc/tomcat9/tomcat-users.xml

-- Add this to the file:
&lt;tomcat-users ...>
      
  &lt;role rolename="manager-gui" />
  &lt;role rolename="admin-gui" />
  &lt;user username="pi" password="P@ssw0rd" roles="manager-gui, admin-gui" />
&lt;tomcat-users>  
</code></pre>


<h2>Samba</h2>
<p>Samba is used to integrate Linux/Unix servers into a Windows Active Directory environment</p>
<p>Install samba by running the following command:</p>
<pre><code>
$ sudo apt-get install samba
</code></pre>

<h2>Webmin</h2>
<p><a href="http://webmin.com" target="_blank">http://webmin.com</a></p>
<p>To install dependencies type:</p>
<pre><code>
$ sudo apt-get install perl libnet-ssleay-perl openssl libauthen-pam-perl libpam-runtime libio-pty-perl apt-show-versions python 
</code></pre>
<p>
  Get the <b>Webmin</b> install file here:<br>
  <a href="https://sourceforge.net/projects/webadmin/files/webmin/1.850/webmin_1.850_all.deb/download" target="_blank">
    https://sourceforge.net/projects/webadmin/files/webmin/1.850/webmin_1.850_all.deb/download
  </a> 
</p>
<p>And install it like so:</p>
<pre><code>
$ sudo dpkg --install webmin_1.850_all.deb
</code></pre>
<p>You can access it from a web-browser either locally at <kbd>localhost:10000</kbd> or remotely at the IP - <kbd>10.163.37.227:10000</kbd></p>
';

      return $returnValue;
    }

  }
}