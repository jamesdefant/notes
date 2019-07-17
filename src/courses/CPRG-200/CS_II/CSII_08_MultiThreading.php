<?php

namespace J\ClassNotes {

  class CSII_08_MultiThreading extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Threads
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Processes and Threads
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Operating system seperates different running applications into <b>processes</b></p>
<p>Processes are fully independent</p>
<p>A process can have one or more <b>threads</b> running within it</p>
<p>Each thread gets it\'s <b>own memory stack</b></p>
<p>
  Threads <b>share heap memory</b> with other threads running in the same application - 
  facilitates communication between threads - via reference variables
</p>
<hr/>

<h2>Preemptive Multitasking</h2>
<p>Thread is a basic unit of work to which the operating system can allocate processor time</p>
<p>
  Windows: <b>preemptive multitasking</b> - effect of simultaneous execution of multiple threads
  (possibly by multiple processors)  
</p>
<p>Each processor time is divided into slices which are assigned to threads</p>
<p>
  <b>Context switch</b> - the context of the pre-empted thread is saved,
  so when it resumes it starts from that context
</p>
<hr/>

<h2>Uses for Threads</h2>
<p>
  Communicate to a Web server or database - allow client requests to be processed
  simultaneously (ASP.NET, WCF and Web services do it automatically)  
</p>
<p>Perform long-running or complex opeerations - optimized CPU time usage</p>
<p>Allow the user interface to remaain responsive while performing other tasks in the background</p>
<p>
  Parallel programming - special algorithms designed to run intense calculations
  on multicore or multiprocessor computers
</p>
<hr/>

<h2>Thread Issues</h2>
<p>Intera=ction of threads via shared data increases complexity</p>
<p>Resource and CPU cost in scheduling and switching threads</p>
<p>Possibility of intermittent and non-reproducible bugs
  <ul>
    <li><b>Non-deterministic</b> outcomes</li>
    <li><b>Deadlock</b> - two or more threads waiting for each other</li>
    <li><b>Starvation</b> - one thread never gets a required resource</li>
  </ul>
</p>
<hr/>

<h2>An example:</h2>
<pre><code>
const int NUM_TIMES = 5000;

static void Main(string[] args)
{
  Thread t = new Thread(WriteY);
  t.Start();
  
  for(int i = 0; i < NUM_TIMES; i++)
  {
    Console.WriteKey("X");
  }
  
  // waits for thread t to end before executing Console.WriteLine
  t.Join();
  
  Console.WriteLine("\nPress any key");
  Console.ReadKey();
}

private void WriteY()
{
  for(int i = 0; i < NUM_TIMES; i++)
  {
    Console.WriteKey("Y");
  }
}
</code></pre>
<hr/>

<h2>Thread Safety</h2>
<p>Protecting resources from concurrent access by multiple threads</p>
<p><b>Locking</b>: Obtain exclusive lock before writing a shared variable</p>
<p>
  When two threads simultaneously contend a <b>lock</b>, one thread waits, or blocks,
  until the lock becomes available
</p>
<p>Only one thread canenter the critical section of code at a time</p>
<p>Code that\'s protected in such a manner is called <b>thread-safe</b></p>
<p>Block thread does not consume CPU resources (<b>thread scheduler</b> takes care of it)</p>

<h3>Lock statement</h3>
<h3>IsAlive property</h3>
<h3>Join, Yield, Sleep Methods</h3>

<h2>Tasks</h2>
<p>Task represents an asynchronous operation</p>
<p>Tasks are created by passing a method or delegate to the constructor:</p>
<p><code>Task t = new Task(DoIt);</code></p>
<p>Can have more options, for example long running tasks can be run in a seperate thread (hint to comiler):</p>
<pre><code>
Task t = new Task(DoIt, TaskCreationOptions.LongRunning);
</code></pre>
<h2>Running Tasks</h2>
<p>Call <code>Start()</code> to queue the task for execution on the thread pool</p>
<pre><code>
Task t = new Task(DoIt);
t.Start();
</code></pre>
<p>...or use Factory.StartNew() to create <b>and run</b> a task:</p>
<pre><code>
Task t = Task.Factory.StartNew(DoIt);
</code></pre>
<hr/>

<h2>Async and Await</h2>
<p>kudvenkat - youtube </p>

';

      return $returnValue;
    }

  }
}