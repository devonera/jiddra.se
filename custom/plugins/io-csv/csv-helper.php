<?php
class csv {
  public static function pairs($file_uri) {
    $root = path::get('content');
    $Csv = new \JensTornell\IOCms\Csv();
    $data = $Csv->keyValuePair($root . '/' . $file_uri);
    return $data;
  }

  public static function read($filepath) {
    $Csv = new \JensTornell\IOCms\Csv();
    $data = $Csv->keyValuePair($filepath);
    return $data;
  }

  public static function get($filepath, $keep_headers = true) {
    $Csv = new \JensTornell\IOCms\Csv();
    $data = $Csv->toArray($filepath, $keep_headers);
    return $data;
  }
}