<?php

namespace src\app\Class;

use src\app\Contracts\Erp\City as ErpCity; 
use src\app\Contracts\List\City as ListCity;

class Comparador
{
  protected $cidade;
  protected $cidades;

  public function __construct(ErpCity $cidade, ListCity $cidades)
  {
    $this->cidade = $cidade->get();
    $this->cidades = $cidades->list();
  }

  public function comparar()
  {
    $isValid = false;
    foreach($this->cidades as $cidade){
      if($cidade == $this->cidade){
        $isValid = true;
      }
    }
    return $isValid;
  }
}
