<?php
return function($page) {
  $meta = children('companies', path::get('cms') . '/../io-shared/meta');
  return [
    [
      'name' => 'lan',
      'paths' => $meta,
      'files' => [
        'company.txt',
        'kontakt.csv',
        'info.csv',
        'krav.csv',
        'weekdays.csv',
        'kreditkonto/item.csv',
        'kreditkonto/kostnader.csv',
        'snabblan/item.csv',
        'snabblan/kostnader.csv'
      ]
    ],
    [
      'name' => 'current',
      'paths' => [path::get('content') . '/home'],
      'files' => [
        'article.txt',
        'story.md'
      ]
    ],
    [
      'name' => 'kategorier',
      'paths' => [
        path::get('content') . '/articles/kreditkonto',
        path::get('content') . '/articles/snabblan',
        path::get('content') . '/articles/rantefritt'
      ],
      'files' => [
        'article.txt',
      ]
    ],
  ];
};