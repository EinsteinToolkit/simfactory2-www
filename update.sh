#!/bin/bash
exec 2>&1
echo UPDATING WEBSITE...
set -x
#id
cd /cct/groups/simfactory/website
#ls -ld .
#pwd
git pull |& cat -
git log | head -10
echo DONE
