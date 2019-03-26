function ValidateUsername()
{
    var uname=document.getElementById("username").value;
    
}

function ValidatePass()
{
    var pass=document.getElementById("password").value;
    
}


function ShowPass()
{
    var pass=document.getElementById("password");
    
    if(pass.type==="password")
    {
        pass.type="text";
        document.getElementById("showpass").checked = true;
    }
    else
    {
        pass.type="password";
        document.getElementById("showpass").checked = false;
    }
}