<?php 

namespace App; 

class TryCommand 
{
    public static function try(\Composer\Script\Event $event)
    {
        echo "\nHello World\n";
    }

    public static function halo()
    {
        echo "TEST";
    }
}