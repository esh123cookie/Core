<?php

use pocketmine\event\Listener;

class CommandListener implements Listener {
    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
