<?php
include_once "NotificationAction.php";
include_once "EventLogWriter.php";

class AppPoolWatcher
{
    private $action;


    public function getAction()
    {
        return $this->action;
    }


    public function setAction($action)
    {
        $this->action = $action;
    }


    public function notify($message){
        if($this->action==null){
            $this->action = new EventLogWriter();
        }

        $this->action->actOnNotification($message);
    }
}