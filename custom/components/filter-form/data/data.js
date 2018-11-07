var data = (function () {
  var fn = {};

  fn.init = function(root) {
    fn.root = root;
    fn.collection = {};
    fn.selectors();

    Object.keys(fn.selector).forEach(function(key) {
      fn.get(key);
      fn.trigger(key);
    });

    fn.collection = Object.assign({}, fn.collection);
    fn.ajax();
  };

  fn.selectors = function() {
    fn.selector = {};
    fn.selector['range'] = '.form input[type="range"]';
    fn.selector['checkbox'] = '.form .checkboxes input[type="checkbox"]';
    fn.selector['select'] = '.form .selectboxes select';
  };

  fn.go = function() {
    fn.collection = [];
    Object.keys(fn.selector).forEach(function(key) {
      fn.get(key);
    });

    fn.collection = Object.assign({}, fn.collection);

    fn.ajax();
  };

  fn.get = function(type) {
    var selector = fn.selector[type];
    var items = document.querySelectorAll(selector);
    for(i = 0; i<items.length; i++) {
      var item = items[i];
      fn.collection[item.getAttribute('name')] = window.data[type](item);
    }
  };

  fn.ajax = function() {
    var json = JSON.stringify(fn.collection);

    console.log(fn.root);

    fetch(fn.root + '/api', {
      method: 'POST',
      body: json,
      headers: {
        "Content-Type": "Content-Type: application/json"
    },
    }).then(function(response) {
      return response.text();
    }).then(function(text) { 
      //console.log(text);
      document.querySelector('.results').innerHTML = text;
      window.initEasyToggleState();
    });
  };

  fn.range = function(item) {
    return item.value;
  };

  fn.checkbox = function(item) {
    return item.checked;
  };

  fn.select = function(item) {
    return item.options[item.selectedIndex].value;
  };

  fn.reset = function() {
    fn.selectors();
    var checkboxes = document.querySelectorAll(fn.selector['checkbox']);
    var selects = document.querySelectorAll(fn.selector['select']);

    for(i=0; i<checkboxes.length; i++) {
      checkboxes[i].checked = false;
    }

    for(i=0; i<selects.length; i++) {
      var current = selects[i];
      var group = current.previousElementSibling;
      var button = group.querySelector('button');
      var list_item_current = group.querySelector('[data-index="' + current.selectedIndex +  '"]');
      var list_item_first = group.querySelector('[data-index="0"]').innerHTML;
      button.innerHTML = list_item_first;
      list_item_current.classList.remove('is-selected');

      current.selectedIndex = 0;
    }
  };

  fn.trigger = function(type) {
    var selector = fn.selector[type];
    var items = document.querySelectorAll(selector);

    for(i = 0; i<items.length; i++) {
      items[i].onchange = function() {
        fn.go();
      };
    }
  };
  
	return fn;
})();