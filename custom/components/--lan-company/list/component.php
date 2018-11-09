<div class="block">
  <h2><?= $block_title; ?></h2>
  <?php if(!empty($items)) : ?>
    <ul class="koncern-group">
      <?php foreach($items as $key => $value): ?>
        <li>
          <strong><?= $key; ?>:</strong> <?= $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <p>Information saknas</p>
  <?php endif; ?>
</div>