document.addEventListener('DOMContentLoaded', function () {
  const burgerBtn = document.getElementById('menu-ad');
  const sidebar = document.querySelector('.menu-lateral');

  burgerBtn.addEventListener('click', function () {
    sidebar.classList.toggle('active');
  });



document.addEventListener('click', function (e) {
  const sidebar = document.querySelector('.menu-lateral');
  const burgerBtn = document.getElementById('menu-ad');

  if (!sidebar.contains(e.target) && !burgerBtn.contains(e.target)) {
    sidebar.classList.remove('active');
  }
});



  const currentPage = window.location.pathname.split('/').pop();
  const navLinks = document.querySelectorAll('.li-ad a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });





//menu admin
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menu-ad");
  const menu = document.querySelector(".menu-lateral");

  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!toggle.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove("active");
      }
    });
  } else {
    console.warn("menu-ad ou menu-lateral non trouvé dans le DOM");
  }
});



  
});































window.addEventListener('pageshow', function (event) {
  if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
    window.location.reload();
  }
});