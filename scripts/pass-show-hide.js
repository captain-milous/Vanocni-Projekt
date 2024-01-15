const pswrdField = document.getElementById("password");
const toggleIcon = document.getElementById("show-hide");

toggleIcon.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
  }else{
    pswrdField.type = "password";
  }
}
