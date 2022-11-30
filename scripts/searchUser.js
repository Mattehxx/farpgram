var div=document.getElementById("card");
var txt=document.getElementById("txtSearch");
var ul=document.createElement("ul");
ul.classList.add("list-group");
ul.classList.add("list-group-flush");
div.appendChild(ul);

txt.addEventListener("input", function() {

    var request=new XMLHttpRequest();
    request.open('POST', '../function/searchAccounts.php');
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var value=txt.value;
    request.send("txtSearch="+value);
    
    request.onload = () => {
        
        var response=JSON.parse(request.responseText);

        ul.replaceChildren();
        response.forEach(element => {
            var li=document.createElement("li");
            li.classList.add("list-group-item");
            li.classList.add("text-bg-dark");
            ul.appendChild(li);

            var a=document.createElement("a");
            a.href="../public/profile.php";
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

            var divBorder=document.createElement("div");
            divBorder.classList.add("bottom-border");
            ul.appendChild(divBorder);
        });
    }
  
    
});


txt.addEventListener('keyup',function(){
    if(txt.value.length == 0){
       ul.replaceChildren();
    }
});