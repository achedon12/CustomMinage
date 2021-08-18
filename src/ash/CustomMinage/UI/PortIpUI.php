<?php

namespace ash\CustomMinage\UI;

use ash\CustomMinage\Main;
use jojoe77777\FormAPI\CustomForm;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\Player;

class PortIpUI extends SimpleForm{

    public static function open(Player $player){

        $db = Main::config();

        $form = new CustomForm(
            function(Player $player, array $data = null){

                $db = Main::config();

                if($data === null){
                    $player->sendMessage("Close SetMinage - §dPort/Ip");
                }else{
                    $port = $data[1];
                    $ip = $data[1];

                    $db->setNested("External.Port",$port);
                    $db->setNested("External.Ip",$ip);
                    $db->save();
                    $player->sendMessage(str_replace(["{port}","{ip}"],[$port, $ip],$db->getNested("Message.ConfirmationSetupExternal")));

                }
            }
        );

        $form->setTitle($db->getNested("FormMessage.TitleExternal"));
        $form->addInput($db->getNested("FormMessage.Port"));
        $form->addInput($db->getNested("FormMessage.Ip"));
        $player->sendForm($form);

    }
}