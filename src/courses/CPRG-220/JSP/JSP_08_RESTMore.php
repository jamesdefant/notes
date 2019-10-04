<?php

namespace J\ClassNotes {

  class JSP_08_RESTMore extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
REST + JPA
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java Persistence API
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $DBProperties = [
        ["<b>ConnectionURL:</b>", "jdbc:mariadb://localhost:3306/travelexperts"],
        ["<b>Database Name:</b>", "travelexperts"],
        ["<b>Driver CLass:</b>", "org.mariadb.jdbc.Driver"],
        ["<b>Password:</b>", "password"],
        ["<b>User name:</b>", "admin"]
      ];

      $returnValue = '
<h2>CRUD with JPA Tutorials</h2>
<p>
  <a href="https://www.objectdb.com/java/jpa/persistence/overview" target="_blank">
    https://www.objectdb.com/java/jpa/persistence/overview
  </a> 
</p>
<h2>Intro</h2>
<p>
  Continuing the project form the previous page - 
  <a href="index.php?course=CPRG-220&topic=JSP&page=JSP_07_REST">REST Services</a>, 
  we can add CRUD functionality with JPA 
</p>
<h2>Convert the project to JPA</h2>
<ol>
  <li>
    Right-click the project and select <kbd>Configure</kbd> => <kbd>Convert to JPA Project...</kbd><br>
    <em>This opens the <b>Project Facets</b> dialog</em>
  </li>
  <li>Make sure <b>JPA</b> is selected and click <kbd>Next ></kbd></li>
  <li>
    Make sure:
    <ul>
      <li>the <kbd>Platform</kbd> is <b>EclipseLink 2.5.x</b></li>
      <li>
        the <kbd>JPA implementation Type</kbd> is <b>User Library</b><br>        
        <ol>
          <li>If there is no library selectable (none loaded) click the <kbd>Download Library...</kbd> button</li>
          <li>Select <b>EclipseLink 2.5.2</b> from the list and click <kbd>Next ></kbd></li>
          <li>Accept the EULA and click <kbd>Finish</kbd> to download the library</li>
        </ol>
      </li>
      <li>that <b>EclipseLink 2.5.2</b> is selected in the list</li>
      <li>to <b>select</b> or <b>create a new</b> connection:        
        <ol>
          <li>
            To create a new connection, click the link<br>
            <em>This opens the <b>Connection Profile</b> dialog</em>
          </li>
          <li>
            Select the Database that you will use - in our case <b>MySQL</b><br>
            <em>Perhaps give it a new name to better distinguish it</em><br>
            Click <kbd>Next ></kbd>
          </li>
          <li>Select the <b>Driver</b> you will be using - in our case <b>MariaDB JDBC</b></li>
          <li>
            Fill in the properties for the database:<br>
            <em>Make sure you have a user set up with these credentials and the proper privileges</em>
          </li>
          '. \WriteHTML::getTable($DBProperties, false) .'
          <li>You may want to select the <b>Save Password</b> checkbox</li>
          <li><b>Test the Connection before continuing!</b></li>
        </ol>
      </li>
      <li>Click <kbd>Next ></kbd> and review the connection info</li>
    </ul>
  </li> 
  <li>Click <kbd>Finish</kbd></li>
</ol>

<h2>Generate Entity Classes</h2>
<ol>
  <li>
    Create a <b>new package</b> by right-clicking the <code>/src</code> directory and selecting 
    <kbd>New</kbd> => <kbd>Package</kbd> - name it <b>model</b><br>
    <em>You\'ll probably need to <b>Refresh</b> the display as the package won\'t appear under the <code>/src</code> directory</em>
  </li>
  <li>Right-click the project and select <kbd>JPA Tools</kbd> => <kbd>Generate Entities from Tables...</kbd></li>
  <li>Make sure the right connection is selected</li>
  <li>Choose the tables you want to use to generate entity classes</li>
  <li>Click <kbd>Next ></kbd></li>
  <li><kbd>Table Associations</kbd> dialog - confirm the <b>Table Associations</b>, if any and click <kbd>Next ></kbd></li>
  <li>
    <kbd>Customize Defaults</kbd> dialog
    <ul>
      <li>Under <kbd>Entity Access</kbd>, select <b>Property</b></li>
      <li>
        Under <kbd>Domain java class</kbd>, confirm the <b>Source folder</b> and <b>Package</b>
        that the model will be created in
      </li>
      Click <kbd>Next ></kbd>
    </ul>    
  </li>
  <li>
    <kbd>Customize Individual Entities</kbd> dialog
    <ul>
      <li>confirm the <b>Class name</b></li>
      <li>Under <kbd>Entity Access</kbd>, select <b>Property</b></li>
      Click <kbd>Finish</kbd>
    </ul>
  </li>
  <li>Now you should have an <code>Agent.java</code> class generated in the model package</li>
  <li>
    Also, there will be a <code>src/META-INF/persistence.xml</code> directory and file generated.<br> 
    We must add some properties to this file - edit it\'s <b>source</b> like so:<br>
    <b>Under the <code>&lt;class>model.Agent&lt;/class></code> tag, insert the following:</b>
    <pre><code>
&lt;properties>
  &lt;property name="javax.persistence.jdbc.url" value="jdbc:mariadb://localhost:3306/travelexperts"/>
  &lt;property name="javax.persistence.jdbc.user" value="admin"/>
  &lt;property name="javax.persistence.jdbc.password" value="password"/>
  &lt;property name="javax.persistence.jdbc.driver" value="org.mariadb.jdbc.Driver"/>
&lt;/properties>    
    </code></pre>
    
