var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
  ytPlayer = new YT.Player(
    'youtube',
    {
      videoId: 'P78FugM9Cqs',
      playerVars: {
        loop: 1,
        playlist:'P78FugM9Cqs',
        controls: 0,
        autoplay: 1,
        rel: 0,
        showinfo: 0
      },
      events: {
        'onReady': onPlayerReady
      }
    }
  );
}
function onPlayerReady(event) {
  event.target.setVolume(0);
}