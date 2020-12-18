<?php

namespace Remizov;

use core\LogAbstract as LogAbstract;
use core\LogInterface as LogInterface;


class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $log) {
            echo $log . "\n";
        }
    }

    public function _log($str)
    {
        $this->log[] = $str;
    }

    public static function log($str)
    {
        self::Instance()->_log($str);
    }

    public static function write()
    {
        self::Instance()->_write();
    }
} 