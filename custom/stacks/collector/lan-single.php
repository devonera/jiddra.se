<?php
return function($page) {
  return [
    [
      'name' => 'current',
      'paths' => path::get('cms') . '/../io-meta/companies/' . $page,
      'files' => [
        'company.txt',
        'kontakt.csv',
        'info.csv',
        'krav.csv',
        'quotes.csv',
        'weekdays.csv',
        'service.csv',
        'kreditkonto/item.csv',
        'kreditkonto/kostnader.csv',
        'snabblan/item.csv',
        'snabblan/kostnader.csv',
        'story.md',
      ]
    ],
  ];
};