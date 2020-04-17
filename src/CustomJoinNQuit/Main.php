<?php

namespace CustomJoinNQuit;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Event;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\inventory\Inventory;

class Main extends PluginBase implements Listener{

public function onEnable()
{

$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info("§aJoin§fN§cQuit §aActivated");

}

public function onJoin(PlayerJoinEvent $event)
{

$player = $event->getPlayer();
$name = $player->getName();
$event->setJoinMessage("");
$this->getServer()->broadcastMessage("§0[§b*§0] §a" . $name);

}

public function onQuit(PlayerQuitEvent $event)
{

$player = $event->getPlayer();
$name = $player->getName();
$player->getInventory()->clearAll();
$player->getArmorInventory()->clearAll()
$event->setQuitMessage("");
$this->getServer()->broadcastMessage("§0[§c*§0] §c" . $name);

}

}
