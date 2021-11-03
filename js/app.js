let nav = document.querySelector(".menu__list");
let toggler = document.querySelector('.menu__toggler');
toggler.addEventListener('click', () => {
  if (!nav.classList.contains('active')) {
    nav.classList.remove('disable');
    nav.classList.add('active');
    toggler.innerHTML = '<i class="fas fa-times"></i>';
  }
  else {
    nav.classList.remove('active');
    nav.classList.add('disable');
    toggler.innerHTML = '<i class="fas fa-bars"></i>';
  }
})