/*
function GetFormattedDate(){
    /*var a = document.forms["childInfo"]["DOB"].format;

    var todayTime = new Date();
    var day = format(todayTime.getDate());
    var month = format(todayTime.getMonth() +1);
    var year = format(todayTime.getFullYear());
    var new_date =  day +"/" + month + "/" + year;
    
    a = new_date;*/ 

    //$('#DOB').datepicker({ dateFormat: 'dd-mm-yy' }).val();
    //$("#DOB").datepicker({ dateFormat: 'dd/mm/yy', changeMonth: true, changeYear: true });

    /*
    $(document).ready(function() {

        // set an element
        $("#DOB").val( moment().format('MM/DD/YYYY') );
   
        // set a variable
        var today = moment().format('DD/MM/YYYY');
   
   });*/
/*
   var today = new Date(); 
   var dd = today.getDate(); 
   var mm = today.getMonth()+1; //January is 0! 
   var yyyy = today.getFullYear(); 
   if(dd<10){dd='0'+dd} 
   if(mm<10){mm='0'+mm} 
   var today = dd+'/'+mm+'/'+yyyy; 
   document.getElementById("DOB").value = today;

} */

//moment(DOB, "MM/DD/YYYY").format('DD/MM/YYYY')

$(document).ready(function() {

   // set an element
   $("#DOB").val( moment().format('MM/DD/YYYY') );

   // set a variable
   var today = moment().format('DD/MM/YYYY');

});