<?php

namespace Gui;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\PluginBase;
use pocketmine\item\Item;
use pocketmine\item\VanillaItems;
use pocketmine\event\Listener;
//Add To Work InvMenu
use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;

class Main extends PluginBase implements Listener{
  //Enable Function
  public function onEnable() : void
{
  if(!InvMenuHandler::isRegistered()){
  InvMenuHandler::register($this);
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
}
public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
  //Main Command
if($command->getName() == "test"){
  $sender->sendMessage("Test");
  }
return true;
 }
public function Gui($player){
$menu = InvMenu::create(InvMenu::TYPE_CHEST);
$inventory = $menu->getInventory();
$menu->setName("§eGui");
$inventory->addItem(VanillaItems::DIAMOND());
$menu->send($player);
}
}
