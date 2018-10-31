<?php
return function($component, $matches) {
  $page = page();

  $collector = data::set('collector/lan-single', $page);
  $format = format::set('LanSingle', $collector);
  
  // Thumb screenshot generation
  thumbScreenshot($page);

  $data = array_merge($format['company'], $format);
  $data['screenshot'] = url(sprintf('assets/cache/content/companies/%s/screenshot.png', $page));
  $data['page'] = $page;

  return $data;
};