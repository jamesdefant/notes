"use strict";
/* Common HTML elements */

// Global variables
const isDebug = true;

// Create all necessary common HTML elements
function loadCommonHTML() {
  




  createScrollSpyNav( 
                      document.getElementById( "scrollSpyNav" ),
                      "myScrollSpy",
                      [ "nav", "flex-column", "position-fixed" ],
                      getH2Links()
                    );
                    

}

function createNavbar1() {
  /* SAMPLE HTML
  <nav class="navbar navbar-expand-sm fixed-top bg-primary navbar-dark" >
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="DOM.html">DOM Notes</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="events.html">Event Notes</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="objects.html">Object Notes</a>
      </li>
    </ul>
  </nav>
  */
  // Create navbar element
  var navNode = document.createElement( "nav" );
  navNode.classList.add( "navbar", "navbar-expand-sm", "fixed-top", "bg-info", "navbar-dark" );
  
  // Create ul element
  var ulNode = document.createElement( "ul" );
  ulNode.classList.add( "navbar-nav" );

  // Create array to hold Link objects to pass to addLink() method
  var linkArray = [ new Link( "DOM Notes", "DOM.html" ),
                    new Link( "Event Notes", "events.html"),
                    new Link( "Object Notes", "objects.html"),
                    new Link( "JavaScript Features", "js_features.html" )
  ];
  
  
  var current_page = location.pathname.split("/").slice(-1).toString();
  
//  var current_page = current_page.toString();
  
  linkArray.forEach(function( item ) {
                    if( item.Href == current_page ) {
                      ulNode.appendChild( addLink( item, true ))
                    } else {
                      ulNode.appendChild( addLink( item, false ))
                    }
                      
            });

  // Add ul element to nav element
  navNode.appendChild( ulNode );

  // Insert the nav as the first child of the body element
  var body = document.body;
  body.insertBefore( navNode, body.childNodes[0] );

}

/*---------------------------------------------------------------------------*/
// Create a Scroll-Spy navigation
function createScrollSpyNav( parent_elem, ul_id, ul_classlist_array, link_array ) {
  
  if(isDebug) {
    console.log("typeof parent_elem: " + typeof parent_elem + "\n" + 
                "typeof ul_id: " + typeof ul_id + "\n" + 
                "typeof ul_classlist_array: " + typeof ul_classlist_array + "\n" + 
                "typeof link_array: " + typeof link_array);
  }
  
  // Print errors
  if( isElement(parent_elem) == false ) {
    console.log( "parent_elem is not a valid htlm element" );
    return;
  }
  if( typeof ul_id != "string" ) {
    console.log( "ul_id is not a string" );
    return;
  }
  if( Array.isArray(ul_classlist_array) == false ) {
    console.log( "ul_classlist_array is not an array" );
    return;
  }
  if( Array.isArray(link_array) == false ) {
    console.log( "link_array is not an array" );
    return;
  }
  
  // Create ul element
  var ulNode = document.createElement( "ul" );
  ulNode.id = ul_id;
  
  // Add clases to ul element
  ul_classlist_array.forEach(
    function(item) {
      ulNode.classList.add(item); 
    }
  );
  
  // Add links to ul element
  link_array.forEach(
    function( item, index ) {
      if(index == 0) {
        ulNode.appendChild( addLink( item, true ))
      } else {
        ulNode.appendChild( addLink( item, false ))
      }
    }
  );
  
  // Insert the ul as the first child of the parent_elem
  parent_elem.insertBefore( ulNode, parent_elem.childNodes[0] );

  // Refresh the scrollspy
  $('body').scrollspy("refresh")
}

// Link object
function Link( link_text, href ) {
  this.LinkText = link_text;
  this.Href = href;
}

/*---------------------------------------------------------------------------*/
/* Generic function to construct and return a Bootstrap 4 nested anchor:
    <li class="nav-item">
      <a class="nav-link" href="LINK">LINKTEXT</a>
    </li> 
*/
function addLink( link_object, is_current ) { 

  // Test object
  if( link_object.constructor.name != "Link" ) {
    alert( "Parameter passed to addLink() not a valid Link object.\n Type is " + link_object.constructor.name );
    return;
  }
  
  if( typeof is_current != "boolean" ) {
    alert( "Parameter passed to addLink() not a valid boolean value.\n Type is " + typeof is_current );
    return;
  }

  // Create li element
  var liNode = document.createElement( "li" );
  liNode.classList.add( "nav-item" );
  
  // Create a element
  var a = document.createElement( "a" );
  a.classList.add( "nav-link", "text-theme" );
  
  if(is_current == true) {
    a.classList.add( "active" );
  }
  
  a.setAttribute( "href", link_object.Href );

  // Create link text
  var linkText = document.createTextNode( link_object.LinkText );
  
  // Build the element
  a.appendChild( linkText );
  liNode.appendChild( a );
  
  return liNode;
}


function getH2Links() {
  
  // Grab all h2 elements in current site
  // Add a unique id to the tag
  // Create a array of links to these ids
  var link_array = [];

  // Grab all the h2 headings in the document
  var h2_array = document.getElementsByTagName( "h2" );   

  // Loop over them
  for(var i = 0; i < h2_array.length; i++) {

    // Grab the text held within
    var heading = h2_array[i].innerHTML;


    
    console.log(i + " | getH2Links() | " + heading);
   
    // Add ID and class to h2s
    var id = "h2Links_" + i
    h2_array[i].id = id;
    
    if(!h2_array[i].classList.contains("muted")) {
      h2_array[i].classList.add("muted");
    }
    
    // If h2 contains <code>, split it, and return the string without it
   var searchStr = "<code>";
   
   if(heading.includes( searchStr )) {
     var index = heading.search(searchStr);
     heading = heading.slice(0, index);
   }
    
    link_array.push( new Link( heading, "#" + id  ) );
  }
  
  return link_array;
}



/*---------------------------------------------------------------------------*/
// Utility functions
function isElement(element) {
  return element instanceof Element || element instanceof HTMLDocument;
}



/*
function addChild( parent_elem, child_elem, child_text, attributes ) {
  
  // Create the base node element
  if(typeof child_elem == "string" ) {
    childNode = document.createElement( child_elem );
  } else {
    childNode = child_elem;
  }
  
  // Make sure child_text is a string
  if(typeof child_text == "string") {
    childTextNode
  }
  
}
*/