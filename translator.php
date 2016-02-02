<?php

/**
 * Created by PhpStorm.
 * User: Lars
 * Date: 27/01/2016
 * Time: 20:53
 */
class translator{
    public $lang;

    public function __construct(){
       // $lang =  $_SERVER['QUERY_STRING'];
        $this->lang = array(
            'en' => array(
                //Identiteit
                'WieBenIk?' => 'WhoAmI?',
                "Naam" => "Surname",
                "Voornaam" => "First name",
                "Leeftijd" => "Age",
                "Woonplaats" => "Residence",
                "België" => "Belgium",
                "Interesses" => "Hobbies",

                //Vaardigheden
                "Vaardigheden worden geladen..." => "Loading skills...",

                //Achievements
                "Werkervaring" => "Jobs",
                "Februari" => "February",
                "Juni" => "June",
                "Studies" => "Education",
                "Toegepaste Informatica" => "Information Technology",

                //Contact
                "LEER MIJ" => "GET IN",
                "KENNEN." => "TOUCH WITH ME."
            )
        );
    }

    public function t($text,$lang){
        if($lang == "nl") {
            echo $text;
        }
        else {
            echo $this->lang[$lang][$text];
        }

    }
}