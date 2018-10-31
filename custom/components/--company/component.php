<?= component('header'); ?>
<?= component('top'); ?>

<main>
  <div class="hero">
    <div class="inside">
      <?php if(isset($screenshot)) : ?>
      
        <a class="image" href="<?= $affiliate_url; ?>" data-href="<?= $site_url; ?>" style="background-image: url('<?= $screenshot; ?>')">
          <div class="backdrop">
            <div class="action-top">
              Ansök hos <?= $title; ?>
            </div>
          </div>
        </a>
      <?php endif; ?>

      <?php if($info || $krav || $company || $kontakt || $weekdays || $services || $quotes) : ?>
        <div class="data">
          <h3><?= $title; ?></h3>

          <?php if(isset($services)) : ?>
            <?php foreach($services as $groupname => $item) : ?>
              <?php if(isset($item['files']['item']) || isset($item['files']['kostnader'])) : ?>
                <h2 class="service-title"><?= $item['title']; ?></h2>
                <section class="columns">
                  <?php if(isset($item['files']['item']['data'])) : ?>
                    <?= component('--company/block', ['items' => $item['files']['item']['data'], 'heading' => $item['files']['item']['title']]); ?>  
                  <?php endif; ?>
                  <?php if(isset($item['files']['kostnader']['data'])) : ?>
                    <?= component('--company/list', ['items' => $item['files']['kostnader']['data']['kostnader']['nice'], 'block_title' => $item['files']['kostnader']['title']]); ?>
                  <?php endif; ?>
                </section>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>

          <h2 class="service-title">Fakta</h2>

          <?php if($info || $krav) : ?>
            <section class="columns">
              <?= component('--company/block',['items' => $info, 'heading' => 'Information']); ?>
              <?= component('--company/block',['items' => $krav, 'heading' => 'Krav']); ?>
            </section>
          <?php endif; ?>

          <section>
            <?= component('--company/quotes'); ?>
          </section>

          <?php if($service || $kontakt) : ?>
            <section class="columns">
              <?= component('--company/block',['items' => $service, 'heading' => 'Företaget']); ?>
              <?= component('--company/block',['items' => $kontakt, 'heading' => 'Kontakt' ]); ?>
            </section>
          <?php endif; ?>

          <?php if($weekdays['oppettider']['nice']) : ?>
            <section class="columns">
              <?= component('--company/list', ['items' => $weekdays['oppettider']['nice'], 'block_title' => 'Öppettider']); ?>
            </section>
          <?php endif; ?>
          <section>
              <div class="action-bottom">
                <a href="<?= $affiliate_url; ?>" data-href="<?= $site_url; ?>">Ansök hos <?= $title; ?></a>
              </div>
          </section>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if(!empty($story)) : ?>
    <div class="page">
      <format-text>
        <h1><?= $title; ?></h1>  
        <?= $story; ?>
      </format-text>
    </div>
  <?php endif; ?>
</main>
<?= component('footer'); ?>