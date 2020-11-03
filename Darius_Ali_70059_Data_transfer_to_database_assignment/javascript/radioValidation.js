function siblingRadioValidation(){

    var siblings = document.getElementsByName('siblings');
    var siblingsValue = false;

    for(var i=0; i<siblings.length;i++){
        if(siblings[i].checked == true){
            siblingsValue = true;   
        }
    }

    if(siblings[0].checked == true)
    {
        alert("Please enter the name and class of the siblings");
        return false;
    }

    if(!siblingsValue){
        alert("Please select if there are siblings.");
        return false;
    }

}

function genderRadioValidation(){

    var gender = document.getElementsByName('gender');
    var genValue = false;

    for(var i=0; i<gender.length;i++){
        if(gender[i].checked == true){
            genValue = true;    
        }
    }
    if(!genValue){
        alert("Please Choose the gender");
        return false;
    }

}

function immunisationRadioValidation(){

    var immunisation = document.getElementsByName('immunisation');
    var immunisationValue = false;

    for(var i=0; i<immunisation.length;i++){
        if(immunisation[i].checked == true){
            immunisationValue = true;    
        }
    }
    if(!immunisationValue){
        alert("Please select if your child's immunisation is up to date.");
        return false;
    }

}