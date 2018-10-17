<?php
class DataItems {
  function __construct() {
    $this->DataNice = new DataNice();
    $this->Filter = new Filter();
  }

  function byUse($name, $raw, $setup, $flatten) {
    $settings = $setup['data'][$name];
    $use = $settings['use'];

    if(isset($flatten[$use])) {
      $new_raw = $flatten[$use];

      $out = [
        'raw' => $this->Filter->toBool($new_raw),
        'nice' => $this->DataNice->get('has', ['raw' => $new_raw]),
      ];

      if($this->Filter->label($settings))
        $out['label'] = $this->Filter->label($settings);

      return $out;
    }
  }

  function byInterval($name, $raw, $setup, $flatten) {
    $settings = $setup['data'][$name];

    $out = [
      'nice' => $this->DataNice->get($settings['type'], [
        'name' => $name,
        'setup' => $setup['data'],
        'flatten' => $flatten,
      ]),
    ];

    if($out['nice'] == '') return;

    if($this->Filter->label($settings))
      $out['label'] = $this->Filter->label($settings);
    
    return $out;
  }

  function byDefault($name, $raw, $setup, $flatten) {
    $settings = $setup['data'][$name];

    if($raw != '') {
      $out = [
        'raw' => $raw,
        'nice' => $this->Filter->DataNice->get($settings['type'], [
          'raw' => $raw,
          'name' => $name,
          'setup' => $setup['data'],
        ]),
      ];

      if($this->Filter->label($settings))
        $out['label'] = $this->Filter->label($settings);

      return $out;
    }
  }
}