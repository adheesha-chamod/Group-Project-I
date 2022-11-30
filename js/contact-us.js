function isvalid() {
    const name = document.forms["contact-us-form"]["name"].value;
    const email = document.forms["contact-us-form"]["email"].value;
    const mobile = document.forms["contact-us-form"]["mobile"].value;
    const sub = document.forms["contact-us-form"]["sub"].value;
    const msg = document.forms["contact-us-form"]["msg"].value;

    if(! isNameValid(name)) {
        return false;
    }

    if(! isEmailValid(email)) {
        return false;
    }

    if(! isMobileValid(mobile)) {
        return false;
    }

    if(! isSubValid(sub)) {
        return false;
    }

    if(! isMsgValid(msg)) {
        return false;
    }

    return true;
}


function isNameValid(name) {
    if(name == ""){
        document.getElementById("name-error").innerHTML = "Name is required";
        return false;
    }

    if(name.length < 3) {
        document.getElementById("name-error").innerHTML = "Name is too short";
        return false;
    }

    const regex = /^[a-zA-Z]+ ?[a-zA-Z]*$/;

    if(! regex.test(name)) {
        document.getElementById("name-error").innerHTML = "Valid name is required";
        return false;
    }

    return true;
}


function isEmailValid(email) {
    if(email == ""){
        document.getElementById("email-error").innerHTML = "Email is required";
        return false;
    }

    const regex =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(! regex.test(email)) {
        document.getElementById("email-error").innerHTML = "Valid email is required";
        return false;
    }

    return true;
}


function isMobileValid(mobile) {
    if(mobile == ""){
        document.getElementById("mobile-error").innerHTML = "Mobile No is required";
        return false;
    }

    const regex = /^\d{10}$/;

    if(! regex.test(mobile)) {
        document.getElementById("mobile-error").innerHTML = "Valid mobile no is required";
        return false;
    }

    return true;
}


function isSubValid(sub) {
    if(sub == ""){
        document.getElementById("sub-error").innerHTML = "Subject is required";
        return false;
    }

    return true;
}


function isMsgValid(msg) {
    if(msg == ""){
        document.getElementById("msg-error").innerHTML = "Message is required";
        return false;
    }

    if(msg.length < 10){
        document.getElementById("msg-error").innerHTML = "Message is too short";
        return false;
    }

    return true;
}