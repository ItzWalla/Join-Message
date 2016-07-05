<?php


namespace lol;

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;


class Main extends implements Listener
{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}
public function onJoin(PlayerJoinEvent $e) 
{
$p = $e->getPlayer();
       $p->sendMessage("Hi! Welcome to wallas porn site! Here you will find turtle porn!");
    }
}
