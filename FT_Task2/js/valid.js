function regValid(){
    if(validName() && validage() && validemail() && validpass()){
        return true;
    }
    else{
        return false;
    }
}

function validName(){
    var fname = document.getElementById("fname").value;
    console.log(fname.length);
    if(fname.length === 0){
        document.getElementById("namemsg").innerHTML = "Invalid Name!!";
        return false;
    }
    else{
        document.getElementById("namemsg").innerHTML = "";
        return true;
    }
}

function validage(){
    var age = document.getElementById("age").value;
    console.log(age);
    if(age < 10){
        document.getElementById("agemsg").innerHTML = "Invalid Age!!";
        return false;
    }
    else{
        document.getElementById("agemsg").innerHTML = "";
        return true;
    }
}

function validemail(){
    var email = document.getElementById("email").value;

    if(email.value.match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )){
        document.getElementById("emailmsg").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("emailmsg").innerHTML = "Invalid Email!!";
        return false;
    }
}

function validpass(){
    var pass = document.getElementById("pass").value;
    console.log(pass.length);
    if(pass.length < 6){
        document.getElementById("passmsg").innerHTML = "Invalid Password!!";
        return false;
    }
    else{
        document.getElementById("passmsg").innerHTML = "";
        return true;
    }
}