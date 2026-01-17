document.addEventListener('DOMContentLoaded', function () {
  // Menu hamburguesa toggle
  let menuToggle = document.getElementById('menuToggle');
  let mobileMenu = document.getElementById('mobileMenu');
  let menuIcon = menuToggle.querySelector('.material-symbols-outlined');

  menuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
    // Cambiar icono entre menu y close
    if (mobileMenu.classList.contains('hidden')) {
      menuIcon.textContent = 'menu';
    } else {
      menuIcon.textContent = 'close';
    }
  });

  // Tabs functionality
  let tabs = document.querySelectorAll('.tab');
  let contents = document.querySelectorAll('.tab-content');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function (e) {
      let targetId = tab.id.replace('Tab', 'Content');

      // Hide all content divs
      contents.forEach(function (content) {
        content.classList.add('hidden');
      });

      // Remove active class from all tabs
      tabs.forEach(function (tab) {
        tab.classList.remove('bg-tertiary', 'font-semibold');
        tab.classList.add('text-slate-900', 'font-medium');
        // Remove active icon class
        let icon = tab.querySelector('.bg-icon');
        if (icon) {
          icon.classList.remove('bg-icon-active');
        }
      });

      // Show the target content
      document.getElementById(targetId).classList.remove('hidden');

      // Add active class to the clicked tab
      tab.classList.add('bg-tertiary', 'font-semibold');
      tab.classList.remove('text-slate-900', 'font-medium');
      // Add active icon class
      let activeIcon = tab.querySelector('.bg-icon');
      if (activeIcon) {
        activeIcon.classList.add('bg-icon-active');
      }
    });
  });

  // Carousel de logos - duplicar automáticamente
  let carousel = document.getElementById('logoCarousel');
  if (carousel) {
    let originalContent = carousel.innerHTML;
    // Duplicar el contenido 3 veces para un loop infinito suave
    carousel.innerHTML = originalContent + originalContent + originalContent + originalContent;
  }
});
