<?php

/* update the local checkout from svn */
exec('/cct/groups/simfactory/update-svn');

/* show the current version */
echo exec('svnversion /cct/groups/simfactory/website');
echo exec('svn info /cct/groups/simfactory/website');

?>
