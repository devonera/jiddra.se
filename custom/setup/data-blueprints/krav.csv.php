<?php
return [
  'skip_headings' => true,
  'key_value' => true,
  'data' => [
    'alder_min' => [
      'type' => 'integer'
    ],
    'alder_max' => [
      'type' => 'integer'
    ],
    'alder' => [
      'type' => 'interval',
      'label' => 'Ålder',
      'suffix' => 'år'
    ],
    'inkomstkrav' => [
      'type' => 'integer',
      'label' => 'Inkomstkrav',
      'suffix' => 'kr'
    ],
    'betalningsanm_accepteras' => [
      'type' => 'boolean',
      'label' => 'Anmärkning godtas'
    ]
  ]
];