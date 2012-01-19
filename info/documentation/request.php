<?php $title='Request Test Account';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>Please fill out the following information to request a test account for the Einstein Toolkit. These accounts will take one or two days to set up.</p>

<form name="request" action="send-account" method="post">
<table>
<tr>
<td>Name: </td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Department: </td>
<td><input type="text" name="department" /></td>
</tr>
<tr>
<td>Institution: </td>
<td><input type="text" name="institution" /></td>
</tr>
<tr>
<td>Position</td>
<td><input type="radio" name="position" value="undergraduate" checked /> undergraduate
<input type="radio" name="position" value="graduate student" /> graduate student<br>
<input type="radio" name="position" value="postdoc" /> postdoc
<input type="radio" name="position" value="researcher" /> researcher
<input type="radio" name="position" value="faculty" /> faculty
</td>
</tr>
<tr>
<td>Advisor (if student): </td>
<td><input type="text" name="advisor" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" /></td>
</tr>
</table>
</form>

<!-- WHAT DO WE PUT HERE? -->

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
