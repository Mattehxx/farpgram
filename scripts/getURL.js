var img=document.getElementById("img"); 
var user=document.getElementById("user");
var body=document.getElementById("descrizione");
var postLocation=document.getElementById("location");
var actionTime=document.getElementById("ts");

var lastURLClicked=sessionStorage.getItem("lastURLClicked");
var value=sessionStorage.getItem(lastURLClicked);

img.src=value;

let tmp=value.substring(26);
tmp=".."+tmp;

var requestURL=new XMLHttpRequest();
requestURL.open('POST', '../function/getURL.php');
requestURL.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var username=user.textContent;
requestURL.send("url="+tmp);

requestURL.onload = () => {
    let response=JSON.parse(requestURL.responseText);
console.log(response['username']);
    user.innerHTML=response['username'];

    body.innerHTML=response['body'];

    postLocation.innerHTML=response['location'];

    actionTime.innerHTML=response['actionTime'];
}
