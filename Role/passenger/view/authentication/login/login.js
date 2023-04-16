function login() {
    let emailValue = document.getElementById("email").value;
    let passwordValue = document.getElementById("password").value;
    if (!emailValue) {
        document.getElementById("errorMsg").style.color = "red";
        document.getElementById("emailErrorMsg").innerHTML =
            "Please provide your email address !";
        return false;
    } else if (!passwordValue) {
        document.getElementById("errorMsg").style.color = "red";
        document.getElementById("passwordErrorMsg").innerHTML =
            "Please provide correct password !";
        return false;
    } else {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            const resp = this.responseText;

            if (resp === "success") {
                window.location.href = "./login.php";
            } else if (resp === "emptyEmailField") {
                window.location.href = "./login.php";
            } else {
                document.getElementById("login1").innerHTML = resp;
                document.getElementById("login1").style.display = "block";
            }
        };
        xhttp.open(
            "POST",
            "../../../controller/authentication/login/loginProcess.php",
            true
        );
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        xhttp.send("username=" + username + "&password=" + password);
        return true;
        // return true;
    }
}

function getLoginErrorMsg(form) {
    // let emailValue = document.getElementById("email").value;
    // let passwordValue = document.getElementById("password").value;

    let emailValue = form.email.value;
    let passwordValue = form.password.value;

    console.log(emailValue, passwordValue);
    if (!emailValue && !passwordValue) {
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your email address ! from js validation";
        document.getElementById("passwordErrorMsg").style.color = "red";
        document.getElementById("passwordErrorMsg").innerText =
            "Please provide correct password ! from js validation";
        return false;
    } else if (!passwordValue) {
        console.log("in elif statement");
        document.getElementById("passwordErrorMsg").style.color = "red";
        document.getElementById("passwordErrorMsg").innerText =
            "Please provide correct password ! from js validation";
        return false;
    } else if (!emailValue) {
        console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide your email address ! from js validation";
        return false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
        // console.log("in if statement");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Please provide correct email format ! from js validation";
        return false;
    } else {
        console.log("in else statement");
        // document.getElementById("generalErrorMsg").style.color = "white";
        // document.getElementById("generalErrorMsg").innerText =
        //     "Credential is invalid ! from js validation";

        return true; // may be ekhaneo false return korte hobe ...
    }
}
