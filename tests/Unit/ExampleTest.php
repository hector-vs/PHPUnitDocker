<?php
require_once __DIR__.'/../../vendor/autoload.php';

// use src\class\showCityData;
// use src\class\showData;
// use smarter\city;
use src\app\Class\Comparador;
use src\app\Class\ListCity;
use src\app\Erp\Smarter\City as SmarterCity;

// it('may return data', function() {
//     $city = Mockery::mock(city::class);
//     $city->shouldReceive('get')->andReturn([]);
//     $show = new showData(new showCityData($city));
//     $data = $show->showData();
//     expect($data)->toBeArray();
// });

it('is a valid city', function() {
    $city = Mockery::mock(SmarterCity::class);
    $city->shouldReceive('get')->andReturn('São Paulo');
    $cities = new ListCity;
    $comparador = new Comparador($city, $cities);
    $isValid = $comparador->comparar();
    expect($isValid)->toBeTrue();
});

// use app\class\verificaIdade;
// use app\class\objectMaker;

// beforeEach(function () {
//     $this->idade = new verificaIdade();
//     $this->object = new objectMaker();
// });

// it('is a valid age', function () {
//     expect($this->idade->idadeValida(-4))->not->toBeTrue();
// });

// it('is a instance', function() {
//     expect($this->idade)->toBeInstanceOf(verificaIdade::class);
// });

// test('is an object', function() {
//     $obj = $this->object->createObject("Nome", "Tobias", "Cidade", "Gramado");
//     expect($obj)->toBeArray();
// });