<?php
return function($page) {
  return [
    [
      'name' => 'current',
      'paths' => path::get('content') . '/' . $page,
      'files' => [
        'page.txt',
        'story.md',
      ]
    ],
  ];
};