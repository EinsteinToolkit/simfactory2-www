<?php $title='Resources';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h3>Requirements</h3>
<p>
The The Simulation Factory has been tested on many different large-scale production resources and can be compiled and run on just about any laptop, workstation, cluster or supercomputer with standard HPC software installed. The main requirements are:
</p>

<ul>

<li> <b>Client tools for Source Code Repositories:</b> CVS, SVN and git (used by GetCactus)</li>

<li> <b>Compilers:</b> C, C++ and Fortran 90</li>

<li> <b>MPI implementation:</b> This is needed for the Carpet driver (the PUGH driver can be used for single core development on machines without MPI)</li>

<li><b>Standard development tools:</b>  Perl, etc.</li>

<li> <b>Operating System:</b> Cactus and the The Simulation Factory is supported on all commonly used variants of Unix (e.g. linux, MacOSX, AIX). On Microsoft Windows machines the The Simulation Factory can be used with the cygwin environment, although this is not so regularly tested.</li>

</ul>

<h3>Machines</h3>

  <p>The The Simulation Factory is regularly tested and actively supported on the machines listed in the following table. For advice on using the toolkit on a machine not listed here please contact us via the <a href="mailto:simfactory@cct.lsu.edu">users</a> mail list. Configuration files for supported machines are linked to in the table.</p>

</p>

<table>
<tr>
	<td><b>Organization</b></td><td><b>Machines/Configuration Files</b>
		</tr>
		<tr><td valign="top">NSF TeraGrid</td>
		
  <td><a href="http://www.ncsa.illinois.edu/UserInfo/Resources/Hardware/Intel64Cluster/">Abe</a> (<a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/abe-mvapich2.cfg">config</a>)<br> 
<a href="http://www.nics.tennessee.edu/computing-resources/kraken">Kraken</a> (<a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/kraken.cfg">config</a>)<br> 
<a href="http://services.tacc.utexas.edu/index.php/ranger-user-guide">Ranger</a> (<a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/ranger-mvapich.cfg">config</a>)<br> 
<a href="http://www.loni.org/systems/system.php?system=QueenBee">Queen Bee</a> (<a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/eric-mvapich2.cfg">config</a>)
		</td>
	</tr>
</table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
