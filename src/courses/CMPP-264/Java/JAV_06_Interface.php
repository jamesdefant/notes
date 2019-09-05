<?php

namespace J\ClassNotes {

  class JAV_06_Interface extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Interfaces
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Interfaces in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Interfaces are entirely made up of abstract methods</p>
<p>
  They are a contract that a class implementing them will be guaranteed to have their methods defined - otherwise
  there will be a compiler error. 
</p>
<p>Interfaces are used to ensure that multiple classes all have the same structure.</p>

<h2>Define an Interface</h2>
<p>Use the <code>interface</code> keyword</p>
<pre><code>
public interface Wearable {
  public void PutOn();
}
</code></pre>
<p><b>Interfaces can also be extended</b></p>
<pre><code>
public interface Wearable {
  public abstract void PutOn();
}

// Also contains the PutOn() method
public interface Ironable extends Wearable {
  public abstract void Iron();
}
</code></pre>

<h2>Implement a Class with an Interface</h2>
<p>Use the <code>implements</code> keyword</p>
<pre><code>
public class Shirt implements Ironable {

  // Must implement PutOn() and Iron() or face the errors
  public void PutOn() {
    ...
  }
  
  public void Iron() {
    ...
  }
}
</code></pre>

<h2>Access the Object by it\'s Interface</h2>
<pre><code>
public class Program {
  public static void Main(String[] args) {
    
  }
}
</code></pre>
';

      return $returnValue;
    }

  }
}