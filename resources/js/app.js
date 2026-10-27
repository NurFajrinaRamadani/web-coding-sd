// ─── Tinggi topbar → CSS variable (untuk scroll-padding anchor) ─────────────
const topbar = document.getElementById('site-topbar');
if (topbar) {
  const setH = () =>
    document.documentElement.style.setProperty('--topbar-h', topbar.offsetHeight + 'px');
  setH();
  new ResizeObserver(setH).observe(topbar);
}

// ─── Drawer navigasi ────────────────────────────────────────────────────────
const drawer = document.getElementById('nav-drawer');
const overlay = document.getElementById('nav-overlay');
const openBtn = document.querySelector('[data-nav-open]');

function openNav() {
  if (!drawer) return;
  drawer.hidden = false;
  overlay.hidden = false;
  requestAnimationFrame(() => drawer.classList.add('nav-open'));
  openBtn?.setAttribute('aria-expanded', 'true');
  document.body.style.overflow = 'hidden';
  drawer.querySelector('a, button')?.focus();
}
function closeNav() {
  if (!drawer) return;
  drawer.classList.remove('nav-open');
  openBtn?.setAttribute('aria-expanded', 'false');
  document.body.style.overflow = '';
  setTimeout(() => { drawer.hidden = true; overlay.hidden = true; }, 300);
  openBtn?.focus();
}
openBtn?.addEventListener('click', openNav);
document.querySelectorAll('[data-nav-close]').forEach(el => el.addEventListener('click', closeNav));
overlay?.addEventListener('click', closeNav);

// ─── Accordion (satu terbuka per grup) ──────────────────────────────────────
document.querySelectorAll('[data-acc-btn]').forEach(btn => {
  btn.addEventListener('click', () => {
    const group = btn.closest('[data-acc-group]');
    const panel = document.getElementById(btn.getAttribute('aria-controls'));
    const willOpen = btn.getAttribute('aria-expanded') !== 'true';

    if (group?.dataset.accGroup === 'single') {
      group.querySelectorAll('[data-acc-btn]').forEach(b => setAcc(b, false));
    }
    setAcc(btn, willOpen);
  });
});
function setAcc(btn, open) {
  const panel = document.getElementById(btn.getAttribute('aria-controls'));
  btn.setAttribute('aria-expanded', String(open));
  panel?.classList.toggle('acc-open', open);
  btn.querySelector('.acc-arrow')?.classList.toggle('acc-open', open);
}

// ─── Tab kurikulum (benar-benar memfilter kartu) ────────────────────────────
const tabs = [...document.querySelectorAll('[data-curr-tab]')];
const cards = [...document.querySelectorAll('.curr-card')];

function selectTab(tab) {
  const key = tab.dataset.currTab;
  tabs.forEach(t => {
    const on = t === tab;
    t.setAttribute('aria-selected', String(on));
    t.tabIndex = on ? 0 : -1;
    t.classList.toggle('curr-tab-active', on);
    t.classList.toggle('curr-tab-inactive', !on);
  });
  cards.forEach(c => { c.hidden = c.dataset.group !== key; });
}
tabs.forEach((tab, i) => {
  tab.addEventListener('click', () => selectTab(tab));
  tab.addEventListener('keydown', e => {
    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
    const next = tabs[(i + (e.key === 'ArrowRight' ? 1 : -1) + tabs.length) % tabs.length];
    next.focus();
    selectTab(next);
  });
});
if (tabs.length) selectTab(tabs[0]);

// ─── Modal video (placeholder) ──────────────────────────────────────────────
const modal = document.getElementById('video-modal');
let lastFocus = null;
document.querySelectorAll('[data-video-open]').forEach(b =>
  b.addEventListener('click', () => {
    lastFocus = document.activeElement;
    modal.hidden = false;
    modal.querySelector('[data-video-close]')?.focus();
  })
);
function closeModal() {
  if (!modal || modal.hidden) return;
  modal.hidden = true;
  lastFocus?.focus();
}
modal?.querySelectorAll('[data-video-close]').forEach(b => b.addEventListener('click', closeModal));
modal?.addEventListener('click', e => { if (e.target === modal) closeModal(); });

document.addEventListener('keydown', e => {
  if (e.key !== 'Escape') return;
  closeModal();
  if (drawer?.classList.contains('nav-open')) closeNav();
});

// ─── Validasi form trial (sisi klien; server tetap memvalidasi ulang) ───────
const form = document.getElementById('trial-form');
if (form) {
  const rules = {
    nama_anak: v => v.trim().length >= 2 || 'Nama anak minimal 2 karakter.',
    no_wa: v => /^(\+62|62|0)8[1-9][0-9]{7,11}$/.test(v.replace(/[\s-]/g, ''))
      || 'Format nomor WhatsApp tidak valid. Contoh: 081234567890.',
  };

  const showError = (name, msg) => {
    const input = form.elements[name];
    const slot = form.querySelector(`[data-error-for="${name}"]`);
    input?.classList.toggle('form-field-error', !!msg);
    input?.setAttribute('aria-invalid', msg ? 'true' : 'false');
    if (slot) slot.textContent = msg || '';
  };

  form.addEventListener('submit', e => {
    let firstBad = null;
    Object.entries(rules).forEach(([name, check]) => {
      const res = check(form.elements[name]?.value ?? '');
      showError(name, res === true ? '' : res);
      if (res !== true && !firstBad) firstBad = form.elements[name];
    });
    if (firstBad) { e.preventDefault(); firstBad.focus(); }
  });

  form.querySelectorAll('input').forEach(i =>
    i.addEventListener('input', () => showError(i.name, ''))
  );
}