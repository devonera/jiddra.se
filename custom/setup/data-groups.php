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
    $converted = $Daybreaker->convert($items, $weekdays);
    $result['oppettider']['raw'] = $items;
    $result['oppettider']['nice'] = $converted;
    return $result;
  }

  function kostnader($items) {
    $result['kostnader']['raw'] = $items;
    $result['kostnader']['nice'] = $items;
    return $result;
  }

  function quotes($items) {
    return $items;
  }
}