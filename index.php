<?php
include __DIR__ . '/../../io-cms/core/index.php';

setPaths([
  'custom' => __DIR__ . '/custom',
  'plugins' => __DIR__ . '/../../plugins'
]);

setUrls([
  'root' => 'http://localhost/io/sites/jiddra.se',
]);

init();