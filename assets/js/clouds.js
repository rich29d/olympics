(function() {
  var clouds = document.getElementsByClassName('detalhes')[0].children;

  // Converte para uma array real
  clouds = Array.prototype.slice.call(clouds);

  clouds.forEach(function(el) {
    el.animCounter = 0;
    el.addEventListener('animationend', onAnimationEnd);

    Array.prototype.slice.call(el.children).forEach(function(childImage){
      childImage.wobbleInterval = 10;
      childImage.wobbleTotal = 1000 + (100 * Math.random());
      childImage.wobbleElapsed = 0;
      childImage.wobbleRadius = 2;

      setInterval((function() {
        this.wobbleElapsed += this.wobbleInterval;

        wobble(this, (this.wobbleElapsed / this.wobbleTotal));

        if(this.wobbleElapsed >= this.wobbleTotal) {
          this.wobbleElapsed = 0;
        }
      }).bind(childImage), childImage.wobbleInterval);
    });
  });

  // ===================================================================================

  function onAnimationEnd() {
    this.animCounter++;

    if(this.animCounter === 5) {
      this.animCounter = 0;

      this.style.display = 'none';
      
      setTimeout((function() {
        this.style.display = 'block';
      }).bind(this), 20);
    }
  }

  function wobble(el, anglePos) {
    var radius = el.wobbleRadius;
    var angle = (Math.PI * 2) * anglePos;
    var x = radius * Math.cos(angle);
    var y = radius * Math.sin(angle);

    el.style.transform = 'translate(' + x + 'px, ' + y + 'px)';

    if(false) {
      var niff = document.getElementById('niff');

      niff.innerHTML = 
      '<div>radius >> ' + radius + '</div>' +
      '<div>interval >> ' + el.wobbleInterval + '</div>' +
      '<div>total >> ' + el.wobbleTotal + '</div>' +
      '<div>percentage >> ' + el.wobbleElapsed + '</div>' +
      '<div>anglePos >> ' + anglePos + '</div>' +
      '<div>angle >> ' + angle + '</div>' +
      '<div>cos >> ' + x + '</div>' +
      '<div>sin >> ' + y + '</div>';
    }
  }
})();