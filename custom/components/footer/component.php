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

<script>
var select = new CustomSelect({
    elem: "color-select", 
});

var select2 = new CustomSelect({
    elem: "age",
});

var select3 = new CustomSelect({
    elem: "type",
});

<?php /*
document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('#color-select').onchange=changeEventHandler;
},false);

function changeEventHandler(event) {
    // You can use “this” to refer to the selected element.
    if(!event.target.value) alert('Please Select One');
    else alert('You like ' + event.target.value + ' ice cream.'); 
}
*/ ?>
</script>

</body>
</html>