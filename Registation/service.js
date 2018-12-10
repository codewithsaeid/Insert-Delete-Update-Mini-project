function validate(){
		       var name = document.myform.fullname.value;
		       var email= document.myform.email.value;
		       var p1 = document.myform.pass.value;
		       var p2 = document.myform.repass.value;
		       var age = document.myform.age.value; 
		       var check = document.myform.agree.checked;
		       
			   
			   if(name.length < 5){
			      alert("Name must not be less than 5 charecter");
				  
			   }
			   else if(email == "" || email == null){
			      alert("Email can not be blank!");
				 
			   }
			   else if(p1!=p2){
			      alert("Password mismatched");
			   }
			   else if(age<18){
			      alert("Sorry you are under age");
			   }			 
			   else if(!check){
			      alert("You must accept terms and conditions");
			   }
			   
		 }