<?php

namespace J\ClassNotes {

  class PLSQL_13_Triggers extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Triggers
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Triggers in PL SQL
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $invoicesEntity = [
          'inv# (PK)', 'amount', 'prov'
      ];
      $prov_totalsEntity = [
          'prov (PK)', 'totals'
      ];

      $returnValue = '
<h2>Intro</h2>
<p>A <b>Trigger</b> is a program that runs when a table is changed</p>
<p>There are 3 types:</p>
<ul>
  <li>Before</li>
  <li>After</li>
  <li>Instead of</li>
</ul>    
<p>Reasons to use:</p>
<ul>
  <li>Start other programs</li>
  <li>Send changes to a data warehouse</li>
  <li>Send changes to other locations</li>
  <li>Monitor what the users are doing (user activity)</li>
  <li>Extra editing (check user\'s credit history)</li>
  <li>Extra security</li>
  <p>Allow changes to views</p>
</ul> 
<hr>

<h2>Trigger Types</h2>
<ul>
  <li><b>Instead Of</b> - Triggered before data is written to memory (buffer)</li>
  <li><b>Before</b> - Catches the data before it gets written to disk</li>
  <li><b>After</b> - Runs after the data is written to disk</li>
</ul>
<hr>

<h2>Keywords</h2>
<p>Allow the trigger to check what action is being performed</p>
<ul>
  <li><code>INSERTING</code></li>
  <li><code>UPDATING</code></li>
  <li><code>DELETING</code></li>
</ul>

<h2>Syntax</h2>
<pre><code>
CREATE OR REPLACE TRIGGER [triggername]
[trigger_type] [sql_query] ON [tablename]
FOR EACH ROW
DECLARE (optional - variables)
BEGIN
  -- Don\'t leave this empty
END;
/
</code></pre>
<hr>

<h2>BEFORE</h2>
<p>Check if the price is changed more than 10 percent</p>
<p><b>Notice the <code>:NEW</code> and <code>:OLD</code> keywords</b></p>
<pre><code>
CREATE OR REPLACE TRIGGER watch_inv
BEFORE INSERT OR UPDATE OR DELETE ON inventory
FOR EACH ROW
BEGIN
    
    IF (:NEW.inv_price > 1.1 * :OLD.inv_price) THEN
    
      raise_application_error(-20001, \'>> CANNOT INCREASE MORE THAN 10 PERCENT\');
      
    END IF;
    
END;
</code></pre>
<hr>
<h2>Check a date</h2>
<pre><code>
CREATE OR REPLACE TRIGGER watchcat
BEFORE INSERT ON category
FOR EACH ROW
BEGIN
  IF(to_char(sysdate, \'dy\') = \'fri\') THEN
    raise_application_error(-20001, \'>> CANNOT ADD CATEGORIES TODAY\');
  END IF;
END;
/
</code></pre>

<h2>Build a log table</h2>
<p>Does <b>not</b> need a primary key</p>
<pre><code>
CREATE TABLE log
(
  loguser VARCHAR2(50),
  logdate DATE,
  loglocation VARCHAR(50),
  logreason(600)
);
</code></pre>
<p><b>Build the trigger</b></p>
<pre><code>
CREATE OR REPLACE TRIGGER loginv
BEFORE UPDATE ON inventory
FOR EACH ROW
BEGIN

  INSERT INTO log 
  VALUES(user, 
         sysdate, 
         userenv(\'terminal\'), 
         \'Inventory changed key: \'||:OLD.inv_id||\' Old Price: \'||:OLD.inv_price||\' New Price: \'||:NEW.inv_price)

END;
/
</code></pre>

<h2>Instead Of</h2>
<p>Add an <code>INSTEAD OF</code> trigger on a view to intercept an update and direct it to the actual table instead</p>
<pre><code>
CREATE OR REPLACE TRIGGER addpeople
INSTEAD OF INSERT ON people
FOR EACH ROW
DECLARE
  nextemp NUMBER(6);
  deptnum NUMBER(3);
BEGIN

  SELECT MAX(empno) + 1 INTO nextemp FROM emp;
  SELECT deptno INTO deptnum FROM dept
    WHERE UPPER(dname) = UPPER(:NEW.dname);
  INSERT INTO emp VALUES(nextemp, :NEW.ename, :NEW.job, null, sysdate, :NEW.sal, 0, deptnum)

END;
/
</code></pre>

<h2>An Example</h2>
<div class="container">
  <div class="row">
    <h3>A table that automatically updates a data warehouse</h3>
    <hr>
    
    <div class="col-md-6">
      <h5>Production Database</h5>
      <h6>invoices table</h6>
      '. \WriteHTML::getClassDiagram('invoices', $invoicesEntity) .'
    </div>
    
    <div class="col-md-6">
      <h5>Data Warehouse</h5>
      <h6>prov_totals table</h6>
      '. \WriteHTML::getClassDiagram('prov_totals', $prov_totalsEntity) .'
    </div>
    
  </div>
    <div class="row">
    
    <div class="col-md-6">
      <ul>
        <li><b>INSERT 1, 100, AB</b></li>
        <li><b>INSERT 2, 200, AB</b></li>
        <li><b>INSERT 3, 300, BC</b></li>
        <li><b>INSERT 4, 400, AB</b></li>
        <li><b>DELETE #2</b></li>
        <li><b>UPDATE #4 - change 400 -> 375</b></li>
        <li><b>UPDATE #1 - change AB -> BC & 100 -> 80</b></li>
      </ul>
    </div>
    
    <div class="col-md-6">
      <ul>
        <li><b>INSERT AB, 100</b></li>
        <li><b>UPDATE AB, + 200</b></li>
        <li><b>INSERT BC, 300</b></li>
        <li><b>UPDATE AB, + 400</b></li>
        <li><b></b></li>
        <li><b></b></li>
        <li><b></b></li>
      </ul>
    </div>
    
  </div>

</div>
<pre><code>
CREATE OR REPLACE TRIGGER warehouse
BEFORE INSERT OR UPDATE OR DELETE ON invoices
FOR EACH ROW
DECLARE

  counter NUMBER(6);

BEGIN

  IF INSERTING THEN
  
    SELECT COUNT(*) INTO counter FROM prov_totals
      WHERE prov = :NEW.prov;
      
    IF(counter = 0) THEN    
      INSERT INTO prov_totals VALUES (:NEW.prov, :NEW.amount);
    ELSE
      UPDATE prov_totals 
        SET total = total + :new.amount
          WHERE prov = :NEW.prov;    
    END IF;
  
  ELSIF DELETING THEN
  
    UPDATE prov_totals 
      SET total = total - :OLD.amount
        WHERE prov = :OLD.prov; 
  
  ELSIF UPDATING THEN
  
    IF(:NEW.prov = :OLD.prov) THEN  --add difference to total
      UPDATE prov_totals 
        SET total = total + (:NEW.amount - :OLD.amount)
          WHERE prov = :OLD.prov;
    ELSE  --remove old amount from old prov and put new amount in new prov
      UPDATE prov_totals 
        SET total = total - :OLD.amount
          WHERE prov = :OLD.prov;
          
      -- need to determine if the new prov exists in warehouse
      -- and do insert or update
        
      IF(counter = 0) THEN    
        INSERT INTO prov_totals VALUES (:NEW.prov, :NEW.amount);
      ELSE
        UPDATE prov_totals 
          SET total = total + :new.amount
            WHERE prov = :NEW.prov;    
      END IF;
    
    END IF;
  
  END IF;
  
END;
/ 

</code></pre>
';

      return $returnValue;
    }

  }
}