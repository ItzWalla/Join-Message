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


   public function onDisable() {
     $this->getLogger()->info(TF::RED . ("Shit!");
}

}
