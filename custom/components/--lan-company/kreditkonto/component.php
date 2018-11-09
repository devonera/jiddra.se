<?php
$kreditkonto = $page->children()->find('kreditkonto');
$memory = '';
$weekdays = $page->getWeekdays();
?>

  <div class="block">
    <h2>Kreditkonto</h2>

    <table>
      <tr>
        <th>Belopp <span>(ny kund)</span>:</th>
        <td><?= $kreditkonto->ny_kund_min_belopp(); ?> - <?= $kreditkonto->ny_kund_max_belopp(); ?> kr</td>
      </tr>
      <tr>
        <th>Belopp <span>(befintlig kund)</span>:</th>
        <td><?= $kreditkonto->befintlig_kund_min_belopp(); ?> - <?= $kreditkonto->befintlig_kund_max_belopp(); ?> kr</td>
      </tr>
    </table>
  </div>