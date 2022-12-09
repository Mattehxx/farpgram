var btnImg=document.getElementById("img");
var p=document.getElementById("para");

btnImg.addEventListener('change', function() {
    let url=btnImg.value;
    p.innerHTML=url;
})