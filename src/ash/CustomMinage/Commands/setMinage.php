<?php

namespace ash\CustomMinage\Commands;

use ash\CustomMinage\Main;
use ash\CustomMinage\UI\PortIpUI;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class setMinage extends Command{

    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $db = Main::config();
       if($sender instanceof Player ){
           if($sender->hasPermission("use.setMinage")){
              if(empty($args)){
                  $sender->sendMessage("§b-- ----[§dCommand for CustomMinage]§b---- --\n\n/setminage <toggle: external|local> <toggle: true|false>\n");
              }else{
                  if($args[0] === "external"){
                      if(empty($args[1])){
                          PortIpUI::open($sender);
                      }else{
                          if($args[1] === "true"){
                              $sender->sendMessage("You put §dminage command §f on §dtrue §fin §dexternal");
                              $db->setNested("Minage.external","true");
                              $db->setNested("Minage.local","false");
                              $db->save();

                          }
                          if($args[1] === "false"){
                              $sender->sendMessage("You put §dminage command §f on §dfalse §fin §dexternal");
                              $db->setNested("Minage.external","false");
                              $db->setNested("Minage.local","true");
                              $db->save();
                          }
                      }

                  }
                  if($args[0] === "local"){
                      if($args[1] === "true"){
                          $sender->sendMessage("You put §dminage command §f on §dtrue §fin §dlocal");
                          $db->setNested("Minage.external","false");
                          $db->setNested("Minage.local","true");
                          $db->save();
                      }
                      if($args[1] === "false"){
                          $sender->sendMessage("You put §dminage command §f on §dtrue §fin §dlocal");
                          $db->setNested("Minage.external","true");
                          $db->setNested("Minage.local","false");
                          $db->save();
                      }
                  }
              }
           }else{
               $sender->sendMessage($db->getNested("Message.NoPerm"));
           }
       }else{
           $sender->sendMessage($db->getNested("Message.NoPlayer"));
       }
    }
}