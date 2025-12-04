const navLinks = {
  start: document.getElementById('link-start'),
  about: document.getElementById('link-about'),
  history: document.getElementById('link-history'),
  characters: document.getElementById('link-characters'),
};

const observer = new IntersectionObserver(
  entries => {
    let bestEntry = null;

    entries.forEach(entry => {
      if (entry.isIntersecting) {
        if (!bestEntry || entry.intersectionRatio > bestEntry.intersectionRatio) {
          bestEntry = entry;
        }
      }
    });

    if (bestEntry) {
      const sectionId = bestEntry.target.id;
      const link = navLinks[sectionId];

      if (!link) return;

      Object.values(navLinks).forEach(link => link.classList.remove('active'));

      link.classList.add('active');
    }
  },
  {
    threshold: 0.65,
  }
);

document.querySelectorAll('.section').forEach(sec => {
  observer.observe(sec);
});
