<?php
return [
  'skip_headings' => true,
  'key_value' => true,
  'data' => [
    'upplysningsbolag' => [
      'label' => 'Upplysningsbolag',
      'type' => 'sentence',
      'replacements' => [
        'creditsafe' => 'Creditsafe'
      ]
    ],
    'uc' => [
      'use' => 'upplysningsbolag',
      'type' => 'has',
      'label' => 'Tar UC',
    ],
    'identifiering' => [
      'type' => 'sentence',
      'label' => 'Identifiering',
      'replacements' => [
        'bankid' => 'BankID',
        'e-leg' => 'E-leg',
        'telefon' => 'Telefon'
      ]
    ],
    'direktutbetalning_banker' => [
      'type' => 'sentence',
      'label' => 'Utbetalning banker',
      'replacements' => [
        'nordea' => 'Nordea',
        'handelsbanken' => 'Handelsbanken',
        'seb' => 'SEB',
        'danskebank' => 'Danskebank'
      ]
    ],
    'direktutbetalning' => [
      'use' => 'direktutbetalning_banker',
      'type' => 'has',
      'label' => 'Direktutbetalning'
    ]
  ]
];