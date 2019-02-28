<?php

namespace Kadir5510;

use pocketmine\plugin\PluginBase as KillBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Event;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;
use pocketmine\{Player, Server};
use pocketmine\utils\Config;
use onebone\economyapi\EconomyAPI;
use _64FF00\PureChat\PureChat;

class Base extends KillBase implements Listener{
	
	public function onEnable(){
		Server::getInstance()->getLogger()->info("Eklenti Aktif - KillRank");
		Server::getInstance()->getPluginManager()->registerEvents($this, $this);
		Server::getInstance()->getPluginManager()->getPlugin("PureChat");
		Server::getInstance()->getPluginManager()->getPlugin("EconomyAPI");
		$this->kill = new Config($this->getDataFolder()."Kills.yml", Config::YAML); 
	 }
	 
	 public function giris(PlayerJoinEvent $e){
	 	if($this->kill->get($e->getPlayer()->getName()) == null){ //ilk defa giriş yapıyorsa
    $this->kill->set($e->getPlayer()->getName(), 0); //kill i 0 yap
    $this->kill->save(); //kaydet
	 }
	} 
	 
	 public function cikis(PlayerQuitEvent $e){
	 	$this->kill->save(); //kaydet
	 }
	 
	 public function KillRank(PlayerDeathEvent $e){
	 	$bd = $e->getEntity()->getLastDamageCause();
  if($bd instanceof EntityDamageByEntityEvent){
    	$olduren = $bd->getDamager();
   if($olduren instanceof Player){
   	$this->kill->set($olduren->getName(), $this->kill->get($olduren->getName()) + 1);
   	$this->kill->save();
  	  $purechat = Server::getInstance()->getPluginManager()->getPlugin("PureChat");
    $onceki = $this->kill->get($olduren->getName());
    $yeni = $onceki+1;
    if($yeni == 15){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
    }if($yeni == 30){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->save();
    }if($yeni == 50){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 70){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 90){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 120){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 150){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 180){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 210){     
        EconomyAPI::getInstance()->addMoney($olduren, 250);
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
     }if($yeni == 250){     
        $purechat->setPrefix("Rütbe", $olduren);
        $olduren->sendMessage("§7[§bKillRank§7] §aBaşarıyla Rütbe Atladınız");
        $this->kill->set($olduren->getName(), 0); 
    } else {
      $this->kill->set($olduren->getName(), $yeni);
      $this->kill->save();
    
        }
      }   
    }
  }	 
}
?>
