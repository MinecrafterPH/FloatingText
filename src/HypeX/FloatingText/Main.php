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
        $this->saveDefaultConfig();
		  $this->reloadConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->onLevel($this->getServer()->getDefaultLevel());
   } 
   public function onLevel(Level $level){
        $cfg = $this->getConfig();
		  $pos11 = $cfg->get("pos1");
		  $pos22 = $cfg->get("pos2");
		  $pos33 = $cfg->get("pos3");
		  $pos44 = $cfg->get("pos4");
		  $pos55 = $cfg->get("pos5");
		  
		  $text1 = $cfg->get("text1");
		  $text2 = $cfg->get("text2");
		  $text3 = $cfg->get("text3");
		  $text4 = $cfg->get("text4");
		  $text5 = $cfg->get("text5");
		  
        $pos1 = new Vector3($pos11);
        $pos2 = new Vector3($pos22);
        $pos3 = new Vector3($pos33);
        $pos4 = new Vector3($pos44);  
        $pos5 = new Vector3($pos55);
    
        $level->addParticle(new FloatingTextParticle($pos1->add(0.5, 0.0, 0.5),"",  $text1));
        $level->addParticle(new FloatingTextParticle($pos2->add(0.5, 0.0, 0.5),"",  $text2));
        $level->addParticle(new FloatingTextParticle($pos3->add(0.5, 0.0, 0.5),"",  $text3));  
        $level->addParticle(new FloatingTextParticle($pos4->add(0.5, 0.0, 0.5),"",  $text4));
        $level->addParticle(new FloatingTextParticle($pos5->add(0.5, 0.0, 0.5),"",  $text5));
    
   }
}
