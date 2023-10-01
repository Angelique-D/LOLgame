<?php
require_once("Spell.php");

// Classe mère Characters
class Character {
    public $id;
    public $name;
    public $title;
    public $icon;
    public $poster;
    public $power;
    public $attackDamage;
    public $styleCSS;
    public $spells;

    public function __construct($data) {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->title = $data["title"];
        $this->icon = $data["icon"];
        $this->poster = $data["poster"];
        $this->power = $data["power"];
        $this->attackDamage = $data["attackDamage"];
        $this->styleCSS = $data["styleCSS"];
        $this->spells = $data["spells"];
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPower() {
        return $this->power;
    }
    
    public function getStyleCSS() {
        return $this->styleCSS;
    }

}

$xayah = new Character([
    "id" => 1, 
    "name" => "Xayah", 
    "title" => "La rebelle", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/Xayah.png",
    "poster" => ".\img\characters\1.jpg",
    "power" => 590,
    "attackDamage" => 60,
    "styleCSS" => "border-bottom: blue 4px solid;",
    "spells" => [
        new Spell(1, "BladeCaller", 35, 100, 5),
        new Spell(2, "Featherstorm", 90, 35, 3),
    ]
]);

$akali = new Character([
    "id" => 2, 
    "name" => "Akali", 
    "title" => "La voleuse assassin", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/Akali.png",
    "poster" => ".\img\characters\2.jpg",
    "power" => 940,
    "attackDamage" => 62.4,
    "styleCSS" => "border-bottom: blue 4px solid;",
    "spells" => [
        new Spell(3, "Five Point Strike", 55, 85, 5),
        new Spell(4, "Shuriken Flip", 80, 55, 3),
    ]
]);

$gwen = new Character([
    "id" => 5, 
    "name" => "Gwen", 
    "title" => "La sainte couturière", 
    "icon" => "",
    "poster" => ".\img\characters\5.jpg",
    "power" => 620,
    "attackDamage" => 63,
    "styleCSS" => "border-bottom: red 4px solid;",
    "spells" => [
        new Spell(5, "Snip Snip!", 45, 95, 5),
        new Spell(6, "Skip 'n Slash", 90, 70, 2),
    ]
]);

$kaisa = new Character([
    "id" => 3, 
    "name" => "Kai'Sa", 
    "title" => "La fille du vide", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/Kaisa.png",
    "poster" => ".\img\characters\3.jpg",
    "power" => 600,
    "attackDamage" => 59,
    "styleCSS" => "border-bottom: blue 4px solid;",
    "spells" => [
        new Spell(7, "Icathian Rain", 30, 95, 5),
        new Spell(8, "Void Seeker", 150, 80, 1),
    ]
]);

$syndra = new Character([
    "id" => 8, 
    "name" => "Syndra", 
    "title" => "La souveraine sombre", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/Syndra.png",
    "poster" => ".\img\characters\8.jpg",
    "power" => 523,
    "attackDamage" => 54,
    "styleCSS" => "border-bottom: red 4px solid;",
    "spells" => [
        new Spell(9, "Dark Sphere", 100, 70, 3),
    ]
]);

$shaco = new Character([
    "id" => 7, 
    "name" => "Shaco", 
    "title" => "Le bouffon démoniaque", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/Shaco.png",
    "poster" => ".\img\characters\7.jpg",
    "power" => 587,
    "attackDamage" => 63,
    "styleCSS" => "border-bottom: red 4px solid;",
    "spells" => [
        new Spell(10,"Two-Shiv Poison", 30, 90, 2),
        new Spell(11, "Hallucinate", 150, 50, 1)
    ]
]);

$katarina = new Character([
    "id" => 4, 
    "name" => "Katarina", 
    "title" => "La lame sinistre", 
    "icon" => "http://ddragon.leagueoflegends.com/cdn/10.23.1/img/champion/katarina.png",
    "poster" => ".\img\characters\4.jpg",
    "power" => 602,
    "attackDamage" => 58,
    "styleCSS" => "border-bottom: blue 4px solid;",
    "spells" => [
        new Spell(12, "Death Lotus", 110, 70, 3),
    ]
]);

$viego = new Character([
    "id" => 6, 
    "name" => "Viego", 
    "title" => "Le roi déchu", 
    "icon" => "",
    "poster" => ".\img\characters\6.jpg",
    "power" => 630,
    "attackDamage" => 57,
    "styleCSS" => "border-bottom: red 4px solid;",
    "spells" => [
        new Spell(13, "Blade of the Ruined King", 160, 45, 3),
    ]
]);


