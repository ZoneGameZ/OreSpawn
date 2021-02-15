<?php

namespace ZoneGameZ\Ore;

use pocketmine\event\Listener; 
use pocketmine\Player;
use pocketmine\plugin\PluginBase; 
use pocketmine\command\CommandSender; 
use pocketmine\command\Command;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\Inventory;

class Main extends PluginBase implements Listener {
	
	public $random = [];
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, Array $args){
		if($cmd == "orespawn"){
          if(isset($this->random[$sender->getName()])){
              unset($this->random[$sender->getName()]);
              $sender->sendMessage("Orespawn disable!");
              } else {
              	$this->random[$sender->getName()] = $sender->getName();
              $sender->sendMessage("Orespawn enable!");
              }
        return true;
        }
     }
     
     public function onBreak(BlockBreakEvent $ev){
     	$p = $ev->getPlayer();
     if(isset($this->random[$p->getName()])){
     	if($ev->getBlock()->getId() == 4){
     	switch(rand(1,33)){
     	
     	// cobblestone
     	case 1:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 2:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 3:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 4:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 5:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 6:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 7:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 8:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 9:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 10:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 11:
     $ev->setDrops([Item::get(4,0,1)]);
     break;
     case 12:
     $ev->setDrops([Item::get(4,0,1)]);
     
     // coal
     break;
     case 13:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     case 14:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     case 15:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     case 16:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     case 17:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     case 18:
     $ev->setDrops([Item::get(263,0,1)]);
     break;
     
     // iron
     case 19:
     $ev->setDrops([Item::get(265,0,1)]);
     break;
     case 20:
     $ev->setDrops([Item::get(265,0,1)]);
     break;
     case 21:
     $ev->setDrops([Item::get(265,0,1)]);
     break;
     case 22:
     $ev->setDrops([Item::get(265,0,1)]);
     break;
     case 23:
     $ev->setDrops([Item::get(265,0,1)]);
     break;
     
     // gold
     case 24:
     $ev->setDrops([Item::get(266,0,1)]);
     break;
     case 25:
     $ev->setDrops([Item::get(266,0,1)]);
     break;
     case 26:
     $ev->setDrops([Item::get(266,0,1)]);
     break;
     case 27:
     $ev->setDrops([Item::get(266,0,1)]);
     break;
     
     // redstone
     case 28:
     $ev->setDrops([Item::get(331,0,1)]);
     break;
     case 29:
     $ev->setDrops([Item::get(331,0,1)]);
     break;
     case 30:
     $ev->setDrops([Item::get(331,0,1)]);
     break;
     
     // diamond
     case 31:
     $ev->setDrops([Item::get(264,0,1)]);
     break;
     case 32:
     $ev->setDrops([Item::get(264,0,1)]);
     break;
     
     // emerald
     case 33:
     $ev->setDrops([Item::get(388,0,1)]);
     break;
     	}
     	}
     	}
     }
}
