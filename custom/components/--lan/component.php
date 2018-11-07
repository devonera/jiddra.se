<?= component('header'); ?>
<?= component('top'); ?>
<main>
  <div class="tabs">
    <div data-tabs>
      <div class="active">Enkel</div>
      <div>Avancerad</div>
    </div>
  </div>

  
  <?= component('filter-form/advanced'); ?>
  
  <div class="page"></div>
  <div class="results"></div>
</main>

<?= component('footer'); ?>