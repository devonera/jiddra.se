<?= component('header'); ?>
<?= component('top', ['class' => 'line']); ?>
<main>

  <div class="page">
    <format-text>
      <h1><?= $page['title']; ?></h1>  
      <?= $story; ?>
      <?php if(page() == 'kontakt') : ?>
      <?= getObfuscatedEmailLink('vardagsfinans.se@gmail.com'); ?>
      <?php endif; ?>
    </format-text>
  </div>
</main>
<?= component('footer'); ?>