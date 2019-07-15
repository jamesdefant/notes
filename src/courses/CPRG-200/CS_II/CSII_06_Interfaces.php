<?php

namespace J\ClassNotes {

  class CSII_06_Interfaces extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Interface
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Interfaces in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>An <b>interface</b> guarantees that a class implements certain methods/properties/indexers/events</p>
<p>An interface is a collection of <b>public non-static methods, properties, indexers, or events</b></p>
<p>Only headers (signatures) are listed - no bodies or data</p>
<p>You cannot make an object of an interface</p>
<p>Serves as a "list of responsibilities"</p>
<p>By convention, interface names begin with a letter <b>I</b> to distinguish them from classes</p>
<p>A class can <em>implement</em> multiple interfaces while it can only <em>inherit</em> from one class</p>
<p>An <b>interface</b> can inherit from another interface</p>
<p><b>For example:</b></p>
<ul>
  <li><code>IEnumerable</code></li>
  <li><code>IList</code></li>
  <li><code>ICloneable</code></li>
</ul>
<hr/>

<h2>Syntax</h2>
<pre><code>
public interface IInterfaceName
{
  string PropertyName { get; private set; }
  void MethodName();
}

public class MyClass : IInterfaceName
{
  private string propertyName;
  public string PropertyName 
  {
    get { return propertyName; }
    set { propertyName = value; }
  }

  public void MethodName()
  {
    // Must define this method even if it is empty implementation
  }
}

public class Program
{
  public static Main()
  {
    List&lt;IInterfaceName&gt; list = new List&lt;IInterfaceName&gt;();
    
    list.Add(new MyClass());
    
    foreach(IInterfaceName obj in list)
    {
      // These items (obj) have only the members that are defined in the interface
      obj.MethodName();
      Console.WriteLine("The value of the property is " + obj.PropertyName);
    }
  } 
}
</code></pre>
<h3>For example:</h3>
<pre><code>
public interface ICloneable
{
  public object Clone();
}

public class MyClass : ICloneable
{
  public object Clone()
  {
    return new MyClass();
  }
}
</code></pre>


';

      return $returnValue;
    }

  }
}