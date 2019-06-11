<?php

namespace J\ClassNotes {

  class PHP_14_OOPEx extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
OOP Example
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Object-Oriented Example in CPRG210
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      return <<< 'CONTENT'
<pre><code>
class Agent
{
  private $id;
  private $$firstname;
  private $middleinitial;
  private $lastname;
  
  
  public function __construct()
  {
    // Properties for each table section  ( ternary operator )
    $this->id = isset() ? $_POST[ 'id' ] : null; 
  
    $this->password = md5($this->db_password);
    
    $this->agentArray = array(
                        "AgtFirstName" => $this->firstname,
                        "AgtMiddleInitial" => $this-middleinitial;
                        );
                        
  function insertAgent ( $conn) 
  {
    if ( $conn->connect_error ) {
      die ("Connection failed: " . $conn->connect_error);
    }
    
    $insertAgentQuery = "INSERT INTO....";
    
      
  }
  
  
  
  function agentLogin( $conn )
  {
    if(empty($_SESSION[ 'AgentId' ] )) {
      echo 'Agent login';
    }
    else {
      header(location: 'addagent.php');
    }
    
    if(!empty()$_POST[ 'login' ]) {
    
    }
  }  
}


</code></pre>

<h2>Add Agent</h2>
<pre><code>
function addAgent() 
{
  
  
  if(isset($_REQUEST[ '']))
}


</code></pre>
CONTENT;
    }

  }
}