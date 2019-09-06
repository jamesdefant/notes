<?php

namespace J\ClassNotes {

  class JAV_05_Annotations extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Annotations
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Annotations in Java
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Annotations are used to add metadata to classes, methods, variables, parameters, and packages</p>

<h2>Syntax</h2>
<p>Annotations are used like so:</p>
<pre><code>
@Override
public String toString() {
  return "This toString() method is not very helpful";
}
</code></pre>
<p>
  This tells the compiler that this <code>toString()</code> method is overiding another method in the super class 
  with the same signature
</p>

<h2>Pre-defined Annotations</h2>
<p>
  View the <a href="https://docs.oracle.com/javase/tutorial/java/annotations/predefined.html" target="_blank">
    Java Documentation
  </a> 
</p>
<ul>
  <li>
    <kbd>@Deprecated</kbd>
    <b>- indicates that the marked element is <em>deprecated</em> and should no longer be used</b><br>
    <em>When an element is deprecated, it shuold also be documented using the <b>Javadoc</b> <code>@deprecated</code> tag</em>
  </li>
  <li>
    <kbd>@Override</kbd> 
    <b>- informs the compiler that the element is meant to override an element declared in a superclass</b><br>
    <em>
      Not required , but helps to prevent errors. If a method marked with @Override fails to correctly override a
      method in one of it\'s superclasses, the compiler generates an error
    </em>
  </li>
  <li>
    <kbd>@SuppressWarnings</kbd>
    <b>
      - tells the compiler to suppress specific warnings that it would otherwise generate. In the following example, 
      a deprecated method is used, and the compiler usually generates a warning, but instead will be suppressed
    </b> 
    <pre><code>
    @SuppressWarnings ("deprecation")
    void useDeprecatedMethod() {
      objectOne.deprecatedMethod();
    }
    
    // Or with multiples
    @SuppressWarnings ({"deprecation", "unchecked"})
    void useDeprecatedMethod() {
      objectOne.deprecatedMethod();
    }
    </code></pre>
  </li>
  <li>
    <kbd>@SafeVarargs</kbd>
    <b>
      - when applied to a method or constructor, asserts that the code does not perform potentially unsafe operations
      on it\'s <code>varargs</code> parameter
    </b>
  </li>
  <li>
    <kbd>@FunctionalInterface</kbd>
    <b>- indicates that the type declaration is intended to be a functional interface</b>
  </li>
  
</ul>
<hr>

<h2>Declare Custom Annotations</h2>
<p>
  You can define your own annotations so that, for instance, you define a standard comment structure for 
  the beginning of a class
</p>
<p><b>For example:</b></p>
<pre><code>
/**
  * Person class defines person entity
  * Author : John Smith
  * Date : Sep 5 2019
  */
public class Person {
  ...
}
</code></pre>
<p>To add this metadata with an annotation, you must first <b>define the <em>annotation type</em></b></p>
<pre><code>
@interface ClassPreamble {
  String comment();
  String author();
  String date();
  
  // Note the default value
  String lastModifiedBy() default "N/A";
  
  // Note the enum
  DaysOfWeek day();
  
  // Note the annotation type
  Override ovr() default @Override;
  
  // Note the array
  String[] reviewers();
}
</code></pre>
<p>In <b>Java SE 8</b>, the type of an annotation element must be one of the following:</p>
<ul> 
  <li>primitive types (<code>boolean</code>, <code>int</code>, <code>float</code>, <code>char</code>, etc)</li>
  <li><code>String</code></li>
  <li><code>enum</code></li>
  <li>An <em>annotation type</em></li>
  <li>An <em>array</em> of the preceding types - <b>not an array of arrays</b></li>
</ul>
<p>Then, to use the custom annotation, use it like so:</p>
<pre><code>
@ClassPreamble (
  comment = "Person class defines person entity",
  author = "John Smith",
  date = "Sep 5 2019"
  
  // Note the enum
  day = DaysOfWeek.Friday,
  
  // Note the annotation type
  ovr = @Override

  // Note the array notation
  reviewers = {"Jack", "Jill"}
)
public class Person {
  ...
}
</code></pre>
<p><b>
  To make the custom annontaion appear in generated Javadoc documentation, add the <code>@Documented</code> 
  annotation just before the custom annotation definition
</b></p>
<pre><code>
import java.lang.annotation.Documented;

@Documented
public @interface ClassPreamble {
    String comment();
    String author();
    String date();
    DaysOfWeek day();

    Override ovr() default @Override;
    enum Status { UNCONFIRMED, CONFIRMED, FIXED, NOTABUG };

}
</code></pre>
';

      return $returnValue;
    }

  }
}