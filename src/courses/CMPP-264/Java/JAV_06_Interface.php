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
  there will be a compiler error
</p>
<p>Interfaces are used to ensure that multiple classes all have the same structure</p>
<p>If you need 5 different classes that all have a <code>run()</code> method, implement them with an interface</p>
<p>Interface <b>methods</b> are implicitly <code>public</code> and <code>abstract</code></p>
 
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
  public void PutOn();
}

// Also contains the PutOn() method
public interface Ironable extends Wearable {
  public void Iron();
}
</code></pre>

<h2>Implement a Class with an Interface</h2>
<p>Use the <code>implements</code> keyword</p>
<pre><code>
public class Shirt implements Ironable {

  // Must implement PutOn() and Iron() or face errors
  public void PutOn() {  ...  }
  public void Iron() {  ...  }
  
  // Defined by the class - not the interface
  public void GetType() {  ...  }
}
</code></pre>

<h2>Access the Object by it\'s Interface</h2>
<p>
  Calling an object by it\'s interface strips away all the typical methods that are defined by the class or it\'s 
   superclasses and leaves only those defined by the interface
</p>
<pre><code>
public class Program {
  public static void Main(String[] args) {
  
    Ironable garment = new Ironable();
    
    // The only methods availabe to garment are
    garment.PutOn();
    
    // ...and
    
    garment.Iron();
    
    // GetType() is not available
  }
}
</code></pre>
';

      return $returnValue;
    }

  }
}