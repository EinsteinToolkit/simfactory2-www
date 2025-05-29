<html>
<body>
<?php
  echo '<h3>Updating the site...</h3>';
  echo '<pre>';
  echo shell_exec('/cct/groups/simfactory/website/update.sh');
  echo '</pre>';
  echo '<p>The site is now current.</p><br />';
?>
</body>
</html>
