$("document").ready(function(){
////$('#callbackform').submit(function(e){
//
   $("#submitcallback").click(function(){
//
      // e.preventDefault();

       var str1 = $('input[name="country_code"]').val();
       var str2 = $('input[name="mobile"]').val();
//
       var callbackdata = {country_code: str1, mobile: str2};
       $.ajax(
       {
            // url: "datastore",
           url:"callbacks",
            data: callbackdata,
           dataType: 'json',
           type: 'POST',
          
           // async: false,
           // cach: false,
           success: function (data) 
           {
            
               //PROBLEM HERE **********
               if(data =="1" )
               {
                   alert('Thank you for your request! We will call you as soon as possible.');
                   $("#smallModal").modal('hide');
                   $('input[name="country_code"]').val("+91");
                   $('input[name="mobile"]').val("");
                } 
                else 
                {
               // alert('Please Insert Valid Number')
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

