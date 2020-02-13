<?php
//Quand la page a fini de charger
//lancer la fonction DELETE
//avec les information $_Get["id"] $_Get["Name"]
//Une fois la fonction terminer
//Rediriger a nouveau sur la page initiale ( addClub.php)
// LANCEMENT AU CHARGEMENT DE LA PAGE
// [require_once( Ton entité);
// ton_entité::delete();]
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Club.php');
function delete(){
twp_Club::delete();
}

add_action('init',delete());
?>
