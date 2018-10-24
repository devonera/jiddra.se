<?php if(isset($class)) : ?>
  <comp-top class="<?= $class; ?>">
<?php else : ?>
  <comp-top>
<?php endif; ?>
  <div class="bar">
    <div class="logo">
        <a href="<?= url(); ?>">
          <img src="<?= url('assets/components/top/logo-white.svg'); ?>" width="200">
        </a>
    </div>
    <div class="menu">
      <ul>
      <?php /*
        <li<?= page::slug() == 'rantefritt' ? ' class="active"': ''; ?>><a href="<?= url('rantefritt'); ?>">Räntefria lån</a></li>
        <li<?= page::slug() == 'snabblan' ? ' class="active"': ''; ?>><a href="<?= url('snabblan'); ?>">Snabblån</a></li>
        <li<?= page::slug() == 'kreditkonto' ? ' class="active"': ''; ?>><a href="<?= url('kreditkonto'); ?>">Kreditkonto</a></li>
        <li<?= page::slug() == 'app' ? ' class="active"': ''; ?>><a href="<?= url('app'); ?>">Kunskap</a></li>
        */?>
        <li<?= page::slug() == 'app' ? ' class="active"': ''; ?>><a href="<?= url('app'); ?>">Lån</a></li>
        
      </ul>
    </div>
  </div>
</comp-top>