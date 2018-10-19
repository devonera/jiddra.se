<?= component('header'); ?>
<?= component('top'); ?>
<main>
  <div class="tabs">
    <div data-tabs>
      <div class="active">Enkel</div>
      <div>Avancerad</div>
    </div>
  </div>

  <div data-panes>
    <div class="active"><?= component('filter-form/simple'); ?></div>
    <div><?= component('filter-form/advanced'); ?></div>
    <div>Pane3</div>
  </div>
  <div class="page">
  </div>
</main>

<script >
var rangesliders = document.querySelectorAll('.rangeslider input');

for(i = 0; i< rangesliders.length; i++) {
  document.documentElement.classList.add('js');

  rangesliders[i].addEventListener('input', function(e) {
    output = this.nextElementSibling;
    output.innerHTML = e.target.value;
  }, false);
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function(){
  var tabs = tabbis.init({
    tabGroup: '[data-tabs]',
    paneGroup: '[data-panes]',
    tabActive: 'active',
    paneActive: 'active',
    callback: function(tab, pane) {
      console.log(tab);
      console.log(pane);
    }
  });
});
</script>

<div class="results"></div>

<?= component('footer'); ?>