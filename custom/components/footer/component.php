<footer>
  Copyright &copy; jiddra.se <?= date('Y'); ?>

  <a href="<?= url('faq'); ?>">FAQ</a>
  <a href="<?= url('kontakt'); ?>">Kontakt</a>
</footer>

<?php $time = server::isLocalhost() ? '?time=' . time() : ''; ?>

<script src="<?= url('assets/cache/assets/js/script.min-min.js' . $time); ?>"></script>

<script>
// Affiliate beautifier
document.addEventListener('DOMContentLoaded', function() {
	affiliateBeautifier.init({
		selector: 'a'
  });
  
  // Cookie
  new CookiesEuBanner(function(){
    <?= ga::get('UA-10645465-31'); ?>
  }, true);
});
</script>

<?php if(isset($route)) : ?>
  <?= component($route . '/footer.php'); ?>
<?php endif; ?>

</body>
</html>