<?php

namespace J\ClassNotes {

  class JSP_07_REST extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
REST
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
REST Services
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Representational State Transfer</h2>
<p>A RESTful API is a app that serves up data from a given URI</p>
<p>
  There are a number of tutorials on the matter:
  <ul>
    <li>
      <a href="https://www.journaldev.com/9189/resteasy-tutorial-eclipse-tomcat" target="_blank">
        https://www.journaldev.com/9189/resteasy-tutorial-eclipse-tomcat
      </a> 
    </li>
    <li>
      Though, apparently <a href="https://spring.io/guides/gs/rest-service/" target="_blank">Spring</a> 
      is the new game in town
    </li>
  </ul>
</p>
<p>
  You can download plugins for <b>Eclipse</b> by navigating to <kbd>Help</kbd> => <kbd>Eclipse MarketPlace...</kbd><br>
  <ul><li>search for <b>RESTful Plugin for Eclipse</b> and install it</li></ul>
  <em>You\'ll need to restart Eclipse</em>
</p>
<ol>
  <li>
    Start a new <b>Dynamic Web Project</b> - we\'ll name it <b>RESTfulApp</b><br>
    <b>Make sure:</b>
    <ul>      
      <li><b>WildFly 11.0</b> is selected as the runtime</li>
      <li><b>Generate web.xml</b> checkbox is selected</li>
    </ul>
  </li>
  <li>
    Right-click the <b>project</b> and select <kbd>New</kbd> => <kbd>Other...</kbd><br>
    <em>This will open the <b>New Wizard</b> dialog</em>
  </li>
  <li>
    Select <kbd>RESTful Webservice</kbd> => <kbd>RESTEasy RESTful Webservice</kbd><br>
    Name the Package <b>main</b>
  </li>
  <li>The generated class<br>
    <code>RESTApp/Java Resources/src/main/SimpleRestService.java</code><br>
    will have errors - delete all the references to <code>Logger</code> / <code>Log</code>
  </li>
</ol>

<p>This is a sample template:</p>
<pre><code>
package main;


import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.Produces;
import javax.ws.rs.FormParam;
import javax.ws.rs.QueryParam;
import javax.ws.rs.DefaultValue;
import javax.ws.rs.core.MediaType;


@Path("/agent")
public class SimpleRestService {

  // http:localhost:8080/RESTApp/rs/agent/getallagents
  @GET
  @Path("/getallagents")
  @Produces(MediaType.TEXT_PLAIN)
  public String getAgents() {
  
    return "getallagents";	
  }
  
  // http:localhost:8080/RESTApp/rs/agent/getagent/3
  @GET
  @Path("/getagent/{agentid}")
  @Produces(MediaType.TEXT_PLAIN)
  public String getAgent(@PathParam("agentid") int agentId) {
  
    return "getagent " + agentId;	
  }
  
  // http:localhost:8080/RESTApp/rs/agent/postagent
  // {"Agent": {"AgtFirstName":"Joe", "AgtLastName":"Bob"}}
  @POST
  @Path("/postagent")
  @Produces(MediaType.TEXT_PLAIN)
  @Consumes(MediaType.APPLICATION_JSON)
  public String postAgent(String jsonString) {
  
    return "postagent: " + jsonString;	
  }
  
  // http:localhost:8080/RESTApp/rs/agent/putagent
  // {"Agent": {"AgtFirstName":"Joe", "AgtLastName":"Bob"}}
  @PUT
  @Path("/putagent")
  @Produces(MediaType.TEXT_PLAIN)
  @Consumes(MediaType.APPLICATION_JSON)
  public String putAgent(String jsonString) {
  
    return "putagent: " + jsonString;	
  }
  
  // http:localhost:8080/RESTApp/rs/agent/deleteagent/3
  @DELETE
  @Path("/deleteagent/{agentid}")
  public String deleteAgent(@PathParam("agentid") int agentId) {
  
  String msg = "Agent " + agentId + " deleted";
  
    return msg;
  }
}

</code></pre>
<p><em>This would be better implemented as an interface to ensure loose coupling</em></p>
<p>Now deploy the RESTful API to the server (Wildfly 11.0)</p>

<h2>PostMan</h2>
<p>Install <b>PostMan</b> @ <a href="https://www.getpostman.com/" target="_blank">https://www.getpostman.com/</a> </p>
<p>When you open the program you can test whether CRUD operations work properly</p>
<p>
  Select the type of protocol (<code>GET</code>/<code>POST</code>/<code>PUT</code>/etc) in the <b>Request Field</b>, 
  and type in the URL like so:
</p>
<pre><code>
http://[host]/[project]/[servlet-mapping_url-pattern]/[class_path_annotation]/[method_path_annotation]

~or~

http:localhost:8080/RESTApp/rs/agent/getallagents
</code></pre>
<p>This URI should print the phrase <code>getallagents</code> in the output</p>
<p>
  To run a <code>PUT</code>, you\'ll have to do something a little different 
  as the method signature <b>requires a jsonString</b> as an argument, but there is nothing passed within the URL:
  <pre><code>
@PUT
@Path("/putagent")
@Produces(MediaType.TEXT_PLAIN)
@Consumes(MediaType.APPLICATION_JSON)
public String putAgent(String jsonString) {
  
  return "putagent: " + jsonString;	
}    
  </code></pre>
</p>
<p>
  ...so, in Postman,  just under the URL, select the <kbd>Body</kbd> tab, select the <kbd>raw</kbd> radio button and
  select <b>JSON</b> from the dropdown on the right
</p>
<p><b>Test all the commands you plan to use - if they don\'t work, something is wrong and needs to be dealt with</b></p>
<p>My own system would only display a <code>403 Forbidden error</code>, so <b>I had to delete and re-implement my WildFly 11.0 server</b></p>
';

      return $returnValue;
    }

  }
}