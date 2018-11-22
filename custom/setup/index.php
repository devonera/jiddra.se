<?php
include __DIR__ . '/methods/index.php';

$meta = children('companies', path::get('meta'));

options::set([
  'cpath' => '../../../../io-shared/components/',
  'footer' => [
    'om-oss' => 'Om oss',
    'faq' => 'FAQ',
    'kontakt' => 'Kontakt',
    'cookies' => 'Cookies',
  ],
  'topmenu' => [
    'lan' => 'Lån',
    'kunskap' => 'Artiklar'
  ],
  'lan-company-count' => count($meta),
  'drawer' => [
    'lan' => 'Lån och krediter'
  ],
  'sitename' => 'JIDDRA',
  'ga' => 'UA-10645465-31',
]);