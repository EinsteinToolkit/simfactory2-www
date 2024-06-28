#!/bin/bash
echo UPDATING WEBSITE...
cd /cct/groups/simfactory/website
pwd
git pull |& cat -
git log | head -10
echo DONE
