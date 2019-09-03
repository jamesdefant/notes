<?php

namespace J\ClassNotes {

  class JAV_01_Intro extends Page
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
Intro to Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $programFunction = [
        ["Program Name", "Function"],
        ["java", "runtime program"],
        ["javac", "compiler"],
        ["javadoc", "documentation generator"],
        ["jar", "java archive tool"],
        ["jarsigner", "attach security certificates to archives"],
        ["keytool", "create and store keys and certificates"],
        ["policytool", "set security policies for O/S"]
      ];

      $returnValue = '
<h2>Java is:</h2>
<ul>
  <li>Object-Oriented</li>
  <li>Distributed - many different environments</li>
  <li>Portable/Architecture-neutral</li>
  <li>Reliable</li>
  <li>Secure</li>
  <li>Multi-threaded</li>
  <li>Dynamic linking to libraries</li>
  <hr>
  <li>Programming Language</li>
  <li>Development Environment</li>
  <li>Application Environment</li>
  <li>Deployment Environment</li>
</ul>

<h2>Bytecode</h2>
<p>Java is compiled into "Bytecode" - not binary</p>
<p>Machine-code instructions</p>
<p>Checked by the compiler</p>
<p>Must be able to run on any Java compliant interpreter</p>
<p>Late linking enables run-time flexibility</p>

<h2>Java Virtual Machine</h2>
<p>Java is interpreted by the <b>Java Virtual Machine (JVM)</b></p>
<p>Layer between Java code and hardware</p>
<p>Bytecode interpreter</p>
<p>Can be software or can be built-in to the hardware</p>
<p>Part of the development tool or the Web browser</p>
<p>Buffer between program and platform - <b>platform independent</b></p>

<h2>Garbage Collection</h2>
<p>Memory allocated by assigning a pointer to the memory address</p>
<p>
  Most languages require program to clean-up and free it\'s memory when complete 
  - leads to memory leaks if not handled correctly
</p>
<p>Java automatically handles this</p>

<h2>Security</h2>
<p>Security Manager built into <b>JVM</b></p>
<p>Provides cryptography, authentication and authorization, and public key architecture</p>
<p>"Customizable sandbox" - Security policy can be customized for fine-grained control</p>
<p>
  Language security
  <ul>
    <li>Strong data typing</li>
    <li>Automatic memory management</li>
    <li>Bytecode verification</li>
    <li>Secure class loading</li>
  </ul>
</p>
<p>Prevents memory violations, buffer overflows and more</p>

<H2>Check current version of installed Java</H2>
<p>Open up the command prompt and type:</p>
<pre><code>
java -version
</code></pre>
<p>Check your compiler:</p>
<pre><code>
javac -version
</code></pre>

<h2>Build the development machine</h2>
<p>
  There are a variety of versions:
  <ul>
    <li><b>Java SE</b> - Standard Edition - for desktop applications, GUI, network, threads and more</li>
    <li><b>Java EE</b> - Enterprise Edition - for Java Server Pages, Servlets, Web applications</li>
  </ul>
</p>
<p>Installation directory contents:</p>
<ul>
  <li>bin - binary executable files</li>
'. \WriteHTML::getTable($programFunction) .'
  <li>
    <code>jre</code> (Java Runtime Edition)
    <ul>
      <li><b>bin</b> - contains java runtime but not the compiler</li>
      <li>
        <b>lib</b> -
        <ul>
          <li>Library of runtime classes in .jar files</li>
          <li>Contains rt.jar which is the main library of java classes for standard edition</li>
          <li>Contains an ext directory for .jar files that extend Java\'s class libraries</li>
        </ul> 
      </li>
    </ul>
  </li>
</ul>

<h2>The API</h2>
<p><a href="https://docs.oracle.com/javase/8/docs/api/" target="_blank">Java SE 8 API</a> </p>
<p>Contains:</p>
<ul>
  <li><code>java.lang</code></li>
  <li><code>java.awt</code></li>
  <li><code>java.applet</code></li>
  <li><code>java.net</code></li>
  <li><code>java.io</code></li>
  <li><code>java.util</code></li>
</ul>

';

      return $returnValue;
    }

  }
}