<div class="intro">
  <format-text>
    <h3><?= $headline; ?></h3>
  </format-text>
</div>

<div class="rows">
  <ul>
    <?php foreach($filtered as $path => $misc) : ?>
      <?php $child = $children[$path]; ?>
      <li>
        <a href="<?= url(basename($path)); ?>">
          <?php
          $iconpath = path::get('content') . '/companies/' . basename($path) . '/icon';
          if(file_exists($iconpath . '.svg')) {
            $extension = 'svg';
          } elseif(file_exists($iconpath. '.png')) {
            $extension = 'png';
          }elseif(file_exists($iconpath . '.jpg')) {
            $extension = 'jpg';
          }

          ?>
          <figure>
              <img src="<?= url('assets/content/companies/' . basename($path) . '/icon.' . $extension); ?>" width="100">
          </figure>
          <div class="text">
            <h3><?= $child['page']['title']; ?></h3>
            <?php if(isset($child['snabblan']['snabblan-item'])) : ?>
              Ansök om <?= $child['snabblan']['snabblan-item']['befintlig_kund_belopp']['nice']; ?>
            <?php elseif(isset($child['kreditkonto']['kreditkonto-item'])) : ?>
              Ansök om <?= $child['kreditkonto']['kreditkonto-item']['befintlig_kund_belopp']['nice']; ?>
            <?php endif; ?>
          </div>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>