<?php

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\block\LeavesDecayEvent;
use pocketmine\level\Position;

class EventListener implements Listener {

    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin
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
    public function onDecay(LeavesDecayEvent $event) {
        $event->setCancelled(true);
    }

