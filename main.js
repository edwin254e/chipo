
/*
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validate() {
    // Retrieving the values of form elements 
    var firstName = document.registerForm.firstName.value;
    var secondName=document.registerForm.secondName.value
    var email = document.registerForm.email.value;
    var password=document.registerForm.password.value;
    var repeatPassword=document.registerForm.repeatPassword.value;
	// Defining error variables with a default value
    var firstNameErr =secondNameErr=passwordErr=repeatPasswordErr= emailErr=true;
    
    // Validate name
    if(firstName == "") {
        printError("firstNameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(firstName) === false) {
            printError("firstNameErr", "Please enter a valid name");
        } else {
            printError("firstNameErr", "");
            firstNameErr = false;
        }
    }
    if(secondName == "") {
        printError("secondNameErr", "Please enter your second name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(secondName) === false) {
            printError("secondNameErr", "Please enter a valid name");
        } else {
            printError("secondNameErr", "");
            secondNameErr = false;
        }
    }
    if(password == "") {
        printError("passwordErr", "Please enter your password");
    } 
    if(repeatPassword == "") {
        printError("repeatPasswordErr", "Please confirm your password");
    } 
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Prevent the form from being submitted if there are any errors
    if((firstNameErr || secondNameErr|| emailErr || passwordErr || repeatPasswordErr) == true) {
       return false;
    }
};*/