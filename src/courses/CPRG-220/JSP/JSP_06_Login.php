<?php

namespace J\ClassNotes {

  class JSP_06_Login extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Login
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Login with Servlets / JSP
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<ol>
  <li>Create a new Dynamic Web project</li>
  <li>Create a new <b>Servlet</b> in the <code>src</code> directory named <code>Login.java</code></li>
  <li>
    Create two .jsp files in the <code>/WebContent</code> directory - 
    one named <code>login.jsp</code> and one named <code>secret.jsp</code>
  </li>
  <li>
    Add the following JSP code and form to the <b>body</b> of the <b>login</b> page:
    <pre><code>
&lt;%
  // Check the session for a message attribute
  if(session.getAttribute("message") != null && 
      session.getAttribute("message").equals("")) {
    
    // Display a message
    out.print("&lt;h3>" + session.getAttribute("message") + "&lt;/h3>");
  }
%>    
    
&lt;form method="post" action="login">

  User ID: 	&lt;input type="text" name="userid" />
  Password: 	&lt;input type="password" name="password" />
  &lt;input type="submit" name="Log In" />
  
&lt;/form>      
    </code></pre>
  </li>
  <li>
    Add the following JSP redirect code to the <b>secret</b> page:
    <pre><code>
&lt;%
  
  // Check if the user has been to this page before
  if (session.isNew() || 
    (session.getAttribute("logged_in") == null) ||
    (session.getAttribute("logged_in").equals(false))) {
    
    response.sendRedirect("login.jsp");
  }

%>     
    </code></pre>
  </li>
  <li>
    Add the following code to the <b>servlet</b> page - <code>Login.java</code>
    <pre><code>
protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

  
  String userid = request.getParameter("userid");
  String password = request.getParameter("password");
  
  try {
    // Load the driver
    Class.forName("org.mariadb.jdbc.Driver");
    
    // Get the connection
    Connection conn = DriverManager.getConnection("jdbc:mariadb://localhost:3306/travelexperts", "admin", "password");
    
    // Build the query string
    String sql = "SELECT password FROM agents WHERE userid = ?";
    
    // Create a prepared statement
    PreparedStatement stmt = conn.prepareStatement(sql);
    stmt.setString(1, userid);
    
    // Run the statement
    ResultSet rs = stmt.executeQuery();
    
    // Check the password
    if(rs.next()) {
      if(password.equals(rs.getString(1))) {
        
        // Set the session
        HttpSession session = request.getSession();
        session.setAttribute("logged_in", true);
        
        // Redirect (login)
        response.sendRedirect("secret.jsp");
      }
      else {
        
        // Set the session
        HttpSession session = request.getSession();
        session.setAttribute("message", "User ID or password is incorrect");
        
        // Redirect
        response.sendRedirect("login.jsp");
      }
    }
    else {
      // Set the session
      HttpSession session = request.getSession();
      session.setAttribute("message", "User ID or password is incorrect");
      
      // Redirect
      response.sendRedirect("login.jsp");
    }
  }
  catch(ClassNotFoundException | SQLException e) {
    e.printStackTrace();
  }
}
    
    </code></pre>
  </li>
</ol>


';

      return $returnValue;
    }

  }
}