$(document).ready(function(){
    
   var inputfieldtxt = $("#inputfieldsearch").val();


  $('#linkbtnsearch').prop("disabled", true);  //disabling search button 


        $('#inputfieldsearch').keyup(function(){
            
            if ($('#inputfieldsearch').val() != '' )
            {
           
                $('#linkbtnsearch').prop("disabled", false);  //enable search button 
              
            }
            else
           
            {
                $('#linkbtnsearch').prop("disabled", true);  //disabling search button  if search input field empty
              

                
            }
        });


});


