<?php

namespace J\ClassNotes {

  class CSII_03_Events extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Events
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Events in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Events use <b>Delegates</b></p>
<p>To define an <b>Event</b> we must define a <b>Delegate</b> to handle the event</p>
<p>A <b>Delegate</b> is a type that refere to methods with specific signature (return type and parameter list)</p>
<hr/>

<h2>Delgates</h2>
<b>Syntax:</b>
<pre><code>
public delegate returnType DelegateName([parameterList]);
</code></pre>
<b>For example:</b>
<pre><code>
public class ProductList
{
  // Declare the delegate
  public delegate void ChangeHandler(ProductList products);
}

public partial class frmProducts : Form
{
  // Create the delegate and identify the method it uses
  ProductList.ChangeHandler myDelegate = new ProductList.ChangeHandler(PrintToConsole);
  
  // Define a method with the same signature as the delegate
  private static void PrintToConsole(ProductList products)
  {
    Console.WriteLine("The product list has changed");
    
    for(int i = 0; i < products.Count; i++)
    {
      Product p = products[i];
      Console.WriteLine(p.GetDisplayText("\t"));
    }
  }
  
  private void  frmProducts_Load(object sender, EventArgs e)
  {
    //Create the argument that\'s required by the delegate
    ProductList products = new ProductList();
    
    // Add products to the product list
    products.Add("BJWN", "Murach\'s C# 2015", 56.05m);
    
    // Call the delegate and pass the required argument
    myDelegate(products);
  }
}  
</code></pre>
<hr/>

<h2>Events</h2>
<b>Syntax:</b>
<pre><code>
public event Delgate EventName;
</code></pre>
<b>For example:</b>
<pre><code>
public class ProductList
{
  public delegate void ChangeHandler(ProductList products);
  
  // Declare the event
  public event ChangeHandler Changed;
  
  public void Add(Product product)
  {
    products.Add(product);
    
    // Raise the event
    Changed(this);
  }
}

public partial class frmProducts : Form
{
  ...
  ProductList products = new ProductList();
  
  private void  frmProducts_Load(object sender, EventArgs e)
  {
    // Wire (subscribe to) the event to the method that handles teh event
    products.Changed += new ProductList.ChangeHandler(PrintToConsole); 
  } 
  
  // The method that handles the event
  private static void PrintToConsole(ProductList products)
  {
    Console.WriteLine("The product list has changed");
    
    for(int i = 0; i < products.Count; i++)
    {
      Product p = products[i];
      Console.WriteLine(p.GetDisplayText("\t"));
    }
  }
}
</code></pre>
<hr/>

<h2>Anonymous delgate</h2>
<p>Use an <b>Anonymous method</b> to create a <b>delegate</b>:</p>
<pre><code>
ProductList.CHangeHandler myDelegate = delegate (ProductList products)
{
  Console.WriteLine("The product list has changed");   
  for(int i = 0; i < products.Count; i++)
  {...}
}

myDelegate(products);
</code></pre>

<h2>Lambda delegate</h2>
<p>Use a <b>lambda expression</b> to create a <b>delegate</b>:</p>
<pre><code>
ProductList.ChangeHandler myDelegate = products => 
{
  Console.WriteLine("The product list has changed");   
  for(int i = 0; i < products.Count; i++)
  {...}
};

myDelegate(products);
</code></pre>
<hr/>

<h2>Anonymous subscription</h2>
<p>Use an <b>anonymous method</b> to wire (subscribe to) an <b>event</b>:</p>
<pre><code>
products.Changed += delegate (ProductList products)
{
  Console.WriteLine("The product list has changed");   
  for(int i = 0; i < products.Count; i++)
  {...}
};
</code></pre>

<h2>Lambda subscription</h2>
<p>Use a <b>Lambda expression</b> to wire (subscribe to) an <b>event</b>:</p>
<pre><code>
products.Changed += products =>
{
  Console.WriteLine("The product list has changed");   
  for(int i = 0; i < products.Count; i++)
  {...}
};
</code></pre>

';

      return $returnValue;
    }

  }
}