(function() {
  var audio = new Audio('assets/audio/bg_music.mp3');

  audio.volume = .5;

  function toggleAudio() {
    if(audio.paused) {
      $('#toggle-audio')
        .addClass('on')
        .removeClass('off');

      audio.play();
    } else {
      $('#toggle-audio')
        .addClass('off')
        .removeClass('on');

      audio.pause();
    }
  }

  toggleAudio();

  $('#toggle-audio').on('click', toggleAudio);
})();