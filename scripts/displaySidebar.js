var btnSidebar=document.getElementById("btn-display");
var sidebar=document.getElementById("side-nav");
var ulSidebar=document.getElementById("functions");

btnSidebar.addEventListener('click' ,function() {
    
    if(btnSidebar.getAttribute("class")=="close"){
        console.log("sto aprendo");   
        sidebar.style.maxWidth="200px";
        sidebar.style.minWidth="200px";
        /* sidebar.style.transition="all 0.5"; */
        ulSidebar.style.display="static";
        btnSidebar.classList.add("open");
        btnSidebar.classList.remove("close");
    } else 
    if(btnSidebar.getAttribute("class")=="open"){
        console.log("sto chiudendo");   
        sidebar.style.maxWidth="100px";
        sidebar.style.minWidth="100px";
        ulSidebar.style.display="none";
        /* ulSidebar.style.transition="all 0.5"; */
        btnSidebar.classList.add("close");
        btnSidebar.classList.remove("open");
    }
});