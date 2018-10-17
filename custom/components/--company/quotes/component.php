<?php if($data['quotes']) : ?>
  <div class="block">
    <h2>Kunder säger</h2>
    <div class="quotes">
      <?php $number = null; ?>
      <?php foreach($data['quotes'] as $item) : ?>
        <?php
        $num = numberout($item[1]);
        $number = ($number == $num) ? $num + 1 : $num;
        $number = ($number == 11) ? 1 : $number;
        ?>

        <?php if(!empty($item[1])) : ?>
          <div class="quote">
            <figure>
              <img src="<?= url('assets/components/--company/avatars/' . $number . '.svg'); ?>">
            </figure>
            <blockquote>
              <p><?= $item[0]; ?></p>
              <?php if(!empty($item[1])) : ?>
                <cite>
                  <a href="<?= $item[1]; ?>">
                    <?= parse_url($item[1])['host']; ?>
                  </a>
                </cite>
              <?php endif; ?>
            </blockquote>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>