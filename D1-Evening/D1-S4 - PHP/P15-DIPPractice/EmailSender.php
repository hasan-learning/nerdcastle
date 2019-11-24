<?php
include_once "NotificationAction.php";

class EmailSender implements NotificationAction
{

    public function actOnNotification($message)
    {
        echo 'Email Send successfully!';
    }
}