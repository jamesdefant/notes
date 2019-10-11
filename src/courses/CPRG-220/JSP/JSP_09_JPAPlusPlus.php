<?php

namespace J\ClassNotes {

  class JSP_09_JPAPlusPlus extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
JPA ++
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
More Than One Model with JPA
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>The Problem</h2>
<p>In the last page we added <b>one <code>Agent</code> model class</b> to our <b>RESTApp</b> application</p>
<p>
  The problem with this is that when we generate a single entity at a time, the relationships are not represented<br>
  <b>and</b><br>
  If we generate more than one entity at a time and those entities are constrained to one another in the database 
  (foreign keys), the method we used to create JSON strings will simply not work
</p>

<h2>An Example</h2>
<p>Everything in the travelexperts database is too long to show what only needs to be a simple example</p>
<p>
  We\'ll create two tables that have a constraint between them:<br>
  <em>
    This is my export from phpmyadmin<br>
    You can copy this into a <code>.sql</code> file and import it into a database
    in <b>phpmyadmin</b>
  </em>
</p>

<div>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseCodeExample" aria-expanded="false" aria-controls="collapseCodeExample">
    Toggle the MySQL export script
  </button>
  <div class="collapse" id="collapseCodeExample">
    <pre><code>
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 10:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelexperts_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `CountryId` int(11) NOT NULL,
  `CountryName` varchar(25) NOT NULL,
  `Age` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`CountryId`, `CountryName`, `Age`) VALUES
