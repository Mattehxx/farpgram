var user=document.getElementById("username"); //Prendo l'username dell'account che sto visitando
var post=document.getElementById("post");
var follower=document.getElementById("follower");
var following=document.getElementById("following");

var requestStats=new XMLHttpRequest();
requestStats.open('POST', '../function/checkStats.php');
requestStats.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var username=user.textContent;
requestStats.send("username="+username);

requestStats.onload = () => {
    let response=JSON.parse(requestStats.responseText);
    follower.innerHTML="Seguaci: "+response['follower'];
    following.innerHTML="Seguiti: "+response['following'];
}