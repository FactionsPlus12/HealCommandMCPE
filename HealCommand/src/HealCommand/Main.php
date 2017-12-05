<?php


namespace CustomItemName;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\item/Item;


class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getserver()->getLogger()->info("CustomItemName enabled!")
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getserver()->getLogger()->info("CustomItemName disabled!");
	}
	
	case "heal";
if($sender instanceof Player) {
	$sender->setHealth(20);
	$sender->setFood(20);
}
break;

}
return true;