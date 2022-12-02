var username=document.getElementById("nome");

var lastClicked=sessionStorage.getItem("lastClicked");
var value=sessionStorage.getItem(lastClicked);
username.innerHTML=value;