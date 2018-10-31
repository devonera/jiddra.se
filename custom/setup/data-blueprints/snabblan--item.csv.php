<?php
return [
  'skip_headings' => true,
  'key_value' => true,
  'data' => [
    'ny_kund_belopp_min' => [
      'type' => 'integer',
    ],
    'ny_kund_belopp_max' => [
      'type' => 'integer',
    ],
    'ny_kund_belopp' => [
      'type' => 'interval',
      'label' => 'Belopp ny kund',
      'suffix' => 'kr'
    ],
    'befintlig_kund_belopp_min' => [
      'type' => 'integer',
    ],
    'befintlig_kund_belopp_max' => [
      'type' => 'integer',
    ],
    'befintlig_kund_belopp' => [
      'type' => 'interval',
      'label' => 'Belopp befintlig kund',
      'suffix' => 'kr'
    ],
    'gratis_max_loptid' => [
      'type' => 'integer',
    ],
    'gratis_belopp_min' => [
      'type' => 'integer',
    ],
    'gratis_belopp_max' => [
      'type' => 'integer',
    ],
    'gratis_belopp' => [
      'type' => 'interval',
      'label' => 'Räntefritt belopp',
      'suffix' => 'kr'
    ],
  ]
];