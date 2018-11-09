<?php
include path::get('cms') . '/../io-shared/routes/index.php';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
$currentpath = realpath(__DIR__ . '/index.php');

foreach($iterator as $file) {
  if($currentpath == $file->getPathname()) continue;

  if(substr($file->getFilename(), 0, 1) == '_') continue;
  if($file->getFilename() == 'error.php') continue;
  include $file->getPathname();
}

include __DIR__ . '/error.php';