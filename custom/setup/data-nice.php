<?php
class DataNice {
  function get($name, $args) {
    return $this->{$name}($args);
  }

  function sentence($args) {
    extract($args);
    $settings = $setup[$name];
    $values = explode(',', $raw);
    foreach($values as $raw_part) {
      $value = trim($raw_part);
      if(isset($settings['replacements'][$value])) {
        $replaced = str_replace($value, $settings['replacements'][$value], $value);
      } else {
        $replaced = $value;
      }
      $out[] = $replaced;
    }
    return arrayToSentence($out);
  }

  function has($args) {
    extract($args);

    $bool = ($raw != '' && $raw != 'false') ? true : false;
    $out = $raw ? 'Ja' : 'Nej';

    return $out;
  }

  function string($args) {
    return $this->integer($args);
  }

  function integer($args) {
    extract($args);
    $settings = $setup[$name];
    $suffix = '';
    if(isset($settings['suffix']) && is_numeric($raw)) {
      $raw = number_format($raw, 0, ' ', ' ') . ' ' . $settings['suffix'];
    }
    return $raw . $suffix;
  }

  function boolean($args) {
    extract($args);
    $out = $raw ? 'Ja' : 'Nej';
    return $out;
  }

  function address($args) {
    extract($args);
    return '<br>' . $raw;
  }

  function phone($args) {
    extract($args);
    return '<a href="tel:' . $raw . '">' . phone_number_format($raw) . '</a>';
  }

  function email($args) {
    extract($args);
    return getObfuscatedEmailLink($raw);
  }

  function orgnr($args) {
    extract($args);
    return '<a href="https://www.allabolag.se/'  . str_replace('-', '', $raw) . '">' . $raw . '</a>';
  }

  function fi($args) {
    extract($args);
    return '<a href="'  . $raw . '">Ja</a>';
  }

  function interval($args) {
    extract($args);

    $min = isset($flatten[$name . '_min']) ? $flatten[$name . '_min'] : null;
    $max = isset($flatten[$name . '_max']) ? $flatten[$name . '_max'] : null;

    $interval = minmax($min, $max, $setup[$name]['suffix']);
    return $interval;
  }
}