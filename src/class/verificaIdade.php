<?php

namespace app\class;

class verificaIdade
{

  public $idade;

  public function idadeValida($idade)
  {
    if ($idade < 0) {
      return false;
    } else {
      return true;
    }
  }
}
