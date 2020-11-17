
var hasShipping = false;
function shipping(){
    if(document.getElementById("1a").checked||document.getElementById("1b").checked||document.getElementById("1c").checked){
        hasShipping = true;
    }
}

function validate(){
    var valid = true;
    shipping();
    if(!(document.getElementById("username").value.includes("@"))&&!(document.getElementById("username").value.includes(".com"))){
        valid = false;
        alert("Username must be in the form of (name@domain.com)");
    }
    if(document.getElementById("password").value.length<1){
        valid = false;
        alert("You must enter a valid password");
    }
    if(hasShipping == false){
        valid = false;
        alert("You must select a shipping option");
    }
    if(valid == true){
        alert("Credentials are valid. Click Submit to view your reciept.");
    }
}
