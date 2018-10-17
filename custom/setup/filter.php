<?php
class Filter {
  function __construct() {
    $this->DataNice = new DataNice();
  }
  function data($collection) {
    $output = [];
    $DataGroups = new DataGroups();
    $DataItems = new DataItems();

    if(!isset($collection)) return $output;

    foreach($collection as $section => $items) {
      
      if(!file_exists($this->filepath($section)))
        continue;
      
      $setup = include $this->filepath($section);
      
      if($this->hasSetupData($setup, $items)) {
      
        $flatten = $this->toFlatten($items);

        foreach($setup['data'] as $name => $settings) {
          $key = $name;

          $raw = isset($flatten[$name]) ? $flatten[$name] : null;

          $type = $this->getType($settings, $name, $flatten);
          if($type) {
            $output[$section][$key] = $DataItems->{$type}($name, $raw, $setup, $flatten);
          }
        }
      } else {
        if(isset($setup['data'])) {
          $items = $setup['key_value'] ? $this->toFlatten($items) : $items;
          $output[$section] = $DataGroups->get($setup['data'], $items);
        }
      }
    }
    return $output;
  }

  function getType($settings, $name, $flatten) {
    if($this->hasUse($settings)) return 'byUse';
    elseif(array_key_exists($name, $flatten)) return 'byDefault';
    elseif($this->isInterval($settings)) return 'byInterval';
  }

  function toBool($raw) {
    return ($raw != '' && $raw != 'false') ? true : false;
  }

  function label($settings) {
    if(isset($settings['label'])) return $settings['label'];
  }

  function isInterval($settings) {
    return $settings['type'] == 'interval';
  }

  function filepath($section) {
    return path::get('setup') . '/data-blueprints/' . $section . '.php';
  }

  function hasSetupData($setup, $items) {
    if(isset($setup['data']) && is_array($setup['data']) && !empty($items)) return true;
  }

  function hasUse($settings) {
    if(isset($settings['use']) && $settings['type'] == 'has') return true;
  }

  function toFlatten($items) {
    $flatten = [];
    foreach($items as $item) $flatten[$item[0]] = $item[1];
    return $flatten;
  }
}

function filter($collection) {
  $Filter = new Filter();
  return $Filter->data($collection);
}