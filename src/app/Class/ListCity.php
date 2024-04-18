<?php

namespace src\app\Class;

use src\app\Contracts\List\City;

class ListCity implements City
{

  protected $cities = ['Curitiba', 'São Paulo', 'Peruíbe', 'Santos', 'João Pessoa'];

  public function list(){
    return $this->cities;
  }
}
