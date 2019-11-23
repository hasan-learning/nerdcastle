<?php
include_once "AppPoolWatcher.php";

//Suppose App pool faced a problem, so
$appPoolWatcher = new AppPoolWatcher();
$appPoolWatcher->notify("Memory overflow");