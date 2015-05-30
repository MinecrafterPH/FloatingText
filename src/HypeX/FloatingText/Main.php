<?php

namespace HypeX\FloatingText;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\level\particle\Particle;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\level\Position\getLevel;
use pocketmine\plugin\PluginManager;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{

   public function onLoad(){
        $this->getLogger()->info(TextFormat::GREEN. "FloatingText has been enabled.");  
   }
   public function saveFiles(){
	if(!file_exists($this->getDataFolder())){
		mkdir($this->getDataFolder());
	}
   }
   public function onEnable(){
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        @mkdir($this->getDataFolder());
        $this->cfg = $this->getConfig();
   }
   public function onDisable(){
	unset($this->players);
	$this->saveDefaultConfig();
	$this->getLogger()->info(TextFormat::RED. "FloatingText has been disabled.");
   }
   public function onPlayerJoin(PlayerJoinEvent $event){
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
