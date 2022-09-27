
  //Menu superior

//Menu Lateral

//document.getElementById("mySidenav").style.width = "250px";
function openNav() {
document.getElementById("mySidenav").style.marginRight = "0px";
document.getElementById("myopnebtn").style.marginRight = "264px";
document.getElementById("myopnebtn2").style.marginRight = "264px";
document.getElementById("myopnebtn2").style.zIndex = "11";

}

function closeNav() {
if(document.getElementById("myopnebtn").style.marginRight = "264px")
document.getElementById("mySidenav").style.marginRight = "-264px";
// document.getElementById("mySidenav").style.width = "0";
document.getElementById("myopnebtn").style.marginRight = "0px";
document.getElementById("myopnebtn2").style.marginRight = "0px";
document.getElementById("myopnebtn2").style.zIndex = "8";
}
  
