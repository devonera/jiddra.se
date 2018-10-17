<?php
$services = [];
if($page->children()->find('kreditkonto')) {
  $services['kreditkonto']['title'] = 'Kreditkonto';
  $services['kreditkonto']['item'] = include __DIR__ . '/../data/kreditkonto.php';
  $services['kreditkonto']['kostnader'] = include __DIR__ . '/../data/kreditkonto-kostnader.php';
}

if($page->children()->find('snabblan')) {
  $services['snabblan']['title'] = 'Snabblån';
  $services['snabblan']['item'] = include __DIR__ . '/../data/snabblan.php';
}

return [
  'services' => $services
];