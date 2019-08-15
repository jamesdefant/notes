<?php

namespace J\ClassNotes {

  class PLSQL_10_Functions extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Functions
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Functions in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Function are like a procedure except that they return a value</p>
<pre><code>
// Define the function
CREATE OR REPLACE FUNCTION getgst(amount NUMBER)
RETURN NUMBER
AS
tax NUMBER(10,2):=0;
BEGIN
tax:=amount*0.05;
RETURN tax;
END;
</code></pre>
<pre><code>
// Call the function
SELECT getgst(100) FROM dual;

// or from the database
SELECT invoice#, invoice_amount, getgst(invoice_amount) FROM ar_invoices;
</code></pre>
<h2>2 Parameter Function</h2>
<pre><code>
// Define it
CREATE OR REPLACE FUNCTION gettax(amount NUMBER, prov CHAR)
  RETURN NUMBER
AS
  tax NUMBER(10,2) := 0;
BEGIN
  IF (prov = \'ab\') THEN
    tax := amount * 0.05;
  ELSIF (prov = \'bc\') THEN
    tax := amount * 0.12;
  ELSE
    tax := amount * 0.10;
  END IF;
RETURN tax;
END;
</code></pre>
<pre><code>
// Call it
SELECT gettax(100, \'ab\') FROM dual;
</code></pre>
<hr>

<h2>Recursion</h2>
<p>A function that calls itself</p>
<p><b>
  To ensure that a recusrsive function doesn\'t go on forever, you must implement a check 
  that will exit the function
</b></p> 
<pre><code>
CREATE OR REPLACE FUNCTION factorial(x NUMBER)
  RETURN NUMBER
AS
BEGIN
  IF (x = 1) THEN
    RETURN 1;
  ELSE
    RETURN x * factorial(x - 1);
  END IF;
END;
</code></pre>
<hr>

<h2>Nested SQL</h2>
<p>Place SQL SELECTs inside a function</p>
<p><b>Make sure to test your SQL first otherwise it may be hard to track down your errors</b></p>
<pre><code>
CREATE OR REPLACE FUNCTION gettotal(sizex CHAR)
  RETURN NUMBER
AS
  total NUMBER(10);
BEGIN
  SELECT sum(inv_qoh) 
    INTO total 
  FROM inventory
  WHERE UPPER(inv_size) = UPPER(sizex);
RETURN total;
END;
/
</code></pre>
<hr>

<h2>Formatting</h2>
<p>Use functions like <code>SUBSTR()</code> to format a phone number like <br>1234567890<br> into <br>(123) 456-7890</p>
<pre><code>
CREATE OR  REPLACE FUNCTION getphone(id NUMBER)
  RETURN VARCHAR2
AS
  phone VARCHAR2(10);
  nicephone VARCHAR2(14);
BEGIN
  SELECT c_dphone INTO phone
    FROM customer
  WHERE c_id = id;
  
  nicephone := \'(\' || SUBSTR(phone, 1, 3) || \') \' || SUBSTR(phone, 4, 3) || \'-\' || SUBSTR(phone, 7, 4);
  RETURN nicephone;
END;
/
</code></pre>
<hr>

<h2>Nested Functions</h2>
<p>Nest a function inside a procedure so that they are grouped logically</p>
<pre><code>
CREATE OR  REPLACE PROCEDURE taxinv
AS
  total number(10,2);
  tax number(10,2);
    FUNCTION getgst(amount NUMBER)
    return number
    AS
    BEGIN
      RETURN amount * 0.05;
    END;
BEGIN
  SELECT SUM(inv_price*inv_qoh) INTO total FROM inventory;
  tax := getgst(total);
  dbms_output.put_line(\'tax on inventory is: \'||tax);
END;
</code></pre>

';

      return $returnValue;
    }

  }
}