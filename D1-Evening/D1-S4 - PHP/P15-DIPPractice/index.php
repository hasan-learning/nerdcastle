<?php
include_once "AppPoolWatcher.php";
include_once "EmailSender.php";
include_once "EventLogWriter.php";

$poolWatcher = new AppPoolWatcher();
$poolWatcher->setAction(new EmailSender());
$poolWatcher->notify("Memory overflow");

$poolWatcher->setAction(new EventLogWriter());
$poolWatcher->notify("To many applications");