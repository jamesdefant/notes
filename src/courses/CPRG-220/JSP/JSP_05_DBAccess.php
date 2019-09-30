<?php

namespace J\ClassNotes {

  class JSP_05_DBAccess extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
DB Access
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
DB Handling with Servlets
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>

<p>We must first include a library to supply the drivers to the IDE</p>
<p>
  Copy the .jar file in Windows Explorer and <b>paste it into the <code>WEB-INF/lib</code> directory 
  of the project within Eclipse</b>
</p>
<p>Write a db access class just as you would in Java:</p>
<pre><code>
protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
  // TODO Auto-generated method stub


  PrintWriter out = response.getWriter();
  
  try {
    Class.forName("org.mariadb.jdbc.Driver");
    Connection conn = DriverManager.getConnection(
        "jdbc:mariadb://localhost:3306/travelexperts", "admin", "password");
    
    Statement stmt = conn.createStatement();
    ResultSet rs = stmt.executeQuery("SELECT * FROM agents");
    
    ResultSetMetaData rsmd = rs.getMetaData();
    
    StringBuilder sb = new StringBuilder();
    sb.append("&lt;!DOCTYPE html>&lt;head>&lt;title>Foregone Agents&lt;/title>&lt;/head>");
    sb.append("&lt;body>&lt;h1>Agents ++&lt;/h1>&lt;table>");
    
    
    while (rs.next()) {
      sb.append("&lt;tr>");
      
      for(int i = 1; i <= rsmd.getColumnCount(); i++) {
        sb.append("&lt;td>").append(rs.getString(i)).append("&lt;/td>");
      }
      
      sb.append("&lt;/tr>");
    }
    sb.append("&lt;/table>&lt;/body>&lt;/html>");
    
    out.print(sb.toString());
    conn.close();
  }
  catch(ClassNotFoundException | SQLException e) {
    e.printStackTrace();
  }		
}
</code></pre>

<h2>Problems</h2>
<p><a href="https://medium.com/@chaloemphonthipkasorn/fix-bug-phpmyadmin-sql-lib-php-php7-2-ubuntu-16-04-836049630a40" target="_blank">Warning in ./libraries/sql.lib.php#601</a> </p>
<p><a href="https://medium.com/@chaloemphonthipkasorn/%E0%B9%81%E0%B8%81%E0%B9%89-bug-phpmyadmin-php7-2-ubuntu-16-04-92b287090b01" target="_blank">Warning in ./libraries/plugin_interface.lib.php#532</a> </p>
';

      return $returnValue;
    }

  }
}