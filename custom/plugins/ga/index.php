<?php
class GA {
  function get($uid) {
    if(server::isLocalhost()) return "console.log('GA');\n";

    return "
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', '$uid', 'auto');
      ga('send', 'pageview');
    ";
  }
}

// Helpers
function ga($uid) {
  $GA = new GA();
  return $GA->get($uid);
}