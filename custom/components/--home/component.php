<?= component(option('cpath') . 'header'); ?>
<?= component(option('cpath') . 'top'); ?>
<?php $Parsedown = new Parsedown(); ?>
<main>
  <?= component(option('cpath') . 'lan-rows', ['headline' => $rows_headline]); ?>

  <div class="page">
    <format-text>
      <h1><?= $title; ?></h1>

      <?= $story; ?>

    <h2>Kategorier</h2>
    <ul>
    <?php foreach($categories as $item): ?>
      <li>
        <a href="<?= $item['slug']; ?>"><?= $item['title']; ?></a>
      </li>
    <?php endforeach; ?>
    </ul>
    </format-text>
  </div>
</main>
<?= component(option('cpath') . 'footer'); ?>