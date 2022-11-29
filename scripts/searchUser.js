// come aggiungere classe con spazi

var div=document.getElementById("card");
var txt=document.getElementById("txtSearch");
var ul=document.createElement("ul");
ul.classList.add("list-group");
div.appendChild(ul);

txt.addEventListener("input", function() {

    var request=new XMLHttpRequest();
    request.open('GET', '../function/searchAccounts.php');
    request.send();
    
    request.onload = () => {
        var response=JSON.parse(request.responseText);

        ul.replaceChildren();

        response.forEach(element => {
            var li=document.createElement("li");
            li.classList.add("list-group-item");
            ul.appendChild(li);

            var a=document.createElement("a");
            a.href="#";
            a.classList.add("link");
            li.appendChild(a);

            var img=document.createElement("img");
            img.src="Images\colorful.PNG";
            a.classList.add("rounded-circle");
            a.style.maxWidth="2rem";
            a.appendChild(img);

            var span=document.createElement("span");
            span.classList.add("white");
            span.innerHTML=element["username"];
            a.appendChild(span);
        });
        

    }
    
});