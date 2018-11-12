<?php
return [
  'skip_headings' => true,
  'key_value' => true,
  'data' => [
    'upplysningsbolag' => [
      'label' => 'Upplysningsbolag',
      'type' => 'sentence',
      'replacements' => [
        'creditsafe' => 'Creditsafe',
        'bisnode' => 'Bisnode',
        'uc' => 'UC'
      ]
    ],
    /*'uc' => [
      'use' => 'upplysningsbolag',
      'type' => 'in',
      'match' => 'uc',
      'label' => 'Tar UC',
    ],*/
    'identifiering' => [
      'type' => 'sentence',
      'label' => 'Identifiering',
      'replacements' => [
        'bankid' => 'bankID',
        'e-leg' => 'e-leg',
        'telefon' => 'telefon',
        'id-handling' => 'ID-handling'
      ]
    ],
    'direktutbetalning_banker' => [
      'type' => 'sentence',
      'label' => 'Utbetalning banker',
      'replacements' => [
        'nordea' => 'Nordea',
        'handelsbanken' => 'Handelsbanken',
        'seb' => 'SEB',
        'danskebank' => 'Danskebank',
        'swedbank' => 'Swedbank'
      ]
    ],
    'direktutbetalning' => [
      'use' => 'direktutbetalning_banker',
      'type' => 'has',
      'label' => 'Direktutbetalning'
    ]
  ]
];