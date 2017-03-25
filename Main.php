<?php

namespace wallito;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;

use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase {

  public function onEnable (){
    $this->getLogger()->info(TF::GREEN . ("Wallito's first plugin has been enabled!"))



   public function onCommand(CommandSender $player, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "test"){
      if($player->hasPermission("wallito.cmd")) {
         $player->sendMessage("§cYou have been healed by the great wallito!")
         $player->setHealt(20.0);
} elseif(!$player->hasPermission("wallito.cmd");
    $player->sendMessage("Hey dumbass you dont have perms!");
     }
   }
  }
   public function onDisable() {
     $this->getLogger()->info(TF::RED . ("Shit!);
}
