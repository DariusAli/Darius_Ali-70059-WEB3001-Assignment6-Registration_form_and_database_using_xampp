function validateTextInput(){
    var a = document.forms["childInfo"]["School_Name"].value;
    var b = document.forms["childInfo"]["Sname"].value;
    var c = document.forms["childInfo"]["Fname"].value;
    var d = document.forms["childInfo"]["Nationality"].value;
    var e = document.forms["childInfo"]["Religion"].value;
    var f = document.forms["childInfo"]["address"].value;
    var g = document.forms["childInfo"]["BC_PIN"].value;

    if(a == "" || a == null || !isNaN(a)){
        alert("Please enter the School Name. Letters only");
        return false;
    }

    if(b == "" || b == null || !isNaN(b)){
        alert("Please enter a Surname. Letters only");
        return false;
    }

    if(c == "" || c == null || !isNaN(c)){
        alert("Please enter a First Name. Letters only");
        return false;
    }

    if(d == "" || d == null || !isNaN(d)){
        alert("Please enter a Nationality. Letters only");
        return false;
    }
  
    if(g == "" || g == null || isNaN(g)){
        alert("Please enter the Birth Certificate PIN(Personal Identification Number). Numbers only");
        return false;
    }

    if(e == "" || e == null || !isNaN(e)){
        alert("Please enter a Religion. Letters only");
        return false;
    }

    if(f == "" || f == null || !isNaN(f)){
        alert("Please enter an address.");
        return false;
    }
}  

function validateParentInput(){
    var a = document.forms["parentInfo"]["P1_name"].value;
    var b = document.forms["parentInfo"]["P1_Relation"].value;
    var c = document.forms["parentInfo"]["P1_email"].value;
    var d = document.forms["parentInfo"]["P1_contact"].value;
    var e = document.forms["parentInfo"]["P1_address"].value;
    if(a == null || a == "" || !isNaN(a)){
        alert("Please enter parent full name for Parent 1/Guardian 1. Letters only");
        return false;
    }

    if(b == null || b == "" || !isNaN(b)){
        alert("Please enter the realtion to the child for Parent 1/Guardian 1. Letters only");
        return false;
    }

    if(c == null || c == ""){
        alert("Please enter an email address for Parent 1/Guardian 1.");
        return false;
    }

    if(d == null || d == ""){
        alert("Please enter a phone number for contact for Parent 1/Guardian 1.");
        return false;
    }

    if(e == null || e == "" || !isNaN(e)){
        alert("Please enter a valid address for Parent 1/Guardian 1.");
        return false;
    }
}

function validateParentInput_Sibling_Page(){
    var a = document.forms["siblingInfo"]["parent_name"].value;
    var b = document.forms["siblingInfo"]["relation"].value;
    var c = document.forms["siblingInfo"]["child_name"].value;
    
    if(a == null || a == "" || !isNaN(a)){
        alert("Please enter Parent/Guardian full name. Letters only");
        return false;
    }

    if(b == null || b == "" || !isNaN(b)){
        alert("Please enter Parent/Guradian relation to child. Letters only");
        return false;
    }

    if(c == null || c == "" || !isNaN(c)){
        alert("Please enter the child's full name. Letters only");
        return false;
    }
}

 