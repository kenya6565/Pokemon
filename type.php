<?php

//ポケモンによっては1匹に対して2つのタイプを持つ場合もあるので将来的には2タイプに対応するようにする
class Type{
  public $type1;
  
  function __construct($type1){
    $this->type1 = $type1;
   
  }
}