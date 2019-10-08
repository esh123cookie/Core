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
}
public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setJoinMessage("§8•§r " . $name . " §8has joined");
    $world = $this->getServer()->getLevelByName("world");
    $x = 0;
    $y = 66;
    $z = 0;
    $pos = new Position($x, $y, $z, $world);
    $player->teleport($pos);
    $player->setGamemode(1);
}
public function onQuit(PlayerQuitEvent, $event){
    $player = $event->getPlayer();
    $name = $event->getName();
    $event->setQuitMessage("§8•§r" . $name . " §8has left");
}
