

function callbackValid1() {
	var message, varmobile1;
    message = document.getElementById("errordiv1");
    message.innerHTML = "";
    varmobile1 = document.getElementById("mobile1").value;
    // var textBox = document.getElementById("myTextBox");
    var textLength = mobile1.value.length;
    try { 
        if(varmobile1 == "")  throw "Your need to enter your Number.";
        if(isNaN(varmobile1)) throw " Your need to enter your Valid Number.";
         if (textLength < 10) throw " Number Is Not Valid, please enter valid number";
         if (textLength > 10) throw " Number Is Not Valid, please enter valid number";
    }
    catch(err) {
        message.innerHTML = err;
         $('input[name="mobile1"]').val("");
    }
	 // var ermsg="enter 10 digit";
  //   var inpObj = document.getElementById("mobile1");
  //   if (inpObj .checkValidity() == false) {
        
  //       document.getElementById("demo").innerHTML = inpObj.validationMessage;
  //       $('input[name="mobile1"]').val("");
  //       // document.getElementById("demo").innerHTML = ermsg;
  //   } else {
  //       document.getElementById("demo").innerHTML = "";
  //   } 

   
} 



function callbackValid() {
	var message, varmobile;
    message = document.getElementById("errordiv");
    message.innerHTML = "";
    varmobile = document.getElementById("mobile").value;
    // var textBox = document.getElementById("myTextBox");
    var textLength = mobile.value.length;
    try { 
        if(varmobile == "")  throw "Your need to enter your Number.";
        if(isNaN(varmobile)) throw " Your need to enter your Valid Number.";
        if (textLength < 10) throw "Number Is Not Valid, please enter valid number";
        if (textLength > 10) throw "Number Is Not Valid, please enter valid number";
    }
    catch(err) {
        message.innerHTML = err;
         $('input[name="mobile"]').val("");
    }
	 // var ermsg="enter 10 digit";
  //   var inpObj = document.getElementById("mobile");
  //   if (inpObj.checkValidity() == false) {

  //       document.getElementById("error").innerHTML = inpObj.validationMessage;
  //       $('input[name="mobile"]').val("");
  //       // document.getElementById("demo").innerHTML = ermsg;
  //   } else {
  //       document.getElementById("error").innerHTML = "";
  //   } 

   
} 

function inqueryValid()
{
  var errormessage,varinqname,varinqemail,varinqmobile,varinqcity,moberror,testresults,emailerror,emailcheck;
  var textLength1 = inq_mobile.value.length;
  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  errormessage=document.getElementById("errordivison");
  moberror=document.getElementById("moberrordiv");
  emailerror=document.getElementById("emailerrordiv");
  errormessage.innerHTML = "";
  moberror.innerHTML="";
  emailerror.innerHTML="";
  varinqname = document.getElementById("inq_name").value;
  varinqemail = document.getElementById("inq_email").value;
  varinqmobile = document.getElementById("inq_mobile").value;
  varinqcity = document.getElementById("inq_city").value;
  // var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;

  // if (!filter.test(varinqemail))
 
  try
  {
    if(varinqname == "") throw "Please Fill Mendotory Field";
    if(varinqemail == "") throw "Please Fill Mendotory Field";
    if(varinqmobile == "") throw "Please Fill Mendotory Field";
    if(varinqcity == "") throw "Please Fill Mendotory Field";
  }
  catch(errr)
  {
      errormessage.innerHTML = errr;
  }

  try
  {
    if(isNaN(varinqmobile)) throw "Enter Valid Number";
     // if(varinqmobile == "") throw "enter valid number";
     if(textLength1 < 10) throw "Number Is Not Valid";
     if(textLength1 > 10) throw "Number Is Not Valid";
    
  }
  catch(moberr)
  {
    moberror.innerHTML=moberr;
  }
   try
  {
    if (!filter.test(varinqemail)) throw "Enter Valid Email";
  }
  catch(emer)
  {
    emailerror.innerHTML=emer;
  }


}
