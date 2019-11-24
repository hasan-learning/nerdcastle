<?php
include_once "AppPoolWatcher.php";
include_once "EmailSender.php";
include_once "EventLogWriter.php";

$poolWatcher = new AppPoolWatcher();
$poolWatcher->actOnNotification(new EmailSender());
$poolWatcher->notify("Memory overflow");

$poolWatcher->actOnNotification(new EventLogWriter());
$poolWatcher->notify("To many applications");