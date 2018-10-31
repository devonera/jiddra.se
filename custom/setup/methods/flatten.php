<?php
class Flatten {
  function set($collection) {
    $this->collection = $collection;
    $this->filter();
  }

  function get() {
    return $this->collection;
  }

  function filter() {
    $output = [];
    
    foreach($this->collection as $path => $item) {
      foreach($item as $key => $params) {
        if(!isset($params['raw'])) continue;
        $output[$path][$key]= $params['raw'];
      }
    }
    $this->collection = $output;
  }
}