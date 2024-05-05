function clearErrors()
    {
        errors = document.getElementsByClassName('formerror');
        for(let item of errors)
        {
            item.innerHTML = "";
        }
    }

    function seterror(id,error)
    {
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }

    function validateForm()
    {
        var returnval = true;
        clearErrors();
        //perform validation and if fails then set retunval to false
        var name = document.forms['myForm']["fname"].value;
        if(name.length < 5)
        {
            seterror("name","  *Length of name is too short");
            returnval = false;
        }
        
        var email = document.forms['myForm']["femail"].value;
        if(email.length > 20)
        {
            seterror("email","  *Length of email is too long");
            returnval = false;
        }

        var password = document.forms['myForm']["fpass"].value;
        if(password.length < 10 )
        {
            seterror("password" , " *Password must be strong(10 digits)");
            returnval = false;
        }

        var cpassword = document.forms['myForm']["fcpass"].value;
        if(cpassword != password)
        {
            seterror("cpassword" , " *Password & confirm password does not match");
            returnval = false;
        }        
        return returnval;
    }