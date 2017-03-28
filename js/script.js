function chkPassword() {
    var init = document.getElementById("pwd");
    if (init.value == ""){
        document.getElementById("errorSpace").innerHTML += "<br />You did not enter a password \n" + "<br />Please enter one now.";
        return false;
        
    }
    if (init.value.length < 6){
        document.getElementById("errorSpace").innerHTML += "<br />You did not enter a password with an appropriate length (6 characters) \n" + "<br />Please enter one now.";
        return false;
        
    } else
        return true;
    
    
}

function chkPasswordMatch() {
    var init = document.getElementById("pwd");
    var sec = document.getElementById("pwdRpt");

    if (init.value != sec.value){
        document.getElementById("errorSpace").innerHTML += "<br />The two passwords you entered are not the same \n" + "<br />Please re-enter both now.";
        return false;
        
    } else
        return true;
    
    
}


function chkFirstName() {
    var myName = document.getElementById("fName");
    
    var pos = myName.value.search(/^[A-Z][a-z]/);
    if (pos!=0){
        document.getElementById("errorSpace").innerHTML += "<br />The name you entered (" +myName.value + ") is not in the correct form. \n" + "The correct form is:" + "first-name \n" + "<br />Please go back and fix your first name.";
        
        return false;
    }
    else
        return true;
    
}

function chkLastName() {
    var myName = document.getElementById("lName");
    
    var pos = myName.value.search(/^[A-Z][a-z]/);
    if (pos!=0){
        document.getElementById("errorSpace").innerHTML += "<br />The name you entered (" +myName.value + ") is not in the correct form. \n" + "The correct form is:" + "last-name \n" + "<br />Please go back and fix your last name.";
        
        return false;
    }
    else
        return true;
    
}

function chkPhone() {
    var myPhone = document.getElementById("phone");
    
    var pos = myPhone.value.search(/^\d{3}-\d{3}-\d{4}$/);
    if (pos!=0){
        document.getElementById("errorSpace").innerHTML += "<br />The phone number you entered (" + myPhone.value + ") is not in the correct form. \n" + "The correct form is:" + "###-###-####.\n" + "<br />Please go back and fix your phone number.";
        
        return false;
    }
    else
        return true;
    
}

function chkEmail() {
    var myEmail = document.getElementById("email");
    
    var pos = myEmail.value.search(/\w{1,}@\w{1,}.\w{1,}$/);
    if (pos!=0){
        document.getElementById("errorSpace").innerHTML += "<br />The email you entered (" + myEmail.value + ") is not in the correct form. \n" + "The correct form is:" + "email@website.com.\n" + "<br />Please go back and fix your email.";
        
        return false;
    }
    else
        return true;
    
}