#!/bin/bash
echo UPDATING WEBSITE...
cd /cct/groups/simfactory/website
git pull
git log | head -10
echo DONE
