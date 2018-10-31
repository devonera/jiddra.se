<?php
$childpath = path::get('root') . '/../meta';

$regex = '(';
foreach(children('companies', $childpath) as $child) {
  $company = basename($child);
  $regex .= $company . '|';
}
$regex = substr($regex, 0, -1) . ')$';

route($regex, '--company');