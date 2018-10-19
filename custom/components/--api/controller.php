<?php
return function($component, $matches) {
  $callback = include __DIR__ . '/../--article/controller.php';
  return $callback($component, $matches, 'api');
};