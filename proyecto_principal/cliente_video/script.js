console.clear();

Array.from(
document.querySelectorAll('.video-tile'),
function (el) {
  const video = el.querySelector('video');

  el.addEventListener('mouseenter', () => {
    video.play();
  });

  el.addEventListener('mouseleave', () => {
    video.pause();
    setTimeout(() => {video.currentTime = 0;}, 400);
  });
});

const elVideoToggle = document.querySelector('.video-toggle');

elVideoToggle.addEventListener('click', e => {
  elVideoToggle.classList.toggle('active');
  const condition = elVideoToggle.matches('.active');
  elVideoToggle.querySelector('video')[condition ? 'play' : 'pause']();
});