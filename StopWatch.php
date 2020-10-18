<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime();

    }


    function getStart()
    {
        return $this->startTime;
    }

    function getStop()
    {
        return $this->endTime;

    }

    function start()
    {
        $this->startTime = microtime();


    }

    function stop()
    {
        $this->endTime = microtime();

    }


    function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }

}