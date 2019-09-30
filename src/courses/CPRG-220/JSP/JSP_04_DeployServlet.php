<?php

namespace J\ClassNotes {

  class JSP_04_DeployServlet extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Deployment
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Deploy a Servlet
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Servlets need a particular directory structure to properly deploy:</p>
<ul>
  <li>
    [install_directory]
    <ul>
      <li>
        /AppName
        <ul>
          <li>
            /WEB-INF
            <ul>
              <li><code>web.xml</code></li>
              <li>
                /classes
                <ul>
                  <li><code>myservlet.class</code></li>
                </ul>
              </li>
              <li>
                /lib
                <ul>
                  <li><code>mmyjar.jar</code></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<hr>

<h2>web.xml</h2>
<p>The <code>web.xml</code> file needs:</p>
<ul>
  <li>a &lt;web-app> tag</li>
  <li>a &lt;servlet-mapping> tag</li>
  <li>&lt;servlet> tag is <em>optional</em></li>
</ul>
';

      return $returnValue;
    }

  }
}