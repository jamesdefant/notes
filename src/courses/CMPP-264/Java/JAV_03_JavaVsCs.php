<?php

namespace J\ClassNotes {

  class JAV_03_JavaVsCs extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Java vs C#
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Java vs. C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  C# was based on Java when it was first introduced, therefore Java and C# share a number of similarities.</p> 
  <p>They are both class-based object oriented languages.</p>
  <p>They both are compiled to some form of intermediary code (<b>Bytecode</b> in Java or 
  <b>Microsoft Intermediate Language</b>) which is then compiled at runtime with a <b>JIT</b>
  (<b>Just In Time</b>) compiler. Java runs on a <b>JVM</b> (Java Virtual Machine) while <b>C#</b> runs on <b>CLR</b>
  (Common Language Runtime). 
</p>

<div class="container">
  <div class="row compare">
  
    <div class="col-md-6">
      <h3>Java</h3><hr>
      <p><b>Java SE 8</b> runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Vista, Server</li>
        <li>MacOS 10.8.3, 10.9+</li>
        <li>Linux Oracle 7.x, 6.x, 5.5+; RedHat_Ent 7.x, 5.5+; Suse_EntServer 12.x, 11.x; Ubuntu 15.10, 15.04, 14.x, 13.x</li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <h3>C#</h3><hr>
      <p>C# (<b>.NET Framework 4.7</b>) runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Server</li>
      </ul> 
      <p>C# (<b>.NET Core 2.2</b>) runs on the following platforms:</p>
      <ul>
        <li>Windows 10, 7, Server</li>
        <li>MacOS 10.12+</li>
        <li>
          Linux RedHat_Ent/CentOS/Oracle 7; Fedora 30,29; Debian 9; Ubuntu 18.10, 18.04, 16.04; Mint 18,17; openSUSE 42.3+;
          SUSE_Ent 12 SP2+; Alpine 3.7+
        </li>
      </ul>     
    </div>
    
  </div>
</div>

';

      return $returnValue;
    }

  }
}