/*MENU MOBILE*/
document.addEventListener("DOMContentLoaded", function (event) {
  var icon = document.querySelector(".icon-mobile-menu > span > i");

  icon.addEventListener('click', iconMenuClick)
  

  function iconMenuClick(){
    document.querySelector(".menu-global-mobile").classList.toggle("show-mobile-menu")
  }
})