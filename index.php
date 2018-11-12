<?php
include __DIR__ . '/../../io-cms/core/index.php';

$root = $_SERVER["REMOTE_ADDR"] == '::1' ? 'http://localhost/io/public_html/jiddra.se' : 'https://jiddra.se';

setPaths([
  'root' => __DIR__,
  'custom' => __DIR__ . '/custom',
  'plugins' => __DIR__ . '/../../io-shared/plugins',
  'meta' => __DIR__ . '/custom/meta'
]);

setUrls([
  'root' => $root,
]);

init();