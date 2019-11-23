<?php
include_once "NotificationAction.php";

class EventLogWriter implements NotificationAction
{

    public function actOnNotification($message)
    {
        echo $message; echo "<br>";
    }
}