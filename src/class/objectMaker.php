<?php

namespace app\class;

class objectMaker
{
  public $object;

  public function createObject($name1, $value1, $name2, $value2)
  {
    return [
      $name1 => $value1,
      $name2 => $value2,
    ];
  }
}
