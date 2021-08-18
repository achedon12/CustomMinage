<?php

namespace ash\CustomMinage\UI;

use ash\CustomMinage\Main;
use jojoe77777\FormAPI\CustomForm;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\Player;

class LanguageUI extends SimpleForm{

    public static function open(Player $player){

        $db = Main::config();

        $form = new CustomForm(
            function(Player $player, array $data = null){
                $db = Main::config();
                if($data === null){
                    $player->sendMessage("Close SetMinage - §dLanguage");
                }else{
                    $languageChoice = $data[1];
                    $db->set("Language",$languageChoice);
                    $db->save();

                }
            }
        );
        $option = ["FR"];

        $form->setTitle($db->getNested("FormMessage.TitleLanguage"));
        $form->addLabel($db->getNested("FormMessage.Label"));
        $form->addDropdown($db->getNested("FormMessage.DropdownLanguage"),$option);
        $player->sendForm($form);
    }
}
