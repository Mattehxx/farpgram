var user=document.getElementById("username");
var ul=document.getElementById("posts");

var requestPosts=new XMLHttpRequest();
requestPosts.open('POST', '../function/profilePosts.php');
requestPosts.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var username=user.textContent;
requestPosts.send("username="+username);

requestPosts.onload = () => {
    let response=JSON.parse(requestPosts.responseText);
    response.forEach(element => {

        var li=document.createElement("li");
        li.classList.add("d-inline");
        ul.appendChild(li);

        var a=document.createElement("a");
        a.setAttribute("href", "../public/post.php");
        li.appendChild(a);

        var img=document.createElement("img");
        img.setAttribute("src", element["url"]);
        img.classList.add("post");
        img.classList.add("mb-4");
        a.appendChild(img);

        img.addEventListener('click', function() {
            sessionStorage.setItem("url", img.src);
            var key="url";
            sessionStorage.setItem("lastURLClicked", key);
            
        });
    });
}