<?php
$regex = '(';
foreach(children('companies') as $child) {
  $company = basename($child);
  $regex .= $company . '|';
}
$regex = substr($regex, 0, -1) . ')$';

route($regex, '--company');