var btn=document.getElementById("btnFollow");   //bottone segui
var username=document.getElementById("username");   //h1 contenente l'username della persona che voglio seguire

btn.addEventListener('click', function() {
    
    var request=new XMLHttpRequest();
    request.open('POST', '../function/follow.php');
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var toFollow=username.value;    //metto l'username della persona da seguire nella variabile @toFollow
    request.send("toFollow="+toFollow);

    request.onload = () => {

    }

})