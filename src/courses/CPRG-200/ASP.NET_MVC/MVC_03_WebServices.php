<?php

namespace J\ClassNotes {

  class MVC_03_WebServices extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
WebServices
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Web Services in MVC
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A <b>Web Service</b> is a class that resides on a web server and can be accessed through the Internet or an intranet</p>
<p>By using web services, your application can publish a useful function to the rest of the world</p>
<p>Host server provides a service which can be <b>consumed by clients</b> on different platforms</p>
<p>Clients can be <b>Web Applications (websites)</b> or <b>Windows Forms Applications</b>, as long as they are connected to the internet</p>
<p>They provide reusable application components</p>
<p>They can connect existing software on different platforms:</p>
<ul>
  <li>Allows distributed web applications - parts of an application reside on different servers</li>
  <li>Applications developed by different companies can interact</li>   
</ul>
<hr/>

<h2>IIS Server</h2>
<p><b>IIS Server</b> is Microsoft\'s WebServer. IIS Express is included with Visual Studio</p>
<p>Full edition IIS is needed when you deploy an application on the local server</p>
<ul><li>Easiest to install IIS Server first, then Visual Studio (VS will detect and register ASP.NET with it)</li></ul>
<hr/>

<h2>Web Services</h2>
<p>.NET 3.0 uses <b>WCF</b> (Windows Communication Foundation) services</p>
<p>ASP.NET 4.5 uses <b>Web API</b> services</p>
<p>Web services communicate with clients using either <b>SOAP</b> or <b>REST</b> protocol:</p>
<ul>
  <li>WCF services typically use SOAP</li>
  <li>Web API services always use REST</li> 
</ul>
<p><em>Tim Cury - Tutorial on Web API</em></p>
<hr/>

<h2>SOAP vs REST</h2>
<p><b>SOAP</b> - Simple object Access Protocol</p>
<ul>
  <li>Uses XML to transfer data</li>
  <li>Can be used with transport protocols other than HTTP</li>
  <ul>
    <li><b>TCP</b> - Transmission Control Protocol</li>
    <li><b>MSMQ</b> - Microsoft Message Queueing</li>
  </ul>
</ul>
<p><b>REST</b> - Representative State Transfer</p>
<ul>
  <li>Uses HTTP rahter than XML - simpler</li>
  <li>Return data in JSON format</li>
  <ul><li>Can be used with Ajax appliciiton</li></ul>
</ul>
<hr/>

<img src="img/CPRG_214/WCF.png" class="img-fluid">
<img src="img/CPRG_214/Web_API.png" class="img-fluid">
<hr/>

<h2>Build a Web Service</h2>
<ol>  
  <li>Create a new <b>Web Service</b> project</li>
  <li>Delete the <code>service1.svc</code> file and the <code>service1.cs</code> files that were genereated</li>
  <li>Create a new web service </li>
  <li>Define your interface and annotate it with  <code>[ServiceContract]</code></li>
  <ul><li>Annotate the methods with <code>[OperationContract]</code></li></ul>
  <li>Define a model class and annotate it with <code>[DataContract]</code></li>
  <ul><li>Annotate the properties with <code>[DataMember]</code></li></ul>
</ol>  
<pre><code>
// Interface
[ServiceContract]
public interface ICategoryService
{
  [OperationContract]
  List&lt;Category&gt; GetCategories();
  
  [OperationContract]
  void InsertCategory();
}

// Model
[DataContract]
public class Category
{
  [DataMember]
  public string CategoryID { get; set; }
  
  [DataMember]
  public string ShortName { get; set; }
}
</code></pre>
<h3>Implement the interface methods in your service class</h3>
<p><em>Point the interface methods towards their regular implementation</em></p>
<pre><code>
public class CategoryService : ICategoryService
{
  public List&lt;Category&gt; GetCategories()
  {
    return CategoryDB.GetCategories();
  }
  public void InsertCategory(Category category)
  {
    return CategoryDB.InsertCategory();
  }
  public void UpdateCategory(Category original_Category, Category category)
  {
    return CategoryDB.UpdateCategory();
  }
    public void InsertCategory(Category category)
  {
    return CategoryDB.InsertCategory();
  }
}
</code></pre>

';

      return $returnValue;
    }

  }
}