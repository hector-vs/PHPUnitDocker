<?php

namespace app\class;
use smarter\city;

interface ShowDataInterface {
  public function showData();
}

class showCityData implements ShowDataInterface
{
  protected $city;
  
  public function __construct(city $city)
  {
    $this->city = $city;
  }

  public function showData()
  {
    $result = $this->city->get();
    return $result;
  }
}

class showData {
  protected $data;
  public function __construct(ShowDataInterface $data){
    $this->data = $data;
  }
  
  public function showData()
  {
    return $this->data->showData();
  }

}
