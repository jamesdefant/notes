<?php

namespace J\ClassNotes {

  class PLSQL_13_Formatting extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Formatting
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Formatting a Report in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Create a report like this:</p>
<pre><code>
Bob Smith
    123 Main St
    Calgary AB  T3N5YH
            ORDER     AMOUNT
            1         100.00
            2         150.00

Wendy Testerburger
    543 Pine Rd
    Calgary AB  T3N5YH
            ORDER     AMOUNT
            1         100.00
            2         150.00
</code></pre>

<h2>Create a print procedure</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE print(datax VARCHAR2)
AS
BEGIN
  DBMS_OUTPUT.PUT_LINE(datax);
END;
/
</code></pre>

<h2>Create the heading</h2>
<pre><code>
CREATE OR REPLACE PROCEDURE fancy
AS
BEGIN

  FOR x IN (SELECT * FROM customer) LOOP
    print(x.c_first||\' \'||x.c_last);
    print(x.c_address);
    print(x.c_city||\', \'||x.c_state||CHR(9)||x.c_zip);
    print(CHR(9)||\'Order\'||CHR(9)||\'Amount\');
    
    DBMS_OUTPUT.PUT(CHR(10));
  END LOOP;
  
END;
/
</code></pre>
<hr>

<h2>Determine the correct SQL</h2>
<pre><code>
SELECT o_id,
       SUM(ol_quantity * inv_price) AS total_price
   FROM (order_line NATURAL JOIN inventory)
    NATURAL JOIN orders
  WHERE c_id = 4
  GROUP BY o_id;
/
</code></pre>
<hr>

<h2>Insert the SQL</h2>
<p><b>Don\'t forget to reset the total between each customer</b></p>
<pre><code>
CREATE OR REPLACE PROCEDURE fancy
AS

  total NUMBER(10,2) := 0;
  fintotal NUMBER(10,2) := 0;
  
BEGIN

  FOR x IN (SELECT * FROM customer) LOOP
    print(x.c_first||\' \'||x.c_last);
    print(x.c_address);
    print(x.c_city||\', \'||x.c_state||CHR(9)||x.c_zip);
    print(CHR(9)||\'Order\'||CHR(9)||\'Amount\');
    
    FOR y IN (SELECT o_id,
                     SUM(ol_quantity * inv_price) AS total_price
                FROM (order_line NATURAL JOIN inventory)
                  NATURAL JOIN orders
                WHERE c_id = x.c_id
                GROUP BY o_id
                ORDER BY o_id
     ) LOOP
              
      print(CHR(9)||y.o_id||CHR(9)||y.total_price);
      total := total + y.total_price;
      fintotal := fintotal + y.total_price;
     
    END LOOP;
    
    print(CHR(9)||CHR(9)||CHR(9)||CHR(9)||\'Total: \'||total);   
    total := 0;
     
    DBMS_OUTPUT.PUT(CHR(10));
    
  END LOOP;
  
  print(\'Final Total: \'||fintotal);
  
END;
/
</code></pre>
<hr>

<h2>The Final Procedure</h2>
<p><b>
  This still shows customers with no orders so lets check whether or the customer has made one - 
  throw the whole shebang in an IF statement
</b></p>
<pre><code>
CREATE OR REPLACE PROCEDURE fancy
AS

  total NUMBER(10,2) := 0;
  fintotal NUMBER(10,2) := 0;
  counter NUMBER(6);
  
BEGIN

  FOR x IN (SELECT * FROM customer) LOOP
  
    SELECT COUNT(*) INTO counter
      FROM orders
      WHERE c_id = x.c_id;
      
    IF (counter > 0) THEN
  
      print(x.c_first||\' \'||x.c_last);
      print(x.c_address);
      print(x.c_city||\', \'||x.c_state||CHR(9)||x.c_zip);
      print(CHR(9)||\'Order\'||CHR(9)||\'Amount\');
      
      FOR y IN (SELECT o_id,
                       SUM(ol_quantity * inv_price) AS total_price
                  FROM (order_line NATURAL JOIN inventory)
                    NATURAL JOIN orders
                  WHERE c_id = x.c_id
                  GROUP BY o_id
                  ORDER BY o_id
       ) LOOP
                
        print(CHR(9)||y.o_id||CHR(9)||y.total_price);
        total := total + y.total_price;
        fintotal := fintotal + y.total_price;
       
      END LOOP;
      
      print(CHR(9)||CHR(9)||CHR(9)||CHR(9)||\'Total: \'|| total);   
      total := 0;
    
    END IF;
    
    DBMS_OUTPUT.PUT(CHR(10));
    
  END LOOP;
  
  print(\'Final Total: \'||fintotal);
  
END;
/
</code></pre>
<hr>


';

      return $returnValue;
    }

  }
}