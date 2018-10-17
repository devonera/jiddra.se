<?php
include __DIR__ . '/../../io-cms/core/index.php';

setPaths([
  'custom' => __DIR__ . '/custom'
]);

setUrls([
  'root' => 'http://localhost/io/sites/jiddra.se'
]);

init();