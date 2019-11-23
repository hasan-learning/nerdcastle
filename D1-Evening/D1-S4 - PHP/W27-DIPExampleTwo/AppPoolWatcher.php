<?php


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


    //This function will be called when the app has problem

    public function notify($message){
        if ($this->action == null)
        {
            $this->action = new EventLogWriter();
        }
        $this->action->actOnNotification($message);
    }
}