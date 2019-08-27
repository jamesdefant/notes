<?php

namespace J\ClassNotes {

  class LNX_09_Scripting extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Scripting
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Scripting in Bash Shell
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>A script is a small, text based program that is executable. It is a collection of shell commands</p>
<p>There are many scripting languages such as:</p>
<ul>
  <li>Bash</li>
  <li>Perl</li>
  <li>PHP</li>
  <li>Powershell</li>
</ul>
<p>Script files <strong>must be executable.</strong> Either modify the file permissions:</p>
<pre><code>
chmod a+x script.sh

chmod 777 script.sh
</code></pre>
<p>..or launch it with the <kbd>sh</kbd> command</p>
<pre><code>
sh script.sh
</code></pre>
<hr>

<h2>Syntax</h2>
<p><em>The <code>#!/bin/bash</code> tells other shells to open a new bash shell to open this script</em></p>
<pre><code>
#!/bin/bash
echo "Hello World"
</code></pre>
<hr>

<h2>Variables</h2>
<p><em>Variables are loosely typed. Keep \'em in CAPS to make them obvious. <b>No whitespace!</b></em></p>
<pre><code>
#!/bin/bash
SUBJECT=Linux
echo "My favourite subject is $SUBJECT"
</code></pre>

<h4>Use the output of a shell command as the value in a variable</h4>
<p><em>Wrap the shell command in "back ticks"</em></p>
<pre><code>
#!/bin/bash
CURRENT_DIR=`pwd`
echo "Your current directory is $CURRENT_DIR"
</code></pre>
<hr>

<h2>Input</h2>
<p><em>Get input from the user with the <kbd>read</kbd> command</em></p>
<pre><code>
#!/bin/bash
echo "What country are you in?"
read COUNTRY
echo "You\'re from $COUNTRY"
</code></pre>
<hr>

<h2>Arguments</h2>
<p><em>Pass arguments to the script</em></p>
<pre><code>
#!/bin/bash
echo "You passed me $# arguments"
echo "The first argument is $#"
</code></pre>
<hr>

<h2>Decisions</h2>
<p>If statement</p>
<pre><code>
#!/bin/bash
if  [ $# -gt 1 ] then
  echo "Argument count is greater than one"
elif [ $# -eq 1 ] then   
  echo "There is one argument"
else
  echo "No arguments!!"  
fi
</code></pre>
<p><b>Switch</b></p>
<pre><code>
#!/bin/bash
case "$#" in
Linux)
  echo "Linux rules"
  ;;
Windows)
  echo "Windows sucks"
  ;;
Mac)
  echo "Fuck you, Apple"
  ;;
*)
  echo "Getting off the grid"
  ;;
esac  
</code></pre>
<hr>

<h2>Loops</h2>
<p>Iterate over an array</p>
<pre><code>
#!/bin/bash
NAMES="bob sally larry wilma"
for N in $NAMES; do
  echo "Hello, $N!"
done
</code></pre>
<p>Counters / while loop. <b>Beware the whitespaces in assignment operators!!</b></p>
<pre><code>
#!/bin/bash
X=0
while [ $X -le 10 ]; do
  echo "The count is $X"
  X=$[$X+1]
done  
</code></pre>
';

      return $returnValue;
    }

  }
}