<?php
include_once "EventLogWriter.php";

class AppPoolWatcher
{
    // Handle to EventLog writer to write to the logs
    private $writer;


    public function getWriter()
    {
        return $this->writer;
    }

    public function setWriter($writer)
    {
        $this->writer = $writer;
    }


    // This function will be called when the app pool has problem
    public function notify($message){
        if($this->writer == null){
            $this->writer = new EventLogWriter();
        }
        $this->writer->write($message);
    }
}