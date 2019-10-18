<?php

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;

class ChestRefillTask implements Listener {

    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }

