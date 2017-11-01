//Errors description assigned to variables used for specific functions 
const ERROR_FNAME = "ERRO NOME - O campo primeiro nome deve ser preenchido. <br>";
const ERROR_LNAME = "ERRO SOBRENOME - O campo sobrenome deve ser preenchido. <br>";
const ERROR_EMAIL = "ERRO E-MAIL: Por favor digite um email válido ex.: johndoe@gmail.com <br>";
const ERROR_MESSAGE = "ERRO MENSAGEM: O campo Mensagem deve ser preenchido. <br>";

//Function to give focus to the first element
window.onload = function ()
{
    document.getElementById("fname").focus();
}

function ValidateFName() {
    var firstName;

    firstName = document.getElementById("fname").value;
    if (firstName.length < 2 || firstName === "" || !isNaN(parseInt(firstName))) {
        document.getElementById("errormessage").innerHTML += ERROR_FNAME;
        document.getElementById("fname").focus();
    }
}

//Function to validate Last Name
function ValidateLName() {
    var lastName;

    lastName = document.getElementById("lname").value;
    if (lastName.length < 2 || lastName === "" || !isNaN(parseInt(lastName))) {
        document.getElementById("errormessage").innerHTML += ERROR_LNAME;
        document.getElementById("lname").focus();
    }
}

//Function to validate email
function ValidateEmail() {
    var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email;

    email = document.getElementById("email").value;
    if (regEx.test(email) == false || email === "") {
        document.getElementById("errormessage").innerHTML += ERROR_EMAIL;
        document.getElementById("email").focus();
    }
}

function ValidateMessage() {
    var message;

    message = document.getElementById("message").value;
    if (message.length < 5 || message === "" || !isNaN(parseInt(message))) {
        document.getElementById("errormessage").innerHTML += ERROR_MESSAGE;
        document.getElementById("message").focus();
    }
}


//Function to validate all form
function ValidateForm() {
    document.getElementById("errormessage").innerHTML = "";
    ValidateMessage();
    ValidateEmail();
    ValidateLName();
    ValidateFName();


    //If the script finds an error, it will not send the form
    if (document.getElementById("errormessage").innerHTML != "")
    {
        alert("Um ou mais campos contêm erros, sua mensagem não foi enviada.");
        return false;
    }

    return true;
}
