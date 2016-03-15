function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password isnt sent. 
    password.value = "";
 
    // Finally submit the form. 
    form.submit();
}
 
function regformhash(form, username, email, password, conf) {
   
    // Check if salutation is selected
    
    if (sal.value === ''){
        
        alert ("Select Salutation !");
        document.getElementById("sal").focus();
        return false;
        
    }

    // Check if first name is filled
    
    if (fname.value === ''){
        
        alert ("Insert First name !");
        document.getElementById("fname").focus();
        return false;
        
    } else {
        
        //Check for validity of the first name
        /*

        var re = /^[a-zA-Z]+$/;

        if(!re.test(form.fname.value)) { 
            alert("First name should be characters only!"); 
            form.fname.focus();
            return false; 
        }*/
    }
    
    // Check if last name is filled
    
    if (lname.value === ''){
        
        alert ("Insert Last name !");
        document.getElementById("lname").focus();
        return false;
        
    } else {

        /*
        //Check for the validity of last name
        var re = /^[a-zA-Z]+$/;

        if(!re.test(form.lname.value)) { 
            alert("Last name should be characters only !"); 
            form.fname.focus();
            return false; 
        }*/
    }
    
    // Check if phone number is filled
    
    if (phone_no.value === ''){
        
        alert ("Insert Phone number !");
        document.getElementById("phone_no").focus();
        return false;
        
    } else {
        /*
        //Check validity of phone number
        //var re = /^\(?([0-9]{4})\)[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
        var re = /^\d{10}$/;

        if(!re.test(form.phone_no.value)){
            alert("Not a valid phone number !");
            form.phone_no.focus();
            return false;
        }*/
    }
    
    // Check if gender is selected
    
    if (gender.value === ''){
        
        alert ("Select Gender !");
        document.getElementById("gender").focus();
        return false;
        
    } 

    // Check if username is filled
    
    if (username.value === ''){
        
        alert ("Insert Username !");
        document.getElementById("username").focus();
        return false;
        
    } 
    
    // Check if email is filled
    
    if (email.value === ''){
        
        alert ("Insert Email Address !");
        document.getElementById("email").focus();
        return false;
        
    } else {
        //Check for validity of the email address

        var re = /^((([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.))*([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/

        if(!re.test(form.email.value)) {
            alert("Invalid Email address !");
            form.email.focus();
            return false;
        }
    }
    
    // Check if password is filled
    
    if (password.value === ''){
        
        alert ("Insert Password !");
        document.getElementById("password").focus();
        return false;
        
    } 
    
    // Check if confirmation password is filled
    
    if (confirmpwd.value === ''){
        
        alert ("Insert Confirmation Password !");
        document.getElementById("confirmpwd").focus();
        return false;
        
    } 
    // Check password length
	
    if (password.value.length < 6) {
        alert('Password should be at least 6 characters !');
        form.password.focus();
        return false;
    }
    
    // Check password and confirmation are the same
    if (password.value !== conf.value) {
        alert('Password and Confirmation password donot match !');
        form.password.focus();
        return false;
    }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}