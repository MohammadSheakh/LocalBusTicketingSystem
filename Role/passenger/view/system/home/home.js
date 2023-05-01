function getReviewErrorMsg(form) {
    let emailValue = form.name.value;
    let passwordValue = form.review.value;

    console.log(emailValue, passwordValue);
    if (!emailValue && !passwordValue) {
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your name ! from js validation";
        document.getElementById("passwordErrorMsg").style.color = "red";
        document.getElementById("passwordErrorMsg").innerText =
            "Please provide review ! from js validation";
        return false;
    } else if (!passwordValue) {
        console.log("in elif statement");
        document.getElementById("passwordErrorMsg").style.color = "red";
        document.getElementById("passwordErrorMsg").innerText =
            "Please provide review ! from js validation";
        return false;
    } else if (!emailValue) {
        console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your name ! from js validation";
        return false;
    } else {
        console.log("in else statement");
        return true; // may be ekhaneo false return korte hobe ...
    }
}