  </li>
</ol>

<h2>Test the database connection</h2>
<p>Let\'s get a value from the database and display it through our API</p>
<ol>
  <li>
    <b>Paste the driver</b> (<code>mariadb-java-client-2.1.1.jar</code>)<br>
    into the <code>WebContent/WEB-INF/lib</code> directory
   </li>
   <li>
    Swap out the <code>getAllAgents()</code> method in<br>
    <code>src/main/SimpleRestService.java</code>...
    <pre><code>
// http:localhost:8080/RESTApp/rs/agent/getallagents
@GET
@Path("/getallagents")
@Produces(MediaType.TEXT_PLAIN)
public String getAgents() {

  return "getallagents";	
}
    </code></pre> 
    ...with the following one:<br>
    <em><b>Notice how</b><br>
    <code>@Produces(MediaType.TEXT_PLAIN)</code><br>
    is replaced with<br>
    <code>@Produces(MediaType.APPLICATION_JSON)</code></em><br>
    We want to return a JSON string
    <pre><code>
// http:localhost:8080/RESTApp/rs/agent/getallagents
@GET
@Path("/getallagents")
@Produces(MediaType.APPLICATION_JSON)
public String getAgents() {
  
  EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager();  
  Query query = em.createQuery("SELECT a FROM Agent a");
  List &lt;Agent> list = query.getResultList();
  Gson gson = new Gson();
  Type type = new TypeToken&lt;List&lt;Agent>>() {}.getType();
    
  return gson.toJson(list, type);	
}
    </code></pre>
    <em>There will be a number of errors because we\'ll need to import some libraries:</em>
   </li>
   <li>
    Paste the <code>GSON</code> package to the <code>/WebContent/WEB-INF/lib</code> directory:<br>
    <a href="https://mvnrepository.com/artifact/com.google.code.gson/gson/2.8.5" target="_blank">
      https://mvnrepository.com/artifact/com.google.code.gson/gson/2.8.5
    </a>
   </li>
   <li>
    Add the following to the imports at the top of the file:
    <ul>
      <li><code>import java.util.List;</code></li>
      <li><code>import java.lang.reflect.Type;</code></li>

      <li><code>import javax.persistence.EntityManager;</code></li>
      <li><code>import javax.persistence.Persistence;</code></li>
      <li><code>import javax.persistence.Query;</code></li>

      <li><code>import com.google.gson.Gson;</code></li>
      <li><code>import com.google.gson.reflect.TypeToken;</code></li>
      
