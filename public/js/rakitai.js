// Rakit AI interactions and scroll animations
document.documentElement.classList.add('js-motion');

const menuButton = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
if (menuButton && navLinks) {
  menuButton.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.textContent = open ? '×' : '☰';
  });
  navLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    navLinks.classList.remove('open');
    menuButton.setAttribute('aria-expanded', 'false');
    menuButton.textContent = '☰';
  }));
}

// Header gets a soft shadow once the page scrolls.
const header = document.querySelector('.site-header');
const updateHeader = () => {
  if (header) header.classList.toggle('scrolled', window.scrollY > 12);
};
window.addEventListener('scroll', updateHeader, { passive: true });
updateHeader();

// Add reveal effects to sections/cards and stagger sibling elements.
const revealTargets = document.querySelectorAll(
  '.hero-copy, .hero-visual, .section-intro, .center-heading, .feature-card, .tech-item, .tech-person, .stat-card, .class-card, .trial-banner, .event-card, .final-cta, .footer-main > div'
);
revealTargets.forEach((el, index) => {
  el.classList.add('reveal');
  if (el.matches('.hero-copy, .tech-column:first-child .tech-item')) el.classList.add('from-left');
  if (el.matches('.hero-visual, .tech-column:last-child .tech-item')) el.classList.add('from-right');
  if (el.matches('.feature-card, .stat-card, .class-card, .event-card')) {
    const siblings = Array.from(el.parentElement.children);
    el.style.setProperty('--reveal-delay', `${Math.min(siblings.indexOf(el), 4) * 100}ms`);
  }
});

if ('IntersectionObserver' in window) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });
  revealTargets.forEach(el => revealObserver.observe(el));
} else {
  revealTargets.forEach(el => el.classList.add('is-visible'));
}


// Scroll progress indicator, back-to-top, and floating contact button visibility.
const progressBar = document.querySelector('.scroll-progress span');
const backToTop = document.querySelector('.back-to-top');
function updateScrollUI() {
  const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
  const progress = maxScroll > 0 ? (window.scrollY / maxScroll) * 100 : 0;
  if (progressBar) progressBar.style.width = `${progress}%`;
  if (backToTop) backToTop.classList.toggle('is-visible', window.scrollY > 500);
}
window.addEventListener('scroll', updateScrollUI, { passive: true });
updateScrollUI();
if (backToTop) backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// Hero image carousel with manual dots and gentle auto-advance.
const heroSlides = Array.from(document.querySelectorAll('.hero-slideshow .hero-photo'));
const slideDots = Array.from(document.querySelectorAll('.slide-dot'));
let activeSlide = 0;
let slideTimer;
function showSlide(index) {
  if (!heroSlides.length) return;
  activeSlide = (index + heroSlides.length) % heroSlides.length;
  heroSlides.forEach((slide, i) => slide.classList.toggle('is-active', i === activeSlide));
  slideDots.forEach((dot, i) => {
    dot.classList.toggle('is-active', i === activeSlide);
    dot.setAttribute('aria-pressed', String(i === activeSlide));
  });
}
function restartSlideTimer() {
  if (slideTimer) window.clearInterval(slideTimer);
  if (heroSlides.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    slideTimer = window.setInterval(() => showSlide(activeSlide + 1), 5200);
  }
}
slideDots.forEach((dot, index) => dot.addEventListener('click', () => {
  showSlide(index);
  restartSlideTimer();
}));
showSlide(0);
restartSlideTimer();

// Animate numeric stats only when they enter the viewport.
const counters = document.querySelectorAll('.count-up');
function animateCounter(el) {
  if (el.dataset.counted === 'true') return;
  el.dataset.counted = 'true';
  const target = Number(el.dataset.count || 0);
  const suffix = el.dataset.suffix || '';
  const start = performance.now();
  const duration = 1100;
  function tick(now) {
    const p = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - p, 3);
    el.textContent = `${Math.round(target * eased)}${suffix}`;
    if (p < 1) requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
}
if ('IntersectionObserver' in window) {
  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.7 });
  counters.forEach(counter => counterObserver.observe(counter));
} else counters.forEach(animateCounter);

// Pointer-position glow and a very restrained card tilt on desktop.
const finePointer = window.matchMedia('(hover:hover) and (pointer:fine)').matches;
if (finePointer) {
  document.querySelectorAll('.feature-card,.stat-card,.class-card,.event-card').forEach(card => {
    card.addEventListener('pointermove', event => {
      const rect = card.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
    card.addEventListener('pointerleave', () => {
      card.style.removeProperty('--mouse-x');
      card.style.removeProperty('--mouse-y');
      card.style.transform = '';
    });
  });
  const heroVisual = document.querySelector('.hero-visual');
  if (heroVisual) {
    heroVisual.addEventListener('pointermove', event => {
      const rect = heroVisual.getBoundingClientRect();
      const dx = (event.clientX - rect.left) / rect.width - 0.5;
      const dy = (event.clientY - rect.top) / rect.height - 0.5;
      const activePhoto = heroVisual.querySelector('.hero-photo.is-active');
      if (activePhoto) activePhoto.style.filter = `saturate(1.04)`;
      heroVisual.style.setProperty('--tilt-x', `${dy * -2}deg`);
      heroVisual.style.setProperty('--tilt-y', `${dx * 2}deg`);
    });
    heroVisual.addEventListener('pointerleave', () => {
      heroVisual.style.removeProperty('--tilt-x');
      heroVisual.style.removeProperty('--tilt-y');
    });
  }
}
