<?php

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\block\LeavesDecayEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\level\Position;

class EventListener implements Listener {

    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
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
    public function onDeath(PlayerDeathEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $cause = $event->getPlayer()->getLastDamageCause();
        if($cause instanceof EntityDamageByEntityEvent and $cause->getDamager() instanceof Player) {
            $killer = $cause->getDamager();
            $event->setDeathMessage("§f•§r " . $killer . " §fkilled§r " . $name);
        }
    }
    public function onRespawn(PlayerRespawnEvent $event) {
        $world = $this->getServer()->getLevelByName("world");
        $x = 16;
        $y = 66;
        $z = 16;
        $pos = new Position($x, $y, $z, $world);
        $event->setRespawnPosition($pos);
    }
    public function onDecay(LeavesDecayEvent $event) {
        $event->setCancelled(true);
    }
    public function onBreak(BlockBreakEvent $event) {
        $event->setCancelled(true);
    }
    public function onPlace(BlockPlaceEvent $event) {
        $event->setCancelled(true);
    }
}
