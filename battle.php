<?php
// error_reporting(E_ALL); 
// ini_set("display_errors", 1);
include_once("./class/Character.php");
include_once("./class/Spell.php");

session_start();

$characters = [$xayah, $akali, $kaisa, $katarina, $gwen, $shaco, $viego, $syndra];

function getCharacter($characters, $id)
{
    $selectedCharacters = array_filter($characters, function ($character) use ($id) {
        return $character->id == $id;
    });
    return $selectedCharacters[array_key_first($selectedCharacters)];
}

if (isset($_SESSION['selected_character_id']) && isset($_SESSION['versus_character_id'])) {
    $selectedId = $_SESSION['selected_character_id'];
    $versusId = $_SESSION['versus_character_id'];
    $selectedCharacter = getCharacter($characters, $selectedId);
    $versusCharacter = getCharacter($characters, $versusId);
}

// function getHealth($character) {
//     $totalPower = $character->power;
//     $currentHealth = ;
//     return number_format($currentHealth / $totalPower * 100) ;
// }
$spellsSelectedCharacter = $selectedCharacter->spells;
$spellsVersusCharacter = $versusCharacter->spells;

include("templates/header.php");
?>

<p class="duel">
    Duel
</p>
<div class="container-VS">
    <div class="charactersDuel">
        <div class="selectedCharacter">
            <?php if (isset($selectedCharacter)) : ?>
                <h3><?= $selectedCharacter->getName() ?></h3>
                <img src="./img/characters/<?= $selectedCharacter->id ?>.jpg" alt="<?= $selectedCharacter->getName() ?>">
                <span style="<?= $selectedCharacter->getStyleCSS() ?>">
                    <?= $selectedCharacter->getPower() ?>
                    <div class="health-bar">
                        <div class="health-progress"></div>
                    </div>
                </span>
                <div class="buttons">
                    <?php foreach ($spellsSelectedCharacter as $spell) : ?>
                        <form method="post" action="attack.php">
                            <input type="hidden" name="spell_id" value="<?= $spell->getId() ?>">
                            <button><?= $spell->getAttackName() ?></button>
                        </form>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p>
                    error 404 character
                </p>
            <?php endif; ?>
        </div>

        <div class="textAttack">

        </div>

        <div class="characterVS">
            <?php if (isset($versusCharacter)) : ?>
                <h3><?= $versusCharacter->getName() ?></h3>
                <img src="./img/characters/<?= $versusCharacter->getID() ?>.jpg" alt="<?= $versusCharacter->getName() ?>">
                <span style="<?= $versusCharacter->getStyleCSS() ?>">
                    <?= $versusCharacter->getPower() ?>
                    <div class="health-bar">
                        <div class="health-progress">

                        </div>
                    </div>
                </span>
                <div class="buttonsVS"></div>
            <?php else : ?>
                <p>
                    Error 404 character
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>