function validation()
{
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var inquirytype = document.getElementById("inquirytype").value;
    var other = document.getElementById("other").value;
    var message = document.getElementById("message").value;

    if(fullname == "")
    {
        alert("Name is required");
        return false;
    }

    if(email == "")
    {
        alert("Email is required");
        return false;
    }

    else if(!email.includes("@"))
    {
        alert("Invalid email address");
        return false;
    }

    if(message == "")
    {
        alert("Message is required");
        return false;
    }

    return true; 
}