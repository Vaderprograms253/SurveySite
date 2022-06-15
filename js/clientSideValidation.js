document.getElementById("newUser-form").onsubmit = validate;

function validate()
{

    //flag variable to track if form is valid
    let valid = true;

    // grab data value from text box and assign to variables
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    // if username is empty display error message
    if(username === "")
    {
        document.getElementById("err-username").style.display = "block";
        // prevent form from submitting
        valid = false
    }

    // if password is empty display error message
    if(password === "")
    {
        document.getElementById("err-password").style.display = "block";
        // prevent form from submitting
        valid = false;
    }

    return valid;

}
