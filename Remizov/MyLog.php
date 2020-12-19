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
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s.u').".log";
        if (!is_dir('./Log/')) {
            mkdir("./Log/");
        }
        file_put_contents($file, implode("\n", $this->log));
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