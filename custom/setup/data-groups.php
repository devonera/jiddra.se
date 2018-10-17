<?php
class DataGroups {
  function get($method, $items) {
    return $this->{$method}($items);
  }

  function page($items) {
    return $items;
  }

  function oppettider($items) {
    $Daybreaker = new Daybreaker();
    $weekdays = [
      'Måndag',
      'Tisdag',
      'Onsdag',
      'Torsdag',
      'Fredag',
      'Lördag',
      'Söndag'
    ];
    return $Daybreaker->convert($items, $weekdays);
  }

  function kostnader($items) {
    return $items;
  }

  function quotes($items) {
    return $items;
  }
}