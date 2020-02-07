document.getElementById("mailForm").onsubmit = validate;

function validate()
{
    //Create a flag variable
    let valid = true;
    //alert("validating")
    //Clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check first name
    let first = document.getElementById("fName").value;
    if (first == "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //Check last name
    let last = document.getElementById("lName").value;
    if (last == "") {
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    // Check email
    let email = document.getElementById("email").value;
    let countAts = 0;
    let countDots = 0;

    if (email == "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    for (let i = 0; i < email.length; i++) {
        if (email.charAt(i) == '@') {
            countAts++;
        }
        if (email.charAt(i) == '.') {
            countDots++;
        }
    }

    if (countAts != 1 || countDots >= 1) {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    // Check phone
    let phone = document.getElementById("phone");
    if (phone == "") {
        let errPhone = document.getElementById("errPhone");
        errPhone.style.visibility = "visible";
        valid = false;
    }

    return valid;
}