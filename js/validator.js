//   Register the event handlers for the form


//the following function not defined in regValidator.js yet, just to provide you some idea
document.getElementById("fName").onchange = chkFirstName;//validate first name
document.getElementById("lName").onchange = chkLastName;//validate last name
document.getElementById("email").onchange = chkEmail;//validate email
document.getElementById("pwd").onchange = chkPassword; //validate your password(such as length, uppercase, numbers if you require so)
document.getElementById("pwdRpt").onchange = chkPasswordMatch;
//document.getElementById("inputPassword2").onchange = chkPasswordMatch;//make sure pw matches
document.getElementById("phone").onchange = chkPhone;//validate phone