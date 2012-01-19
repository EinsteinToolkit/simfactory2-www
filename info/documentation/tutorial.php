<?php $title='Beginners Tutorial';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>This section provides a simple guide for compiling and running an example parameter file for the Einstein Toolkit.</p> 

<p>One complexity of high performance computing is the heterogeneous environments presented by different resources with different core software installations and local setups. For example, Einstein Toolkit codes necessitate compiling with MPI and then running the resulting application in a batch queue. As much as possible of this complexity is hidden in Cactus and accompanying tools such as the Simulation Factory.</p>

<p>This worked example assumes that you are using the NSF TeraGrid resource <a href="http://www.loni.org/systems/system.php?system=QueenBee">Queen Bee</a>. If you don't have an existing account on Queen Bee you can <a href="request.php">request an account</a> to use for these examples.</p>

<h4>Prepare some Tools</h4>

<p>On Queen Bee (qb.loni.org), the <tt>git</tt> client will not be in your path by default. To add this type</p>
<p><tt>soft add +git</tt></p>

<p>Download the <a href="http://cactuscode.org/download/GetComponents">GetComponents</a> script which will checkout all the components of the Einstein Toolkit and ensure it is executable:</p>

<p><tt>wget http://cactuscode.org/download/GetComponents</tt>
<br>
<tt>chmod 755 GetComponents</tt></p>


<p>Download the <a href="https://svn.einsteintoolkit.org/manifest/einsteintoolkit.th">thornlist</a> for the Einstein Toolkit:</p>
							   
<p><tt>wget https://svn.einsteintoolkit.org/manifest/einsteintoolkit.th</tt></p>
	
<h4>Download, Configure, and Build</h4>

<p>Checkout the Einstein Toolkit using anonymous authentication:</p>

<p><tt>./GetComponents -a einsteintoolkit.th</tt></p>													 
<p>(This may take a few minutes.)</p>

<p>This checks out Cactus, the Einstein Toolkit thorns, the Simulation Factory and example parameter
 files into a directory named Cactus.</p>

	
<p>Configure the Simulation Factory</p>

<p><tt>cd Cactus</tt><br>
<tt>cp simfactory/udb.example.pm simfactory/udb.pm</tt>
<br><tt>vi simfactory/udb.pm</tt></p>																		
<p>Edit udb.pm and </p>
<ul>
<li>replace YOUR_LOGIN with your username on Queen Bee
<li>YOUR@EMAIL.ADDRESS with your usual email address 
<li>YOUR_ALLOCATION with your project allocation on Queen Bee 
</ul>
</p>

<p>Compile Executable</p>

<p><tt>./simfactory/sim  build --thornlist=manifest/einsteintoolkit.th</tt></p>

<p>(This may take a few minutes.)</p>

<p>(You may receive an error message that building the utilities
  failed.  This is fine as long as the main executable has been built
  correctly.  You can check this with the command <tt>ls exe</tt>; if
  this shows a file <tt>cactus_sim</tt>, then you are fine.)</p>

<h4>Run a Simulation</h4>

<p>From the Einstein Toolkit directory, create a batch queue script and submit it to queue an example simulation:</p>
	
<p><tt>./simfactory/sim create-submit static_tov --parfile=par/static_tov.par --procs=32 --walltime=8:0:0</tt></p>

<p>To check the status of the simulation, use</p>

<p><tt>./simfactory/sim list-simulations</tt></p>

<h4>Look at Results</h4>

<p>When the simulation is complete, move to the output directory (<tt>XXXX</tt>). You should see output files with the extension XXXX. These are 1D plots of the different grid variables. These can be plotted using e.g. gnuplot. An example plot of the XXXX is shown below.</p>

<h4>Any Problems?</h4>

This example should work smoothly on the TeraGrid machines Queen Bee, Ranger, Kraken and Abe. If you have any problems, please send details to <a href="mailto:users@einsteintoolkit.org">users@einsteintoolkit.org</a></tt>.</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
