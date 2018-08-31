

var hide=true;
function displayOrHide(){
var cityList=document.getElementById("menuBtn");
if(hide){
  menuList.style.display="block";
  hide=false;
  menuBtn.src="img/close.png";
}else{
   menuList.style.display="none";
  hide=true;
  menuBtn.src="img/menu.png";
}
}

