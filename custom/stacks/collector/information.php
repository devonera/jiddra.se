<?php
return function($page) {
  return [
    [
      'name' => 'current',
      'paths' => path::get('content') . '/information/' . $page,
      'files' => [
        'page.txt',
        'story.md',
      ]
    ],
  ];
};