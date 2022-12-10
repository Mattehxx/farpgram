var profileUser=document.getElementById("username"); //Prendo l'username dell'account che sto visitando
var post=document.getElementById("post");
var follower=document.getElementById("follower");
var following=document.getElementById("following");

var requestStats=new XMLHttpRequest();
requestStats.open('POST', '../function/checkStats.php');
requestStats.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var profileUsername=profileUser.textContent;
requestStats.send("username="+profileUsername);

requestStats.onload = () => {
    let response=JSON.parse(requestStats.responseText);
    post.innerHTML="Post <br>"+response['post'];
    follower.innerHTML="Seguaci <br>"+response['follower'];
    following.innerHTML="Seguiti <br>"+response['following'];
}