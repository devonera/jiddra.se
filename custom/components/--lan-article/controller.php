<?php
return function($component, $matches) {
  $page = page();

  option::set('content-parent', 'articles');

  $Parsedown = new Parsedown();
  $content = Spyc::YAMLLoad(path::get('content') . '/articles/' . $page . '/article.txt');

  if(isset($content['type'])) {
    if($content['type'] == 'rows') {
      $collector = data::set('collector/lan-multiple', $page);
      $format = format::set('LanMultiple', $collector);
      $filtered = filtered::set('LanMultiple', $format['lan'], $page);

      $current = array_values($format['current'])[0];

      $data = $current;
      $data['children'] = $format['lan'];
      $data['filtered'] = $filtered;
    } else {
      $data = $content;
      $Parsedown = new Parsedown();
      $data['story'] = $Parsedown->text(file_get_contents(path::get('content') . '/articles/' . $page . '/story.md'));
      $data['itembox'] = ['lan'];
      $childpath = path::get('meta');
    }
  }

  $data['route'] = '--article';
  $data['page'] = $page;

  return $data;
};