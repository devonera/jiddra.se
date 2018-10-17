<?php
class vHelpers {
  function filter($name, $collection) {
    $f = new TinyFilters();
    $vgroups = new ValidatorGroups();
    $f = $vgroups->{$name}($f, $collection);
    return self::unsetCollection($f, $collection);
  }

  function unsetCollection($f, $collection) {
    foreach($collection as $path => $item) {
      if(!$f->validate($item)) unset($collection[$path]);
    }
    return $collection;
  }

  function flattenServices($services) {
    $formatted = self::formatServices($services);
    $keyvalue = self::keyValueServices($formatted);
    return $keyvalue;
  }

  function keyValueServices($formatted) {
    if(!isset($formatted)) return;

    foreach($formatted as $path => $service) {
      if(!isset($service)) continue;

      foreach($service as $type => $item) {
        if(!isset($item)) continue;

        $out[$path]['types'][] = $type;

        foreach($item as $group_name => $group) {
          if(!isset($group)) continue;
          foreach($group as $key => $values) {
            if(!isset($values['raw'])) continue;
            $out[$path][$key] = $values['raw'];
          }
        }
      }
    }
    return $out;
  }

  function formatServices($services) {
    foreach($services as $type => $service) {
      foreach($service as $path => $item) {
        $out[$path][$type] = filter($item);
      }
    }
    return $out;
  }
}