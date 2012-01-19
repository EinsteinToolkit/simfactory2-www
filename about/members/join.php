<?php $title='Register as a User';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>Please fill out the following information to register as a user of the CFD Toolkit and a member of our consortium. </p>

<form name="register" action="send-registration" method="post"><table>
<tr>
<td>Name: </td>
	<td><input type="text" name="name" /></td>
</tr>
<tr>
	<td>Email: </td>
	<td><input type="text" name="email" /></td>
</tr>
<tr>
	<td>Institution: </td>
	<td><input type="text" name="institution" /></td>
</tr>
<tr>
	<td>Add me to the users mail list?</td>
	<td>
		<input type="radio" name="list" value="yes" checked /> yes
		<input type="radio" name="list" value="no" /> no
	</td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Submit" /></td>
</tr>
</table></form>

<p>The CFD Toolkit is freely available under an open source license. However, we kindly request that users:</p>

<ol>
<li> Acknowledge use of the  CFD Toolkit in publications and presentations following the CFD Toolkit citation guidelines.</li>

<li> Report to the CFD Toolkit Maintainers any identified bugs or patches to the CFD Toolkit.</li>
</ol>

<h3>Citation Guidelines</h3>

<p>
The CFD Toolkit citation guidelines are designed to appropriately credit individuals who have made intellectual contributions to the toolkit in designing the algorithms and software implementations that contribute substantially to provision of an effective framework.
</p>

<!-- WHAT DO WE PUT HERE? -->

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
