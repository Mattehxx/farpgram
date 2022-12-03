var username=document.getElementById("username");

var lastClicked=sessionStorage.getItem("lastClicked");
var value=sessionStorage.getItem(lastClicked);
username.innerHTML=value;