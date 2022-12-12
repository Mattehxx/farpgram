var txtFirstName=document.getElementById("firstName");
var txtLastName=document.getElementById("LastName");
var BiotxtArea=document.getElementById("bio");
var sexRadio=document.getElementById("gender");
var autoBirthDate=document.getElementById("birth-date");
var autoPfp=document.getElementById("pfp-image");
var autoBtnModProfile=document.getElementById("btnModProfile");

autoBtnModProfile.addEventListener('click',function() {

    var request=new XMLHttpRequest();
    request.open('POST', '../function/autoEditProfile.php');
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var value=txt.value;
    request.send("auto="+value);

    request.onload = () => {

        var response=JSON.parse(request.responseText);

        txtFirstName.value=response['firstName'];
        txtLastName.value=response['LastName'];
        BiotxtArea.value=response['bio'];
        sexRadio.value=response['sex'];
        autoBirthDate.value=response['birthDate'];
        autoPfp.value=response['pfp'];
    }
});
