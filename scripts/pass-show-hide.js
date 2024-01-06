const pswrdField = document.getElementById("password"); 

function myFunction() { 
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
    } else {
        pswrdField.type = "password";
    }
}

