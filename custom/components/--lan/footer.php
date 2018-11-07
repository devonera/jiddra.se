<script>
var rangesliders = document.querySelectorAll('.rangeslider input');

for(i = 0; i< rangesliders.length; i++) {
  document.documentElement.classList.add('js');

  rangesliders[i].addEventListener('input', function(e) {
    output = this.nextElementSibling;
    output.innerHTML = parseInt(e.target.value).toLocaleString();
  }, false);
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function(){
  data.init('<?= url(); ?>');
  var tabs = tabbis.init({
    tabGroup: '[data-tabs]',
    paneGroup: '[data-panes]',
    tabActive: 'active',
    paneActive: 'active',
    callback: function(tab, pane) {
      data.reset();
      data.init('<?= url(); ?>');
    }
  });
});
</script>

<script>
var select = new CustomSelect({
    elem: "bank", 
});

var select3 = new CustomSelect({
    elem: "type",
});
</script>