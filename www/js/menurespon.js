var ul = document.querySelector('nav ul');
var menu_mobile = document.querySelector('.menu_mobile');

var aside = document.querySelector('aside');
var menu_openner = document.querySelector('menu-openner');
var main = document.querySelector('main');   

function menuShow() {
    if (ul.classList.contains('open')) {
       ul.classList.remove('open'); 
    }else{
       ul.classList.add('open'); 
    }
}

function asideShow() {
      if (aside.classList.contains('show')) {
         aside.classList.remove('show');
      }else{
         aside.classList.add('show');
      }
}
