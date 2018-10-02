(function() {
  function keepRatio() {
    if(window.innerWidth < 950) return;

    var el = $('#sec-intro-text');

    el.css('width', el.height() + 'px');
    el.css('left', (window.innerWidth - el.width()) / 2 + 'px');
  }

  window.addEventListener('resize', keepRatio);
  keepRatio();
})();