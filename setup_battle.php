<?php
include_once("./class/Character.php");
include_once("./class/Spell.php");

session_start();

function getRandomCharacter($characters, $id) {
    do {
        $randomIndex = array_rand($characters);
        $randomChar = $characters[$randomIndex];
    } while ($randomChar->id == $id);

    return $randomChar;
}

if (isset($_POST['selected_character_id'])) {
    $characters = [$xayah, $akali, $kaisa, $katarina, $gwen, $shaco, $viego, $syndra];
    $id = intval($_POST['selected_character_id']);
    $randomCharacter = getRandomCharacter($characters, $id);
    $_SESSION['selected_character_id'] = $id;
    $_SESSION['versus_character_id'] = $randomCharacter->id;
    header("Location: ./battle.php");
} else {
    echo('<p>Une erreur est survenue</p>');
}
?>