<?php
$snabblan = $item->find('snabblan');
if($snabblan) :
  $filepath = $item->root() . '/snabblan/item.csv';
  if(file_exists($filepath)) {
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
  }
  ?>
  <?php if(isset($array)) : ?>
    Låna <?= $array[0]['value']; ?>
  <?php endif; ?>
<?php endif; ?>