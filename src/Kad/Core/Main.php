<?php

namespace Kad\Core;

use pocketmine\Player;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;	
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{
	
public $fts = "§a[§eCore§r]§a"
	
public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
}
