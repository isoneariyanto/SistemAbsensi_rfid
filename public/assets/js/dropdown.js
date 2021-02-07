function myFunction() {
  var x = document.getElementById('myDropdown');
  var icon1 = document.getElementById("icon1");
  var icon2 = document.getElementById("icon2");
  if (x.style.display === 'none') {
    x.style.display = 'block';
    icon1.style.cssText = "display : none;";
    icon2.style.cssText = "display : inline; margin-left: 15px";
  } else {
    x.style.display = 'none';
    icon1.style.cssText = "display : inline; margin-left: 15px;";
    icon2.style.cssText = "display : none;";
  }
}
// window.onclick = function(event) {
//   var x = 
//   if (!event.target.matches('.btnDropdown')) {
//     var dropdowns = document.getElementsByClassName("dropdown-menu");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
// function myFunction() {
//   var x = document.getElementById('myDropdown');
//   if (x.openDropdown.classList.toggle("dropdown-menu",false)) {
//     x.openDropdown.classList.toggle("dropdown-menu",true);
//     document.getElementById("icon2").style.display="inline";
//     document.getElementById("icon1").style.display="none";
//   } else {
//     document.getElementById("icon1").style.display="inline";
//     document.getElementById("icon2").style.display="none";
//   }
// }

// Close the dropdown menu if the user clicks outside of it