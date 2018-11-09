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
      'paths' => [path::get('content') . '/articles/' . $page],
      'files' => [
        'article.txt',
        'story.md'
      ]
    ],
  ];
};