<?php
$title='Website Updates Interface';
$hide_path=1;
$category='internal';

include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<br />

<?php
if(isset($_GET['update']))
{
  echo '<h3>Updating the site...</h3>';
  echo '<p>'.exec('/var/www/einstein/update').'</p>';
  echo '<p>The site is now current.</p><br />';
  echo '<p>&lang; <a href="/x/">back to updates interface</a></p>';
}
else
{
  echo 'The live site is currently at version <strong>'
.exec('svnversion /var/www/einstein/live/')
.'</strong>. 
<br /><br />
<input class="button" type="button" value="Make Recent Changes Live" onclick="window.location.href=\'/x/?update\'" />
<br /><br />This pushes any changes from the SVN repository to the live site.
</p>';
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
