<?php


namespace pocketmine;


use pocketmine\utils\MainLogger;
use pocketmine\utils\Utils;

class ErrorDump
{
    public static function writeError(Server $server, \Exception $e) {
        $content = "==== ERROR DUMPS ====".PHP_EOL;
        $content .= MainLogger::printExceptionMessage($e).PHP_EOL;
        for($prev = $e->getPrevious(); $prev !== null; $prev = $prev->getPrevious()){
            $content .= "Previous: " . MainLogger::printExceptionMessage($prev).PHP_EOL;
            foreach(Utils::printableTrace($prev->getTrace()) as $line){
                $content .= "  " . $line.PHP_EOL;
            }
        }
        $name = date("Y-m-d_H:i:s_").mt_rand(1000000, 9999999).".txt";
        file_put_contents($server->getDataPath()."errordumps/".$name, $content);
    }
}