function getNameErrorMsg(form) {
    let emailValue = form.fullName.value;
    //let passwordValue = form.review.value;

    console.log(emailValue);
    if (!emailValue) {
        console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your name ! from js validation";
        return false;
    } else {
        console.log("in else statement");
        return true;
    }
}

function getFatherNameErrorMsg(form) {
    let emailValue = form.fatherName.value;
    //let passwordValue = form.review.value;

    console.log(emailValue);
    if (!emailValue) {
        console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your fathers name ! from js validation";
        return false;
    } else {
        return true;
    }
}

function getEmailErrorMsg(form) {
    let emailValue = form.email.value;
    //let passwordValue = form.review.value;

    console.log(emailValue);
    if (!emailValue) {
        console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your name ! from js validation";
        return false;
    } else {
        return true;
    }
}
