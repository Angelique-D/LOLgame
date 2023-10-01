<?php
// error_reporting(E_ALL); 
// ini_set("display_errors", 1);
include_once("./class/Character.php");
include_once("./class/Spell.php");



$characters = [$xayah, $akali, $kaisa, $katarina, $gwen, $shaco, $viego, $syndra];

session_start();

include("templates/header.php");
?>

        <p class="selectChampion">
            Sélection du champion
        </p>
        <div class="characters">
            
                <?php
                foreach ($characters as $character) {
                    ?>
                    <div class="character">
                    <form method="post" action="setup_battle.php">
                        <input type="hidden" name="selected_character_id" value="<?= $character->getID() ?>">
                        <button type="submit">
                            <img src="./img/characters/<?= $character->getID() ?>.jpg" alt="<?= $character->getName() ?>">
                        </button>
                    </form>
                        <span style="<?= $character -> getStyleCSS() ?>">
                            <?= $character -> getPower() ?>
                        </span>
                    </div>
                    <?php
                }
                ?> 
            </div>
        </div>
<?php
    include("templates/footer.php");
?>

