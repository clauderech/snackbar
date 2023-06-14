var ul_site = document.querySelector('.nav_site .ul_site');
var menu_mobile_site = document.querySelector('.menu_mobile_site');
var ul_pagina = document.querySelector('.nav_pagina .ul_pagina');
var menu_mobile_pagina = document.querySelector('.menu_mobile_pagina');

var aside = document.querySelector('aside');
var menu_openner = document.querySelector('menu-openner');
var main = document.querySelector('main');   

function menuSiteShow() {
    if (ul_site.classList.contains('open')) {
       ul_site.classList.remove('open');
       
    }else{
       ul_site.classList.add('open');
      
    }
}

function menuPaginaShow() {
  
   if (ul_pagina.classList.contains('abrir')) {
      ul_pagina.classList.remove('abrir');
      
   }else{
      ul_pagina.classList.add('abrir');
     
      
   }
}

const fecharMenuPagina = () => {
     ul_pagina.classList.remove('abrir');
     
}

function asideShow() {
      if (aside.classList.contains('show')) {
         aside.classList.remove('show');
      }else{
         aside.classList.add('show');
      }
}

