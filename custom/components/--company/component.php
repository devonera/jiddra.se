<?= component('header'); ?>
<?= component('top'); ?>

<main>
  <div class="hero">
    <div class="inside">
      <?php if(isset($screenshot)) : ?>
      
        <a class="image" href="<?= $page['affiliate_url']; ?>" data-href="<?= $page['site_url']; ?>" style="background-image: url('<?= $screenshot; ?>')">
          <div class="backdrop">
            <div class="action-top">
              Ansök hos <?= $page['title']; ?>
            </div>
          </div>
        </a>
      <?php endif; ?>

      <?php if($data['info'] || $data['krav'] || $data['company'] || $data['kontakt'] || $data['weekdays'] || $data['services'] || $data['quotes']) : ?>
        <div class="data">
          <h3><?= $page['title']; ?></h3>

          <?php if(isset($services)) : ?>
            <?php foreach($services as $name => $service) : ?>
              <h2 class="service-title"><?= $headings[$name]; ?></h2>
              <section class="columns">
                <?php foreach($service as $key => $item) : ?>
                  <?php $first = array_values($item)[0]; ?>
                  <?php if(isset($first['nice'])) : ?>
                    <?= component('--company/block', [
                      'items' => $item,
                      'heading' => $headings[$key]
                    ]); ?>
                  <?php else : ?>
                    <?= component('--company/list', [
                      'items' => $item,
                      'block_title' => $headings[$key]]); ?>
                  <?php endif; ?>
                <?php endforeach; ?>
              </section>
            <?php endforeach; ?>
          <?php endif; ?>

          <h2 class="service-title">Fakta</h2>

          <?php if($data['info'] || $data['krav']) : ?>
            <section class="columns">
              <?= component('--company/block',[
                'items' => $data['info'],
                'heading' => 'Information'
              ]); ?>
              <?= component('--company/block',[
                'items' => $data['krav'],
                'heading' => 'Krav'
              ]); ?>
            </section>
          <?php endif; ?>

          <section>
            <?= component('--company/quotes'); ?>
          </section>

          <?php if($data['service'] || $data['kontakt']) : ?>
            <section class="columns">
              <?= component('--company/block',[
                'items' => $data['service'],
                'heading' => 'Företaget'
              ]); ?>
              <?= component('--company/block',[
                'items' => $data['kontakt'],
                'heading' => 'Kontakt'
              ]); ?>
            </section>
          <?php endif; ?>

          <?php if($data['weekdays']['oppettider']['nice']) : ?>
            <section class="columns">
              <?= component('--company/list', ['items' => $data['weekdays']['oppettider']['nice'], 'block_title' => 'Öppettider']); ?>
            </section>
          <?php endif; ?>
          <section>
              <div class="action-bottom">
                <a href="<?= $page['affiliate_url']; ?>" data-href="<?= $page['site_url']; ?>">Ansök hos <?= $page['title']; ?></a>
              </div>
          </section>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if(!empty($story)) : ?>
    <div class="page">
      <format-text>
        <h1><?= $page['title']; ?></h1>  
        <?= $story; ?>
      </format-text>
    </div>
  <?php endif; ?>
</main>
<?= component('footer'); ?>