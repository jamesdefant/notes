<?php

namespace J\ClassNotes {

  class JAV_04_Object extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Object
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Objects in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>All classes in Java are derived from Object. Therefore, every class has a number of built in methods</p>
<ul>
  <li><code>protected Object clone()</code></li>
  <li><code>boolean equals(Object o)</code></li>
  <li><code>protected void finalize()</code></li>
  <li><code>Class&lt;T&gt; getClass()</code></li>
  <li><code>int hashCode()</code></li>
  <li><code>void notify()</code></li>
  <li><code>void notifyAll()</code></li>
  <li><code>String toString()</code></li>
  <li><code>void wait()</code></li>
  <li><code>void wait(long timeout)</code></li>
  <li><code>void wait(long timeout, int nanos)</code></li>
</ul>
<hr>

<h2>Compare</h2>
<p>
  If you want to comnpare two objects of the same type, you need to override the <b>equals()</b> method 
</p>

<pre><code>
public class Customer {
  private String name;
  private int age;
  
  public String getName() { return name; }
  public int getAge() { return age; }


  @Override
  public boolean equals(Object o) {
    if (this == o) return true;
    if (!(o instanceof Customer)) return false;
    
    Customer customer = (Customer) o;
    return Objects.equals(this.getName(), customer.getName()) &&
           Objects.equals(this.getAge(), customer.getAge());
  }
  
  @Override
  public int hashCode() {
    return Objects.hash(getName());
  }
}
</code></pre>
<hr>

<h2>Keywords</h2>
<p><code>this</code> - an instance variable that refers to <em>this</em> object</p>
<p><code>this()</code> - a way to call another constructor from within the class</p>
<p><code>super</code> - refers to this parent\'s class</p>
<p><code>super()</code> - a way to call the parent\'s constructor</p>
<p>
  <code>final</code>
  <ul>
    <li>
      prevents a class from being subclassed<br>
      <code>public final class MyClass</code>
    </li>
    <li>
      prevents a method from being overidden<br>
      <code>public final void myMethod()</code>
    </li>
    <li>
      defines a variable as a constant<br>
      <code>public final int MAX_ARRAY_SIZE = 25;</code>
    </li>
  </ul>
</p>
<p>
  <code>instanceof</code> - comparison operator to test whether or not a object is of a certain type
</p>



';

      return $returnValue;
    }

  }
}