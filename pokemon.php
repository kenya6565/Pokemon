<?php

class Pokemon{
    public $name;
    public $hp;
    public $attack;
    public $defence;
    public $moves;
    public $types;

    public function __construct($name, $hp, $attack, $defence, $move, $types){
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->moves = $move;
        $this->types = $types;
    }

    /*
    ダメージ計算[https://wiki.ポケモン.com/wiki/ダメージ#.E7.AC.AC.E4.BA.94.E4.B8.96.E4.BB.A3.E4.BB.A5.E9.99.8D]
    */
    public function attack($enemy, $move_num){
         $total_offence_power =  ($this->moves[$move_num]->damage * $this->attack/$enemy->defence)/50;
        //$total_offence_power = $this->moves[$move_num]->damage;
       //$enemy->hp = $enemy->hp - ($this->moves[$move_num]->damage * $this->attack/$enemy->defence)/50;
       //自分の繰り出した技のタイプと敵のポケモンのタイプを比較
        if ($this->moves[$move_num]->type == 'くさ' && $enemy->types[0]->type1 == 'みず'){
            $enemy->hp  = $enemy->hp - ($total_offence_power * 2);
        }elseif ($this->moves[$move_num]->type == 'みず' && $enemy->types[0]->type1 == 'ほのお'){
            $enemy->hp  = $enemy->hp - ($total_offence_power * 2);
        }elseif ($this->moves[$move_num]->type == 'ほのお' && $enemy->types[0]->type1 == 'くさ') {
            $enemy->hp  = $enemy->hp - ($total_offence_power * 2);
        }elseif ($this->moves[$move_num]->type == 'くさ' && $enemy->types[0]->type1 == 'ほのお') {
            $enemy->hp  = $enemy->hp - ($total_offence_power * 0.5);
        }elseif ($this->moves[$move_num]->type == 'みず' && $enemy->types[0]->type1 == 'くさ') {
            $enemy->hp  = $enemy->hp - ($total_offence_power * 0.5);
        }elseif ($this->moves[$move_num]->type == 'ほのお' && $enemy->types[0]->type1 == 'みず') {
            $enemy->hp  = $enemy->hp - ($total_offence_power * 0.5);
        }else {
            $enemy->hp  = $enemy->hp - $total_offence_power;
        }
       
    }
}