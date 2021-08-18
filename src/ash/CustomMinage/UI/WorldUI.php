<?php

namespace ash\CustomMinage\UI;

use ash\CustomMinage\Main;
use jojoe77777\FormAPI\CustomForm;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\Player;
use pocketmine\Server;

class WorldUI extends SimpleForm{

    public static function open(Player $player){

        $db = Main::config();

        foreach (Server::getInstance()->getLevels() as $level){
            $AllLevel[] = $level->getName();
        }

        $form = new CustomForm(
            function(Player $player, array $data =null) use ($AllLevel) {
                if($data === null){
                    $player->sendMessage("Close SetMinage - §dWorld");
                }else{
                    $db = Main::config();

                    $levelChoice =$AllLevel[$data[0]];
                    $db->setNested("Local.World",$levelChoice);
                    $db->save();
                    $player->sendMessage(str_replace("{worldname}",$levelChoice,$db->getNested("Message.ConfirmationSetupLocalWorld")));
                }
            }
        );

        $form->setTitle($db->getNested("FormMessage.TitleLocal"));
        $form->addLabel($db->getNested("FormMessage.ContentLocal"));
        $form->addDropdown($db->getNested("FormMessage.DropdownLocal"),$AllLevel);
        $player->sendForm($form);

    }
}