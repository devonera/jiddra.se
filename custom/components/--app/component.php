<?= component('header'); ?>
<?= component('top'); ?>
<main>
  <?= component('filter-form'); ?>
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

<?= component('footer'); ?>