<?= component('header'); ?>
<?= component('top'); ?>
<main>

  <?= component('rows', ['headline' => $headline]); ?>

  <div class="page">
    <format-text>
      <h1><?= $page_title; ?></h1>

      <?= $story; ?>

    </format-text>
  </div>
</main>
<?= component('footer'); ?>