


const logo = document.querySelectorAll("#logo path");


for(let i = 0; i < logo.length; i++){
    console.log(`letter ${i} is ${logo[i].getTotalLength()}`);
}



 
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
