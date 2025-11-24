const gallery = document.getElementById('gallery');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const closeBtn = document.querySelector('.close');

gallery.addEventListener('click', (e) => {
  if (e.target.tagName.toLowerCase() === 'img') {
    lightbox.style.display = 'block';
    lightboxImg.src = e.target.src;
    document.body.style.overflow = 'hidden';
  }
});

closeBtn.addEventListener('click', () => {
  lightbox.style.display = 'none';
  document.body.style.overflow = 'auto';
});

lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox) {
    lightbox.style.display = 'none';
    document.body.style.overflow = 'auto';
  }
});
