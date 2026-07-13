// script.js — Portfolio Antonin Jarrier
// Fait apparaître les éléments (.reveal) au fur et à mesure du défilement.

(function () {
  var els = document.querySelectorAll('.reveal');

  // Si le navigateur ne supporte pas IntersectionObserver, on montre tout directement.
  if (!('IntersectionObserver' in window)) {
    els.forEach(function (e) { e.classList.add('in'); });
    return;
  }

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (en) {
      if (en.isIntersecting) {
        en.target.classList.add('in');
        io.unobserve(en.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(function (e) { io.observe(e); });

  // Le hero apparaît tout de suite, avec un léger décalage entre les éléments.
  var hero = document.querySelectorAll('.hero .reveal');
  hero.forEach(function (e, i) {
    setTimeout(function () { e.classList.add('in'); }, 80 * i);
  });
})();