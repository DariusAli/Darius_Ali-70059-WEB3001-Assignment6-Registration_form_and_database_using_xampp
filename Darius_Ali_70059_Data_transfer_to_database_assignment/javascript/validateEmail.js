function validateEmail(){
    var emailInput = document.forms["parentInfo"]["P1_email"].value;
    var mailFormat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    
    if(emailInput.match(mailFormat)){
        alert("Parent 1/Guardian 1 email address is valid");
        return true;
    }
    else
    {
        alert("Please enter an email like shown: John.Doe@gmail.com");
        return false;
    }
}