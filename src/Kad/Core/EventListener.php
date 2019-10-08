<?php

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener {
    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
