<div class="block">
  <h2><?= $heading; ?></h2>
  <ul class="koncern-group">
    <?php foreach($items as $name => $item) : ?>
      <?php if(isset($item['nice']) && isset($item['label'])) : ?>
        <li>
          <strong><?= $item['label']; ?>:</strong>
          <?= $item['nice']; ?>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>