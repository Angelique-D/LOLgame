<?php

class Spell {
    private $id;
    private $attackName;
    private $damage;
    private $probability;
    private $attackCount;
    private $maxAttackCount;

    public function __construct(int $id, string $attackName, int $damage, int $probability, int $maxAttackCount) {
        $this->id = $id;
        $this->attackName = $attackName;
        $this->damage = $damage;
        $this->probability = $probability;
        $this->attackCount = 0;
        $this->maxAttackCount = $maxAttackCount;
    }

    public function getId() {
        return $this->id;
    }

    public function getAttackName() {
        return $this->attackName;
    }

    public function getDamage() {
        return $this->damage;
    }

    public function getProbability() {
        return $this->probability;
    }

    public function getMaxAttackCount() {
        return $this->maxAttackCount;
    }

    // public function useAttackWithProbability(string $attackName, int $maxAttackCount) {

    //     $probability = $this->getProbability();
    //     $maxAttackCount = $this->getMaxAttackCount();

    //     if (rand(1, 100) <= $probability) {
    //         $this-> attackCount++;
    //     }
        
    //     if ($this-> attackCount >= $maxAttackCount) {
            
    //     } else {
    //         echo "{$this->name} attack with {$this->attackName}";
    //     }
    // }
}
