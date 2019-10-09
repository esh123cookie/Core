<?php

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\level\Position;

class CommandListener implements Listener {

    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) : bool{
        switch (strtolower($command->getName())) {
            case "gmc":
            if($sender instanceof Player) {
                 if($sender->hasPermission("core.gmc.use")) {
                     $sender->setGamemode(1);
                     $sender->sendMessage($this->fts . TF::GREEN . "Your gamemode has been set to creative!");
                 } else {
                     $sender->sendMessage($this->fts . TF::RED . "An error has occurred. Please contact Jes'kad Ad'aryc#3845 on Discord to report this");
                 }
            }
            break;

            case "gms":
            if($sender instanceof Player) {
                 if($sender->hasPermission("core.gms.use")) {
                     $sender->setGamemode(0);
                     $sender->sendMessage($this->fts . TF::GREEN . "Your gamemode has been set to survival!");
                 } else {
                     $sender->sendMessage($this->fts . TF::RED . "An error has occurred. Please contact Jes'kad Ad'aryc#3845 on Discord to report this");
                 }
            }
            break;
