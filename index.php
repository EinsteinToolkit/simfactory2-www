<?php $title='';
$hide_path=1;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<table class="noborder">
<tr>
<td valign="top">
<p>

Performing large three-dimensional time-dependent simulations is a complex numerical task. Managing such simulations, often several at the same time as they execute on different supercomputers, is comparable to herding cats — supercomputers differ in their hardware configuration, available software, directory structure, queueing systems, queuing policies, and many other relevant properties.
<br>
<br>

However, these differences are only superficial, and the basic capabilities of supercomputers are very similar. The simulation factory contains a set of abstractions of the tasks which are necessary to set up and successfully finish numerical simulations using the Cactus framework. These abstractions hide tedious low-level management tasks, they capture "best practices" of experienced users, and they create a log trail ensuring repeatable and well-documented scientific results. Using these abstractions, many types of potentially disastrous user errors are avoided, and different supercomputers can be used in a uniform manner.

</p>
<p>Please read our pages <a href="about/"><b>about</b></a> The Simulation Factory, and how to <a href="info/"><b>get started</b></a> for more information.</p>
</td>
</tr>
</table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
