<?php
$kreditkonto = $item->find('kreditkonto');
$snabblan = $item->find('snabblan');
if($kreditkonto) :
  $array = [];
  $filepath = $item->root() . '/kreditkonto/item.csv';
  $string = file_get_contents($filepath);
  $out = explode("\n", $string);
  array_shift($out);

  foreach($out as $i => $item) {
    $split = str_getcsv($item);
    $build[$split[0]] = $split[1];
  }

  $array[] = [
    'label' => 'Belopp befintlig kund',
    'value' => interval(['befintlig_kund_min_belopp', 'befintlig_kund_max_belopp'], $build)
  ];
?>
  Ansök om <?= $array[0]['value']; ?> på kredit
<?php elseif($snabblan) :
  $filepath = $item->root() . '/snabblan/item.csv';
  $string = file_get_contents($filepath);
  $out = explode("\n", $string);
  array_shift($out);

  foreach($out as $i => $item) {
    $split = str_getcsv($item);
    $build[$split[0]] = $split[1];
  }

  $array[] = [
    'label' => 'Belopp befintlig kund',
    'value' => interval(['befintlig_kund_min_belopp', 'befintlig_kund_max_belopp'], $build)
  ];
  ?>
  Låna <?= $array[0]['value']; ?>
<?php endif; ?>