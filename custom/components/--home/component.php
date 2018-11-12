<?= component(option('cpath') . 'header'); ?>
<?= component(option('cpath') . 'top'); ?>
<?php $Parsedown = new Parsedown(); ?>
<main>
<div class="itemboxes">
  <ul>
    <li>
      <?= component('itembox/presets/lan', ['count' => 3]); ?>
    </li>
  </ul>
</div>
  <?php # component(option('cpath') . 'lan-rows', ['headline' => $rows_headline]); ?>

  <div class="page">
    <format-text>
      

    <h2>Artiklar</h2>
      <ul>
        <?php foreach($categories as $item): ?>
          <li>
            <a href="<?= $item['slug']; ?>"><?= $item['title']; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>

      <h1><?= $title; ?></h1>
      <?= $story; ?>
    </format-text>
  </div>
</main>
<?= component(option('cpath') . 'footer'); ?>