  

   function validateform() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;

 

 

 

         }

          if( document.myForm.uname.value == "" ) {
            alert( "Please provide your Username!" );
            document.myForm.uname.focus() ;
            return false;

 

 

 

         }

         
         if( document.myForm.email.value == "" || 
            document.myForm.email.value.length < 12 ) {
            alert( "Please provide your Email! like:**@gamil.com" );
            document.myForm.email.focus() ;
            return false;






         }

          if( document.myForm.pass.value == ""||
            document.myForm.pass.value.length < 6 ) {
            
            alert( "provide password & length should be more then 5" );
            document.myForm.pass.focus() ;
            return false;




         }
         
         if( document.myForm.cpass.value == "" ) {
            alert( "Please Retype the Password!" );
            document.myForm.cpass.focus() ;
            return false;

 

 

 

         }
         
         if( document.myForm.cpass.value != document.myForm.pass.value ) {
            alert( "password & ConfirmPassword Missmatch" );
            document.myForm.cpass.focus() ;
            return false;

 

 

         }

          



         if( document.myForm.type.value == "-1" ) {
            alert( "Please provide your type!" );
            return false;





         }
         return( true );
      }
 


 

 

 
 
