<?= component('header'); ?>
<?= component('top', ['class' => 'line']); ?>
<main>

  <div class="page">
    <format-text>
      <h1><?= $title; ?></h1>  
      <?= $story; ?>

      <ul>
        <?php foreach(children('articles') as $item) : ?>
          <?php $spyc = Spyc::YAMLLoad($item . '/article.txt'); ?>
          <li>
            <a href="<?= url(basename($item)); ?>">
              <?= $spyc['page_title']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </format-text>
  </div>
</main>
<?= component('footer'); ?>