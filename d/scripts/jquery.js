/* SIGN UP VALIDATION*/
function validateForm(){
 var x = document.forms["signup"]["fname"].value;
 if (x == "") 
 {
 alert("First Name must be filled out");
 return false;
 }
    
 x = document.forms["signup"]["lname"].value;
 if (x == "") 
 {
 alert("Last Name must be filled out");
 return false;
 } 

 x = document.forms["signup"]["email"].value;
 if (x == "") 
 {
 alert("Mail is required");
 return false;
 } else if (!x.includes("@")) {
 alert("Does not have mail format");
 }
    
 x = document.forms["signup"]["password"].value;
 if (x == "") 
 {
 alert("Password is required");
 return false;
 }
     
 x = document.forms["signup"]["cpassword"].value;
 if (x == "" || x != document.forms["signup"]["password"].value) 
 {
 alert("Passwords do not match");
 return false;
 }
}

/* CONTACT US VALIDATION*/
function ContactForm() {
 var x = document.forms["ContactUs"]["email"].value;
if (x == "") {
 alert("Email must be filled out");
 return false;
 } else if (!x.includes("@")) {
 alert("Does not have mail format");
 }
    
    
 x = document.forms["ContactUs"]["msg"].value;
 if (x == "") {
 alert(" must be filled out");
 return false;
 }
    alert("Thankyou for Contacting us! :) " +
        " We will reply as soon as possible!"
          );
    
}
                             
    
/*   Login Validation */

function LoginForm() {
 var x = document.forms["login"]["email"].value;
if (x == "") {
 alert("Email must be filled out");
 return false;
 } else if (!x.includes("@")) {
 alert("Does not have mail format");
 }
    
 x = document.forms["login"]["password"].value;
 if (x == "") 
 {
 alert("Password is required");
 return false;
 }
    
}


/* JQUERY BUTTON SIGNUP/CONTACT US */

$(document).ready(function(){
  $(".btn-lg").hover(function(){
    $(this).css("background-color", "#80AFDE");
    }, function(){
    $(this).css("background-color", "#414141");
  });
});
    


/*

<script>function Redirect() {
  location.replace("index.html")
}
    */
