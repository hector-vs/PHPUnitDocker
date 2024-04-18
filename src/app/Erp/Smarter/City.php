<?php

namespace src\app\Erp\Smarter;

use smarter\city as SmarterCity;
use src\app\Contracts\Erp\City as ErpCity;

class City implements ErpCity
{
  protected $city;

  public function __construct(SmarterCity $city)
  {
    $this->city = $city;
  }

  public function get()
  {
    $result = $this->city->get();
    return $result;
  }
}
