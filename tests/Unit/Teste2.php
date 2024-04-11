<?php

use app\class\calculo;

it('sums', function() {
  $this->conta = new calculo;
  $n1 = 3;
  $n2 = 4;
  $result = $this->conta->somar($n1, $n2);
  expect($result)->toBe($n1 + $n2);
});