(1, \'Canada\', NULL),
(2, \'United States\', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provstates`
--

CREATE TABLE `provstates` (
  `ProvStateCode` varchar(2) NOT NULL,
  `ProvStateName` varchar(35) NOT NULL,
  `CountryId` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provstates`
--

INSERT INTO `provstates` (`ProvStateCode`, `ProvStateName`, `CountryId`) VALUES
(\'AB\', \'Alberta\', 1),
(\'AK\', \'Alaska\', 2),
(\'AL\', \'Alabama\', 2),
(\'AR\', \'Arkansas\', 2),
(\'AZ\', \'Arizona\', 2),
(\'BC\', \'British Columbia\', 1),
(\'CA\', \'California\', 2),
(\'CO\', \'Colorado\', 2),
(\'CT\', \'Connecticut\', 2),
(\'DE\', \'Delaware\', 2),
(\'FL\', \'Florida\', 2),
(\'GA\', \'Georgia\', 2),
(\'HI\', \'Hawaii\', 2),
(\'IA\', \'Iowa\', 2),
(\'ID\', \'Idaho\', 2),
(\'IL\', \'Illinois\', 2),
(\'IN\', \'Indiana\', 2),
(\'KS\', \'Kansas\', 2),
(\'KY\', \'Kentucky\', 2),
(\'LA\', \'Louisiana\', 2),
(\'MA\', \'Massechusetts\', 2),
(\'MB\', \'Manitoba\', 1),
(\'MD\', \'Maryland\', 2),
(\'ME\', \'Maine\', 2),
(\'MI\', \'Michigan\', 2),
(\'MN\', \'Minnesota\', 2),
(\'MO\', \'Missouri\', 2),
(\'MS\', \'Mississippi\', 2),
(\'MT\', \'Montana\', 2),
(\'NB\', \'New Brunswick\', 1),
(\'NC\', \'North Carolina\', 2),
(\'ND\', \'North Dakota\', 2),
(\'NE\', \'Nebraska\', 2),
(\'NH\', \'New Hampshire\', 2),
(\'NJ\', \'New Jersey\', 2),
(\'NL\', \'Newfoundland & Labrador\', 1),
(\'NM\', \'New Mexico\', 2),
(\'NS\', \'Nova Scotia\', 1),
(\'NT\', \'Northwest Territories\', 1),
(\'NU\', \'Nunavut\', 1),
(\'NV\', \'Nevada\', 2),
(\'NY\', \'New York\', 2),
(\'OH\', \'Ohio\', 2),
(\'OK\', \'Oklahoma\', 2),
(\'ON\', \'Ontario\', 1),
(\'OR\', \'Oregon\', 2),
(\'PA\', \'Pennsylvania\', 2),
(\'PE\', \'Prince Edward Island\', 1),
(\'QC\', \'Quebec\', 1),
(\'RI\', \'Rhode Island\', 2),
(\'SC\', \'South Carolina\', 2),
(\'SD\', \'South Dakota\', 2),
(\'SK\', \'Saskatchewan\', 1),
(\'TN\', \'Tennessee\', 2),
(\'TX\', \'Texas\', 2),
(\'UT\', \'Utah\', 2),
(\'VA\', \'Virginia\', 2),
(\'VT\', \'Vermont\', 2),
(\'WA\', \'Washington\', 2),
(\'WI\', \'Wisconsin\', 2),
(\'WV\', \'West Virginia\', 2),
(\'WY\', \'Wyoming\', 2),
(\'YT\', \'Yukon\', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `provstates`
--
ALTER TABLE `provstates`
  ADD PRIMARY KEY (`ProvStateCode`),
  ADD KEY `countryId` (`CountryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `provstates`
--
ALTER TABLE `provstates`
  ADD CONSTRAINT `countryId` FOREIGN KEY (`CountryId`) REFERENCES `countries` (`CountryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
    </code></pre>
  </div>
</div>
<hr>

<h2>The Data</h2>
<p>
  This is just 2 tables - each with a few columns:
  <ul>
    <li>
      <kbd>countries</kbd>
      <ul>
        <li><b>CountryId</b> - <code>int(3) PRIMARY KEY AUTO_INCREMENT</code></li>
        <li><b>CountryName</b> - <code>varchar(25)</code></li>
        <li><b>Age</b> - <code>int(4) NULL</code> - this is just to make an example of NULL</li>
      </ul>
    </li>
    <li>
      <kbd>provstates</kbd>
      <ul>
        <li><b>ProvStateCode</b> - <code>varchar(2) PRIMARY KEY</code></li>
        <li><b>ProvStateName</b> - <code>varchar(25)</code></li>
        <li><b>CountryId</b> - <code>int(3) foreign key</code></li>
      </ul>
    </li>
  </ul>
</p>

<h2>Generate Entities</h2>
<p>
  Now if we open a project and generate <b>Entities</b> from these tables, this is what we\'ll get:<br>
  <em>I\'m ommiting <b>getters</b> and <b>setters</b> to keep things clear</em>
</p>
<p><code>Country.java</code></p>
<pre><code>
package model;

import java.io.Serializable;
import javax.persistence.*;
import java.util.List;


/**
 * The persistent class for the countries database table.
 * 
 */
@Entity
@Table(name="countries")
@NamedQuery(name="Country.findAll", query="SELECT c FROM Country c")
public class Country implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int countryId;

	private int age;

	private String countryName;

	//bi-directional many-to-one association to Provstate
	@OneToMany(mappedBy="country")
	private List<Provstate> provstates;

	public Country() {
	}

  ... getters and setters

	public List<Provstate> getProvstates() {
		return this.provstates;
	}

	public void setProvstates(List<Provstate> provstates) {
		this.provstates = provstates;
	}

	public Provstate addProvstate(Provstate provstate) {
		getProvstates().add(provstate);
		provstate.setCountry(this);

		return provstate;
	}

	public Provstate removeProvstate(Provstate provstate) {
		getProvstates().remove(provstate);
		provstate.setCountry(null);

		return provstate;
	}
}
</code></pre>
<p><code>Provstate.java</code></p>
<pre><code>
package model;

import java.io.Serializable;
import javax.persistence.*;


/**
 * The persistent class for the provstates database table.
 * 
 */
@Entity
@Table(name="provstates")
@NamedQuery(name="Provstate.findAll", query="SELECT p FROM Provstate p")
public class Provstate implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private String provStateCode;

	private String provStateName;

	//bi-directional many-to-one association to Country
	@ManyToOne
	@JoinColumn(name="CountryId")
	private Country country;

	public Provstate() {
	}

  ... getters and setters

	public Country getCountry() {
		return this.country;
	}

	public void setCountry(Country country) {
		this.country = country;
	}

}
</code></pre>

<h2>Analysis</h2>
<p>
  What we see in these two entity classes is that:
  <ul> 
    <li>
      in the <b>Country</b> class:
      <ul>
        <li>
          There is a <code>List&lt;Provestates></code> field as well as methods to
          <code>set()</code>, <code>add()</code>, and <code>remove()</code> them from the list
        </li>
        <li>
          The <code>NULL</code> column <b>Age</b> is still represented by an <code>int</code> instead of an 
          <code>Integer</code>
        </li>
      </ul>
    </li>
    <li>
      in the <b>Provstates</b> class:
      <ul>
        <li>
          The foreign key <code>CountryId</code> is represented as a <code>Country</code> object instead of 
          <code>int</code>
        </li>
      </ul>
    </li>
  </ul> 
</p>
<p>
  <b>Gson cannot implicitly interpret nested objects or arrays into JSON data</b><br>
  <em>It fails when trying to turn these classes into JSON</em>
</p>

<h2>TypeAdapter</h2>
<p>
  What we need to do is write an <b>explicit JSON adapter</b> to make <b>Gson</b> read and write JSON the way we want 
  it to
</p>
<ol>  
  <li>Make sure you have the <b>Gson .jar</b> file loaded into your project</li>
  <li>Create a new <b>Java class</b> - right-click the project and select <kbd>New</kbd> => <kbd>Class</kbd></li>
  <li>Name the class <b>CountryAdapter</b> and click <kbd>Finish</kbd></li>
  <li>
    <b>Extend</b> the class from <code>TypeAdapter&lt;Country></code><br>
    <b>Import the TypeAdapter</b> from com.google.gson by hovering over TypeAdapter<br>
    <b>Implement the abstract methods</b> by hovering over CountryAdapter<br>
    <em>It should look like this (I altered the variable names):</em>
    ';
      $returnValue .= ' 
    <pre><code>
package model;

import java.io.IOException;

import com.google.gson.TypeAdapter;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;

public class CountryAdapter extends TypeAdapter&lt;Country> {

	@Override
	public Country read(JsonReader in) throws IOException {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public void write(JsonWriter out, Country country) throws IOException {
		// TODO Auto-generated method stub
		
	}
}    
    </code></pre>
  </li>
</ol>

<h2>JsonReader</h2>
<p>The <code>JsonReader</code> object moves it\'s way through the JSON and analyzes one token at a time</p>
<p>
  <a href="https://github.com/google/gson/blob/master/gson/src/main/java/com/google/gson/stream/JsonReader.java" 
    target="_blank">https://github.com/google/gson/blob/master/gson/src/main/java/com/google/gson/stream/JsonReader.java
  </a> 
</p>
<p>
  It has many methods to help make sense of the JSON data:
  <ul>
    <li><code>peek()</code> - Returns the type of the next token without consuming it</li>
    <li><code>hasNext()</code> - Returns true if the current array or object has another element</li>
    <li>
      <code>nextName()</code> - Returns the next token, a {@link com.google.gson.stream.JsonToken#NAME property name}, 
      and consumes it
    </li>
    <li>
      <code>nextString()</code> -  Returns the {@link com.google.gson.stream.JsonToken#STRING string} value of 
      the next token, consuming it. If the next token is a number, this method will return its string form
    </li>
    <li>
      <code>nextInt()</code> - Returns the {@link com.google.gson.stream.JsonToken#NUMBER int} value of the next token,
      consuming it. If the next token is a string, this method will attempt to parse it as an int. If the next token\'s 
      numeric value cannot be exactly represented by a Java {@code int}, this method throws
    </li>
    <li><code>beginObject()</code> - Consumes the next token and asserts that it is the beginning of a new object</li>
    <li><code>endObject()</code> - Consumes the next token and asserts that it is the end of the current object</li>
  </ul>
</p>

<h2>read()</h2>
<p><code>read()</code> <b>interprets a JSON string and returns an object</b></p>

<h2>write()</h2>
<p><code>write()</code> interprets an object and returns a JSON string</p>
';

      return $returnValue;
    }

  }
}