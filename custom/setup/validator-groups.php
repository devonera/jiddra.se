<?php
class ValidatorGroups {
  function test($collection) {
    $this->f->add('alder_min', 'same', 18);
    $this->ValidatorHelpers->unsetCollection($this->f, $collection);
  }

  function rantefritt($f) {
    $f->add('gratis_belopp_min', 'min', 0);
    return $f;
  }

  function snabblan($f) {
    $f->add('types', 'in', 'snabblan');
    return $f;
  }

  function kreditkonto($f) {
    $f->add('types', 'in', 'kreditkonto');
    return $f;
  }

  function api($f) {
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo gettype($_POST['anmarkning']);
    print_r($_POST);
    #$array = json_decode($_POST[0]);
    #print_r($array);
    #$f->add('telefon', 'isString');
    $f->add('alder_min', 'isString');
    if($_POST['anmarkning']) $f->add('betalningsanm_accepteras', 'same', true);
    return $f;
  }
}

/*
[belopp] => 30
    [loptid] => 16000
    [rantefritt] => 
    [anmarkning] => 
    [inkomstkrav] => 
    [eleg] => 
    [oppetnu] => 
    [chatt] => 
    [upplaggningsavgift] => 
    [color] => 
    [age] => 
    [type] => 
*/