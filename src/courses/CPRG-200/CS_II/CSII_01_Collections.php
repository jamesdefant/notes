<?php

namespace J\ClassNotes {

  class CSII_01_Collections extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Collections
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Advanced Collections in C#
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Instead of using a List directly in your class, wrap a List in a class and define your own accessors/setters:</p>
<pre><code>
public class ProductList
{
  private List&lt;Product&gt; products;
  
  public ProductList()
  {
    products = new List&lt;Product&gt;();        
  }
  
  // Lambda expression
  public int Count => products.Count;
  
  public void Add(Product product)
  {
    products.Add(product);
  }
  
  public void Add(string code, string description, decimal price)
  {
    Product p = new Product(code, description, price);
    products.Add(p);
  }
  
  public Product GetProductByIndex(int i) => products[i];
  
  public void Remove(Product product)
  {
    products.Remove(product);
  }
  
  public void Fill() => products = ProductDB.GetProducts();
  
  public void Save() => ProductDB.SaveProducts(products);
}
</code></pre>
<hr/>

<h2>Indexer</h2>
<code>this[int i]</code>
<p>Wrap a List in a class to <b>restrict access</b> and to <b>define custom behaviours</b></p>
<em>Indexers can only be used in a collection of objects</em>
<p>An indexer that uses an int as an index:</p>
<pre><code>
private List&lt;Product&gt; products;

public Product this[int i]
{
  get
  {
  if(i < 0 || i >= products.Count)
  {
    throw new ArgumentOutOfRangeException();
  }
    return product[i];
  }
  set
  {
    products[i] = value;
  }
}
</code></pre>
<p>A read-only indexer that uses a string as an index:</p>
<pre><code>
public Product this[string code]
{
  get
  {
    foreach (Product p in products)
    {
      if(p.Code == code
        return p;
    }
    return null;
  }
}
</code></pre>
<p>A read-only indexer with an expression body:</p>
<pre><code>
public Product this[int i ] => products[i];
</code></pre>
<p>The code is used like this:</p>
<pre><code>
...
ProductList products = new ProductList();

products.Add("CS15", "Murach\'s C# 2015", 56.05m);

Product p = products[0];
</code></pre>


';



      return $returnValue;
    }

  }
}