<?php

use app\class\verificaIdade;
use app\class\objectMaker;

beforeEach(function () {
    $this->idade = new verificaIdade();
    $this->object = new objectMaker();
});

it('is a valid age', function () {
    expect($this->idade->idadeValida(-4))->not->toBeTrue();
});

it('is a instance', function() {
    expect($this->idade)->toBeInstanceOf(verificaIdade::class);
});

test('is an object', function() {
    $obj = $this->object->createObject("Nome", "Tobias", "Cidade", "Gramado");
    expect($obj)->toBeArray();
});