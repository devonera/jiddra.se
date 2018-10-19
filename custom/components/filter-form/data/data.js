var data = (function () {
  var fn = {};

  fn.init = function() {
    fn.collection = {};
    fn.selector = {};
    fn.selector['range'] = '[data-panes] > .active input[type="range"]';
    fn.selector['checkbox'] = '[data-panes] > .active .checkboxes input[type="checkbox"]';
    fn.selector['select'] = '[data-panes] > .active .selectboxes select';

    Object.keys(fn.selector).forEach(function(key) {
      fn.get(key);
      fn.trigger(key);
    });

    fn.collection = Object.assign({}, fn.collection);
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

    fetch('http://localhost/io/sites/jiddra.se/api', {
      method: 'POST',
      body: json,
      headers: {
        //"Content-Type": "application/x-www-form-urlencoded;charset=UTF-8",
        "Content-Type": "Content-Type: application/json"
    },
    }).then(function(response) {
      return response.text();
    }).then(function(text) { 
      console.log(text);
      document.querySelector('.results').innerHTML = text;
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

// Trigger tab