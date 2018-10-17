<?php
namespace JensTornell\IOCms;

class Csv {
  function toArray($filepath, $keep_headers = true) {
    $csv = array_map('str_getcsv', file($filepath));
    if($keep_headers) return $csv;
    array_shift($csv);
    return $csv;
  }
  function keyValuePair($filepath) {
    echo $filepath;
    $contents = file_get_contents($filepath);
    $parts = explode("\n", $contents);
    array_shift($parts);
    foreach($parts as $row) {
        $split = str_getcsv($row);
        $data[$split[0]] = $split[1];
    }
    #die;
    return $data;
  }
}