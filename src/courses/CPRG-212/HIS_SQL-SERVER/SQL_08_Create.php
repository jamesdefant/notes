<?php

namespace J\ClassNotes {

  class SQL_08_Create extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Create
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
SQL CREATE Command
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = <<< 'CONTENT'
<h2>Intro</h2>
<p>Use the <code>CREATE</code> command to create a table, schema, or database</p>
<pre><code>
CREATE SCHEMA payroll

-- or

CREATE TABLE payroll.timecards
  (sin# NUMERIC(9) PRIMARY KEY,
  starttime DATETIME,
  endtime DATETIME)
</code></pre>

<h2>Add a primary key to two columns</h2>
<pre><code>
CREATE TABLE rainchecks
  (check# NUMERIC(6) PRIMARY KEY,
  cus_name VARCHAR(30) NOT NULL,
  phone NUMERIC(10) CHECK(phone > 0),  -- any clause that can be written in a WHERE 
  raindate DATETIME)
  
CREATE TABLE raincheck_details
  (check# NUMERIC(6) FOREIGN KEY REFERENCES rainchecks(check#),
  item char(3),
  price NUMERIC(10,2),
  PRIMARY KEY(check#, item))  

</code></pre>

<h2>ALTER</h2>
<pre><code>
-- add a column
ALTER TABLE rainchecks
  ADD email VARCHAR(50)
  
-- change a column type  
ALTER TABLE rainchecks
  ALTER COLUMN cus_name VARCHAR(40)
  
-- delete a column  
ALTER TABLE rainchecks
  DROP COLUMN email
  
-- add a constraint (use a good name)
ALTER TABLE rainchecks
  ADD CONSTRAINT need_price
  CHECK (price > 0)
  
-- delete a constraint
ALTER TABLE rainchecks
  DROP CONSTRAINT need_price         
</code></pre>
CONTENT;

      return $returnValue;
    }

  }
}