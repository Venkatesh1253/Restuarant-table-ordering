function validate(){
    var name=document.getElementById('uname').value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById('pass').value;
    var cpass=document.getElementById('cpass').value;



    var namechk=/^([a-z A-Z]{3,30})$/;
    var emailchk=/^([a-z A-Z 0-9 \. _]+)@([a-z]{3,10})(.[a-z]{1,6})$/;
    isvalidname=false;
    isvalidpass=false;


    if(name==""){
        
        document.getElementById('message').innerHTML="enter the name";
         return false;
    }
    else if(!namechk.test(name)){
        document.getElementById('mes').innerHTML="enter the valid name";

    }
    else if(!emailchk.test(email)){
        alert("Enter a valid email");
    }
    else if(pass>6){
        document.getElementById('message').innerHTML="password must be greater than 6letters";
        return false;
       
    }


}