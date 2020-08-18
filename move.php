<?php

class Move{
  public $name;
  public $damage;
  public $type;
  function __construct($name, $damage, $type){
    $this->name = $name;
    $this->damage = $damage;
    $this->type = $type;
  }
}