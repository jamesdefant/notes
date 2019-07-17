<?php

namespace J\ClassNotes {

  class ASP_01_Intro extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Intro
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Intro to ASP.NET
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>ASP.NET is an open-source server-side web application framework designed for web development to produce dynamic web pages.</p>
<p>It was developed by Microsoft to allow programmers to build dynamic web sites, web apps, and web services</p>
<p>ASP.NET can be written in any .NET language: <b>C#, VB.NET, C++, F#</b></p>
<hr/>

<h2>Main ASP.NET Technologies</h2>

';
      $ASPTable = [
        ['Technology', 'Description'],
        ['ASP.NET Web Forms','A development environment similar to Windows Forms, with controls on a design surface. It\'s focus is on Rapid Application Development (RAD)'],
        ['ASP.NET MVC', 'A development environment similar to PHP or classic ASP. It uses the Model-View-Controller (MVC) design pattern and the Razor templating engine for in-line data binding']
      ];
      $returnValue .= \WriteHTML::getTable($ASPTable);

      return $returnValue;
    }

  }
}