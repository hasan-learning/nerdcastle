<?php
//Dependency injection  (DI)
include_once "AppPoolWatcher.php";
include_once "EventLogWriter.php";
include_once "EmailSender.php";

$poolWatcher = new AppPoolWatcher();
$poolWatcher->setAction(new EmailSender());
$poolWatcher->notify("Memory overflow");

$poolWatcher->setAction(new EventLogWriter());
$poolWatcher->notify("To many applications");