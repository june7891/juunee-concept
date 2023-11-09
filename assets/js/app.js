


const logo = document.querySelectorAll("#logo path");


document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('ul.navbar-nav > li');
  
    navItems.forEach(function (item) {
      item.addEventListener('click', function (e) {
        navItems.forEach(function (navItem) {
          navItem.classList.remove('active');
        });
        this.classList.add('active');
      });
    });
  });


  

  let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('show');
})

let link = document.querySelector('.menu');

link.addEventListener('click', function() {
    body.classList.remove('show');
})