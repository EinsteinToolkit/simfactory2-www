<?php

echo "Running site update...";

/* update the local checkout from svn */
exec('/cct/groups/simfactory/update-svn 2>&1');

/* show the current version */
echo exec('svnversion /cct/groups/simfactory/website 2>&1');

?>
