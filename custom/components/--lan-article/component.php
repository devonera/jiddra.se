<?= component(option('cpath') . 'header'); ?>
<?= component(option('cpath') . 'top'); ?>
<main>

  <?php if(!empty($filtered)) : ?>
    <?= component(option('cpath') . 'lan-rows', ['headline' => $rows_headline]); ?>
  <?php endif; ?>

  <?php if(isset($itembox)) : ?>
    <div class="itemboxes">
      <ul>
        <?php foreach($itembox as $item) : ?>
          <li>
            <?= component('itembox/presets/' . $item); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="page">
    <format-text>
      <h1><?= $page_title; ?></h1>

      <?= $story; ?>

    </format-text>
  </div>
</main>
<?= component(option('cpath') . 'footer'); ?>