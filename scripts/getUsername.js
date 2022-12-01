var username=document.getElementById("nome");

var lastClicked=localStorage.getItem("lastClicked");
var value=localStorage.getItem(lastClicked);
username.innerHTML=value;