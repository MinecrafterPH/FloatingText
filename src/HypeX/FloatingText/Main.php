<?php

namespace HypeX\FloatingText;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\math\Vector3;
use pocketmine\level\Level;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

   public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->onLevel($this->getServer()->getDefaultLevel());
   } 
   public function onLevel(Level $level){
        $pos = new Vector3(127, 43, 128);
        $pos1 = new Vector3(127, 44, 133);
        $pos2 = new Vector3(122, 44, 128);
        $pos3 = new Vector3(132, 44, 128);  
        $pos4 = new Vector3(127, 44, 123);
    
        $level->addParticle(new FloatingTextParticle($pos->add(0.5, 0.0, 0.5),"",  "HypeX PE"));
        $level->addParticle(new FloatingTextParticle($pos1->add(0.5, 0.0, 0.5),"", "Factions"));
        $level->addParticle(new FloatingTextParticle($pos2->add(0.5, 0.0, 0.5),"", "Mini-Games"));  
        $level->addParticle(new FloatingTextParticle($pos3->add(0.5, 0.0, 0.5),"", "PvP"));
        $level->addParticle(new FloatingTextParticle($pos4->add(0.5, 0.0, 0.5),"", "Help"));
    
   }
}
