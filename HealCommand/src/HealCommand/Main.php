<?php


namespace HealCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getserver()->getLogger()->info("HealCommand enabled!")
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getserver()->getLogger()->info("HealCommand disabled!");
	}
	
	case "heal";
if($sender instanceof Player) {
	$sender->setHealth(20);
	$sender->setFood(20);
}
break;

}
return true;
