<?php

namespace J\ClassNotes {

  class ASP_03_MultiPageSite extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Multiple Pages
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Navigating Multiple Pages in ASP.NET
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Cross-Page Posting</h2>
<p>Use the <b>PostBackUrl</b> property of a button on a specific page to define a page to navigate to</p>
<p>You can access contents of the controls from the previous page using the <b>PreviousPage</b> property</p>
<hr/>

<h2>Server.Transfer()</h2>
<p>A way to navigate to another page <b>on the same server</b></p>
<p>Terminates execution of the current page and transfers control to the specified page</p>
<p>
  Browser does not know that the application returnd a different page; the URL on top of the browser still states the original page
  (not reflected in the browsing history and bookmark would not work)
</p>
<hr/>

<h2>Response.Redirect()</h2>
<p>Can be used to navigate to <b>pages on a different server</b></p>
<p>Belongs to <code>HttpResponse</code> class, which contains info about the response</p>
<p>The Redirect method sends the HTTP redirect message back to the browser which then sends a new HTTP request to the server</p>
<p>Server processes the page and sends it back to the browser</p>
<p>Can use relative or absolute URLs:</p>
<pre><code>
// Relative
Response.Redirect("checkout.aspx");

// Relative up a folder
Response.Redirect("../checkout.aspx");

// Absolute
Response.Redirect("http://www.murach.com/Default.aspx");
</code></pre>
<hr/>


<h2>Response.RedirectPermanent()</h2>
<p>Permanently redirects to a new page</p>
<p>Search engines will store the new URL</p>
<pre><code>
// Relative
Response.RedirectPermanent("newCheckout.aspx");
</code></pre>
<hr/>

<h2>ViewState</h2>
<p><b>View State is a collection of variables that is passed from page to page as a string in a hidden input in the web page</b></p>
<p>It is handled automatically</p>
<p>Things that are handled automatically:</p>
<ul>
  <li><b>Text</b> prperty of a <em>TextBox</em></li>
  <li><b>IsPostBack</b> property of a page</li>
</ul>
<p>You can store form-level variables by assigning them to the ViewState (list)object:</p>
<pre><code>
// store as a key-value pair
ViewState.Add("TimeStamp", DateTime.Now);
~or~
ViewState["TimeStamp"] = DateTime.Now;

// Check it:
if(ViewState["TimeStamp"] != null) {...}

// Get the value
DateTime tStamp = (DateTime)ViewState["TimeStamp"];

// Remove it
ViewState.Remove["TimeStamp"];
</code></pre>
<hr/>

<h2>Session State</h2>
<p>When the website has multiple pages, the <b>ViewState</b> is specific to eachpage</p>
<p>You can use <b>Session</b> object to pass info from one page to another within the same session</p>
<p>Similar operations as <b>ViewState</b></p>
<p>When <b>Session</b> object is created, it is assigned an ID which is stored on the server</p>
<p>SessionID is passed to the browser and back to the server with the next request</p>
<p><b>Is specific to one user in one browser</b></p>
<pre><code>
// store as a key-value pair
Session.Add("TimeStamp", DateTime.Now);
~or~
Session["TimeStamp"] = DateTime.Now;

// Check it:
if(Session["TimeStamp"] != null) {...}

// Get the value
DateTime tStamp = (DateTime)Session["TimeStamp"];

// Remove it
Session.Remove["TimeStamp"];
</code></pre>
<hr/>

<h2>Application State</h2>
<p>When the first user requests a page that\'s a part of the application, the application begins</p>
<p>As part of the initialization, ASP.NET creates:</p>
<ul>
  <li>an <em>application object</em> from the HttpApplication class</li>
  <li>an <em>application ste object</em> from the HttpApplicationState class</li>
  <li>a <em>cache object</em> from the Cache class</li>
</ul>
<p>
  These objects exist for the duration of the application, and items stored in application state or cache 
  are available to all users of the application
</p>
<p>Once an application has started, it doesn\'t normally end until the web server is shut down</p>
<p>
  Items stored in the <b>Application state object</b> stay in server memory until they are specifically removed, 
  or until the application ends
</p>
<p>Application state is most appropriate for storing small items of data that change as an application executes</p>
<p>
  To make sure the applicatino object is not accessed by more than one user at a time, it should be locked 
  while updating and unlocked when the update is completed 
</p>
<pre><code>
// store as a key-value pair
Application.Add("TimeStamp", DateTime.Now);
~or~
Application["TimeStamp"] = DateTime.Now;

// Check it:
if(Application["TimeStamp"] != null) {...}

// Get the value
DateTime tStamp = (DateTime)Application["TimeStamp"];

// Remove it
Application.Remove["TimeStamp"];
</code></pre>
<hr/>

<h2>Application Events</h2>
<ul>
  <li>
    <b>Application_Start</b> - the first page of the application requested by any user 
    (use it to initialize application state items); once started, it stays active even if there are no users
  </li>
  <li><b>Application_End</b> - application about to terminate (server shuts down)</li>
  <li><b>Session_Start</b> - another user session begins</li>
  <li><b>Session_End</b> - user\'s session is about to terminate (raised only if in-process mode is used)</li>
</ul>
<p>They are stored in <code>Global.asax</code> file</p>
<p>
  To create one, <b>right-click</b> on the application in the <b>Solution Explorer</b>, and select <kbd>Add</kbd> ->
  <kbd>Add New Item...</kbd> (or <kbd>Website</kbd> -> <kbd>Add New Item...</kbd> ) and choose 
  template <b>Global Application Class</b> 
</p>
<p>Headers for the application events are included</p>
<hr/>

<h2>Cookies</h2>
<p>A <b>cookie</b> is a key-value pair that is stored on the client\'s computer</p>
<p>An object of <code>HttpCookie</code> class</p>
<p>There are <b>session cookies</b> - which exist only for the duration of the browser session</p>
<p>...and <b>persistent cookies</b> - which exist <em>after</em> the session expires, until it\'s defined expiration date</p>
<p>Use cookies to: </p>
<ul>
  <li>Track <b>Session IDs</b></li>
  <li>Store info about the user to personalize the site - persistent cookie (stored in a text file on the client\'s side)</li>
</ul>
<p><b>If user has disabled cookies, persistent cookies will not work</b></p>
<h3>Properties</h3>
<ul>
  <li><b>Name</b> - name of the cookie</li>
  <li><b>Value</b> - (string) value associated with the name</li>
  <li><b>Expires</b> - (DataTime) value when the cookie expires (for persistent cookies)</li>
  <li><b>Secure</b> - (bool) value indicates if the cookie should be sent only over secure connections</li>
</ul>
<hr/>


<h2>Cookie Test</h2>
<p>There is no simple way built-in to ASP.NET to test if cookies are enabled or not on a client\'s computer</p>
<p>..however..</p>
<p>You can run a script that:</p>
<ol>
  <li>Creates a test cookie</li>
  <li>Redirects to the same page</li>
  <li>Reads the test cookie</li>
  <li>If the cookie collection is present, cookies are enabled</li>
</ol>
<hr/>

<h2>Creating Cookies</h2>
<pre><code>
// Create a session cookie
HttpCookie nameCookie = new HttpCookie("UserName", userName);

// Create a persistent cookie
HttpCookie nameCookie = new HttpCookie("UserName");
nameCookie.Value = userName;
nameCookie.Expires = DateTime.Now.AddYears(1);
</code></pre>
<hr/>

<h2>HttpCookieCollection</h2>
<p>Both <b>HttpRequest</b> and <b>HttpResponse</b> objects have an instance of the <b>HttpCookieCollection</b> class</p>
<p>Both instances are called <em>Cookies</em></p>
<p>To send a new cookie to the client, create the cookie and add it to the Response.Cookies</p>
<h3>Methods</h3>
<ul>
  <li><code>Add(Cookie)</code> - adds a cookie to the collection</li>
  <li><code>Remove(name)</code> - removes cookie with specified name from the collection</li>
  <li><code>Clear()</code> - removes all cookies from the collection</li>
</ul>
<p>
  However, to delete a cookie on the client\'s computer, send them a new cookie with the same name 
  that has an expiry in the past
</p>
<pre><code>
// Create a cookie
HttpCookie nameCookie = new HttpCookie("UserName", uxName.Text);
nameCookie.Expires = DateTime.Now.AddYears(1);
Resonse.Cookies.Add(nameCookie);

// Get the value of a cookie
if(!IsPostBack)
  if(!(Request.Cookies["UserName"] == null))
    uxName.Text = "Welcome back, " + Request.Cookies["UserName"].Value;

// Delete a persistent cookie
HttpCookie nameCookie = new HttpCookie("UserName");
nameCookie.Expires = DateTime.Now.AddSeconds(-1);
Resonse.Cookies.Add(nameCookie);
</code></pre>
<hr/>


';

      return $returnValue;
    }

  }
}