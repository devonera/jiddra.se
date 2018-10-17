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
}