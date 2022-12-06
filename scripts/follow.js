var div=document.getElementById("btnDiv");
var username=document.getElementById("username");   //Prendo l'h1 contenente l'username della persona che voglio seguire
var btn=document.getElementById("btnFollow");

/**
 * EventListener per la funzione follow al click del bottone
 */
btn.addEventListener('click', function() {
    
    var request=new XMLHttpRequest();
    request.open('POST', '../function/follow.php');
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var toFollow=username.textContent;    //Metto l'username della persona da seguire nella variabile @toFollow
    request.send("toFollow="+toFollow);

    if(btn.textContent=="Segui") {
        request.onload = () => {
            btn.innerHTML="Seguito";
            btn.classList.remove("btn-primary");
            btn.classList.add("btn-outline-primary");
        }
    } else {
        request.onload = () => {
            btn.innerHTML="Segui";
            btn.classList.remove("btn-outline-primary");
            btn.classList.add("btn-primary");
        }
    }
})