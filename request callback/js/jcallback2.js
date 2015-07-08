$("document").ready(function(){
////$('#callbackform').submit(function(e){
//
   $("#submitcallback2").click(function(e){
//
      e.preventDefault();
     

       var str3 = $('input[name="country_code1"]').val();
       var str4 = $('input[name="mobile1"]').val();
//
       var callbackdata1 = {country_code1: str3, mobile1: str4};
       $.ajax(
       {
            // url: "datastore",
           url:"callbackforminquery",
            data: callbackdata1,
            // data:data: $('#callbackforminquerydiv').serialize(),
           dataType: 'json',
           type: 'POST',
          
           // async: false,po
           // cach: false,
           success: function (data) 
           {
            
               //PROBLEM HERE **********
               if(data =="3" )
               {
                   alert('Thank you for your request! We will call you as soon as possible.');
                   // $("#smallModal").modal('hide');
                   $('input[name="country_code1"]').val("+91");
                   $('input[name="mobile1"]').val("");
                } 
                else 
                {
               // function validfun();
                   // $('input[name="country_code"]').val("+91");
               //     $('input[name="mobile"]').val("");
                 }
            }

          
     });
      
//
//
//
       
   });
//
//
   });

//callbackforminquerydiv

