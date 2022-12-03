const followed="Account already followed";
const notFollowed="Account not followed";


var div=document.getElementById("btnDiv");
var username=document.getElementById("username");   //Prendo l'h1 contenente l'username della persona che voglio seguire
var btn=document.createElement("button");   //Creazione bottone segui
btn.type="button";
btn.classList.add("btn");
btn.classList.add("btn-primary");
btn.classList.add("rounded-pill");
btn.classList.add("position-relative");
btn.classList.add("top-50");
btn.classList.add("translate-middle-y");
btn.innerHTML="Segui";
div.appendChild(btn);

/**
 * Richiesta per vedere se seguo già la persona in questione
 */
/*
var request=new XMLHttpRequest();
request.open('POST', '../function/alreadyFollow.php');
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var toFollow=username.textContent;    //Metto l'username della persona da seguire nella variabile @toFollow
request.send("toFollow="+toFollow);

request.onload = () => {    
    let response=request.responseText;
    if (response==followed) {   //Se la seguo
        btn.innerHTML="Seguito";
        btn.classList.add("btn-outline-primary");
    } else if (response==notFollowed) { //Se non la seguo
        btn.innerHTML="Segui";
        btn.classList.add("btn-primary");
    }
}
*/
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