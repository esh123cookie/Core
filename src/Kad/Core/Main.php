<?php

namespace Kad\Core;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;	
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    $this->getServer()->getPluginManager()->registerEvents(new CommandListener($this), $this);
    $this->getServer()->getPluginManager()->registerEvents(new MapReset($this), $this);
    $this->getServer()->getLevelByName("GTA5")->setAutoSave(false);
    }
}