      <li><code>import model.Agent;</code></li>
    </ul>
  </li>
  <li>
    <b>Stop the server</b> and restart it so that the server has all the recent code changes<br>
    <em>You may need to <b>Clean</b> the server once it\'s stopped  - you need to from time to time</em>
  </li>
</ol>

<h2>Full CRUD Functionality</h2>
<p>The full class looks like this:</p>
<pre><code>
package main;

import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;

import java.lang.reflect.Type;
import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.Persistence;
import javax.persistence.Query;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.Produces;
import javax.ws.rs.FormParam;
import javax.ws.rs.QueryParam;
import javax.ws.rs.DefaultValue;
import javax.ws.rs.core.MediaType;

import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;

import model.Agent;


@Path("/agent")
public class SimpleRestService {

	// http:localhost:8080/RESTApp/rs/agent/getallagents
	@GET
	@Path("/getallagents")
	@Produces(MediaType.APPLICATION_JSON)
	public String getAgents() {
	  
		EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager();  
		Query query = em.createQuery("SELECT a FROM Agent a");
		List <Agent> list = query.getResultList();
		Gson gson = new Gson();
		Type type = new TypeToken<List<Agent>>() {}.getType();
    
	  	return gson.toJson(list, type);	
	}
  
	// http:localhost:8080/RESTApp/rs/agent/getagent/3
	@GET
	@Path("/getagent/{agentid}")
	@Produces(MediaType.APPLICATION_JSON)
	public String getAgent(@PathParam("agentid") int agentId) {
	  
		EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager();  
		//an alternative to using the query to getsingleResult we can just do a find
		
		//Agent agent = em.find(Agent.class, agentId);
		Query query = em.createQuery("select a from Agent a where a.agentId=" + agentId);
		Agent agent = (Agent) query.getSingleResult();		

		Gson gson = new Gson();
		Type type = new TypeToken<Agent>() {}.getType();
		return gson.toJson(agent, type);
	}
	  
	// http:localhost:8080/RESTApp/rs/agent/postagent
	// {"Agent": {"AgtFirstName":"Joe", "AgtLastName":"Bob"}}
	@POST
	@Path("/postagent")
	@Produces(MediaType.TEXT_PLAIN)
	@Consumes(MediaType.APPLICATION_JSON)
	public String postAgent(String jsonString) {
	  
		EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager(); 
		//JsonObject obj = new JsonParser().parse(jsonString).getAsJsonObject();
		
		Gson gson = new Gson();
		Type type = new TypeToken<Agent>() {}.getType();
		Agent agent = gson.fromJson(jsonString, type);
		em.getTransaction().begin();
		Agent result = em.merge(agent);
		em.getTransaction().commit();
		em.close();
		return "updated";
	}
	  
	// http:localhost:8080/RESTApp/rs/agent/putagent
	// {"Agent": {"AgtFirstName":"Joe", "AgtLastName":"Bob"}}
	@PUT
	@Path("/putagent")
	@Produces(MediaType.TEXT_PLAIN)
	@Consumes(MediaType.APPLICATION_JSON)
	public String putAgent(String jsonString) {
	  
		EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager(); 
		
		Gson gson = new Gson();
		Agent a = gson.fromJson(jsonString, Agent.class);
		em.getTransaction().begin();
		em.persist(a);
		em.getTransaction().commit();
        return "inserted";		
	}
	  
	// http:localhost:8080/RESTApp/rs/agent/deleteagent/3
	@DELETE
	@Path("/deleteagent/{agentid}")
	public String deleteAgent(@PathParam("agentid") int agentId) {
	  
		EntityManager em =  Persistence.createEntityManagerFactory("RESTApp").createEntityManager(); 
		
		Agent foundAgent = em.find(Agent.class, agentId);
		em.getTransaction().begin();
		em.remove(foundAgent);
		if (em.contains(foundAgent))
		{
			em.getTransaction().rollback();
			em.close();
			return "Delete failed, contact tech support";
		}
		else
		{
			em.getTransaction().commit();
			em.close();
			return "Agent was successfully deleted";
		}
	}
}

</code></pre>

';

      return $returnValue;
    }

  }
}