<?php

$services = [];
if($page->children()->find('kreditkonto')) {
  $services['kreditkonto']['title'] = 'Kreditkonto';
  $services['kreditkonto']['item'] = include __DIR__ . '/data/kreditkonto.php';
  $services['kreditkonto']['kostnader'] = include __DIR__ . '/data/kreditkonto-kostnader.php';
}

if($page->children()->find('snabblan')) {
  $services['snabblan']['title'] = 'Snabblån';
  $services['snabblan']['item'] = include __DIR__ . '/data/snabblan.php';
  $services['snabblan']['kostnader'] = include __DIR__ . '/data/snabblan-kostnader.php';
}

return [
  'quotes' => include __DIR__ . '/data/quotes.php',
  'weekdays' => include __DIR__ . '/data/weekdays.php',
  'company' => include __DIR__ . '/data/company.php',
  'kontakt' => include __DIR__ . '/data/kontakt.php',
  'krav' => include __DIR__ . '/data/krav.php',
  'info' => include __DIR__ . '/data/info.php',
  'services' => $services
];