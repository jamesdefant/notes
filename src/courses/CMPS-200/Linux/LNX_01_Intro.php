<?php

namespace J\ClassNotes {

  class LNX_01_Intro extends Page
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
Intro to Linux
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>There are many Linux distributions out there today. Most of them come from Debian or Red Hat</p>
<ul>
  <li><a href="https://www.linuxmint.com/" target="_blank">Linux Mint</a></li>
  <li><a href="https://www.debian.org/" target="_blank">Debian</a></li>
  <li><a href="https://www.redhat.com/en" target="_blank">Red Hat</a></li>
  <li><a href="https://getfedora.org/" target="_blank">Fedora</a></li>
  <li><a href="https://www.centos.org/" target="_blank">CentOS</a></li>
  <li><a href="https://ubuntu.com/" target="_blank">Ubuntu</a></li>
</ul>
<hr>

<h2>Certifications</h2>
<ul>
  <li><a href="https://www.linuxfoundation.org/" target="_blank">The Linux Foundation</a></li>
  <li><a href="https://www.lpi.org/" target="_blank">Linux Professional Institue</a></li>
</ul>

';

      return $returnValue;
    }

  }
}