<?php


namespace App;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Test
{
    protected $log;
    public function __construct($logFile)
    {
        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler($logFile, Logger::WARNING));
    }

    function t($msg)
    {
       $this->log($msg);
    }
}