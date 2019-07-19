<?php

namespace J\ClassNotes {

  class ASP_04_Security extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Security
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Securing a Connection
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  <b>Transport Layer Security (TLS)</b> - Internet protocol that uses encryption. Replaces older 
  <b>Secure Scoket Layer (SSL)</b>
</p>
<p>Is able to determine if data has been tampered with during transit</p>
<p>Is able to verify if a server or a client is who it claims to be using certificates</p>
<p>Indication: <b>https://</b> instead of <b>http://</b> (sometimes displays a lock in the search bar)</p>
<hr/>

<h2>Digital Security Certificates</h2>
<p>Needed when you deploy an application</p>
<p>Two kinds:</p>
<ul>
  <li><b>Server Certificates</b> - provides encoding and authenticates server</li>
  <li><b>Client Certificates</b> - optional - authenticate clien</li>
</ul>
<p>Can request a certificate through the <b>IIS Management Console</b></p>
<p>Common <b>Certificate Authorities (CA)</b></p>
<ul>
  <li><b>www.symantec.com</b></li>
  <li><b>www.geotrust.com</b></li>
  <li><b>www.entrust.com</b></li>
  <li><b>www.thawte.com</b></li>
  <li><b>www.digicert.com</b></li>
</ul>
<p>Certificate Authority checks with a Registration Authority (RA)</p>
<p>Cost depends on SSL strength - length of the key (<b>128-bit is absolute minimum</b>)</p>
<hr/>

<h2>How to use TLS/SSL</h2>
<p>Make sure project\'s property <b>SSL Enabled</b> is set to <b>True</b></p>
<p>The first time you run the project, it will ask if you trust the certificate that was generated</p>
<p>Request secure connection for the pages in the app when yuou redirect</p>
<p>Force a page to use secure connection when a user bypasses your navigation</p>
<ol>
  <li>Use <b>https</b> as the protocol</li>
  <li>Specify an <b>absolute</b> path</li>
  <ul>
    <li>Under IIS Express Server - additionally need a port number</li>
    <ul><li>https://localhost:4040/Checkout.aspx</li></ul>
    <li>Under IIS Server - no port number</li>
    <ul><li>https://localhost/Checkout.aspx</li></ul>
  </ul>
</ol>
<hr/>

<h2>Set File Paths</h2>
<p>In web.config</p>
<pre><code>
&lt;configuration&gt;
  &lt;appSettings&gt;
    &lt;add key="SecureAppPath"
      value="//localhost:44300/" /&gt;
    &lt;add key="UnsecureAppPath"
      value="//localhost:49565/" /&gt;
    &lt;/appSettings&gt;
</code></pre>
<hr/>

<h2>Retrieve Connection Path</h2>
<pre><code>
// Secure connection
string url = "https:" +
  ConfigurationManager.AppSettings["SecureAppPath"] + "Checkout1.aspx";
Response.Redirect(url);    
  
// Unsecure connection
string url = "http:" +
  ConfigurationManager.AppSettings["UnsecureAppPath"] + "Order.aspx";
Response.Redirect(url);    
</code></pre>
<hr/>

<h2>Check the connection</h2>
<p>Properties of <b>HttpRequest</b> class object Request:</p>
<ul>
  <li><b>IsSecureConnection</b> - returns <b>True</b> if current connection is secure</li>
</ul>

';

      return $returnValue;
    }

  }
}