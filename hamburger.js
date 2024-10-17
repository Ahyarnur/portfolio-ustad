  // Hamburger menu toggle
  const hamburgerButton = document.getElementById('hamburgerButton');
  const mobileMenu = document.getElementById('mobileMenu');

  hamburgerButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
  });

 
  dropdownButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
  });

  // Dropdown menu toggle (Mobile)
  const dropdownButtonMobile = document.getElementById('dropdownButtonMobile');
  const dropdownMenuMobile = document.getElementById('dropdownMenuMobile');

  dropdownButtonMobile.addEventListener('click', () => {
      dropdownMenuMobile.classList.toggle('hidden');
  });

  // Menutup dropdown jika klik di luar elemen dropdown
  window.addEventListener('click', function(e) {
      if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
          dropdownMenu.classList.add('hidden');
      }
      if (!dropdownButtonMobile.contains(e.target) && !dropdownMenuMobile.contains(e.target)) {
          dropdownMenuMobile.classList.add('hidden');
      }
  });