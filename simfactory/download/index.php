<?php $title='Download';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>The Simulation Factory can be downloaded using git.  Note that it
is included with the <a href = "http://einsteintoolkit.org">Einstein
Toolkit</a>, so if you are using the toolkit, you probably already
have it in the directory Cactus/simfactory.</p>

<h4>SimFactory 2 (current version)</h4>


<p>Stable:</p>

<pre>git clone -b ET_2022_11 https://bitbucket.org/simfactory/simfactory2.git</pre>

<p>Development:</p>

<pre>git clone https://bitbucket.org/simfactory/simfactory2.git</pre>

<h4>SimFactory 1 (not maintained)</h4>

This version of SimFactory was discontinued in October 2011 and will
no longer be supported.  Please upgrade to SimFactory 2 instead.

<p>Stable:</p>

<pre>svn checkout <a href = "https://svn.cct.lsu.edu/repos/numrel/simfactory/branches/ET_2010_06">https://svn.cct.lsu.edu/repos/numrel/simfactory/branches/ET_2010_06</a> simfactory</pre>

<p>Development:</p>

<pre>svn checkout <a href = "https://svn.cct.lsu.edu/repos/numrel/simfactory/trunk">https://svn.cct.lsu.edu/repos/numrel/simfactory/trunk</a> simfactory</pre>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
