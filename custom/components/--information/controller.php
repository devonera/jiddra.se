<?php
return function($component, $matches) {
  $page = page();

  $current = data::set(path::fromUri('information/' . $page), [
    'page.txt' => 'page',
  ]);

  $story = data::set(path::fromUri('information/' . $page), [
    'story.md' => 'story'
  ]);

  $data['page'] = $current['page'];
  $data['story'] = $story['story'];

  return $data;
};