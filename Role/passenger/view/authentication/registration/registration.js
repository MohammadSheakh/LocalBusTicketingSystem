function showmyuser() {
    var Email = document.getElementById("email").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "Unique Email") {
                document.getElementById("erroremail").innerHTML =
                    this.responseText + "✅";
                document.getElementById("erroremail").style.color = "green";
            } else if (this.responseText === "Email Empty") {
                document.getElementById("erroremail").innerHTML =
                    this.responseText;
                document.getElementById("erroremail").style.color = "orange";
            } else if (this.responseText === "Email Already Registered") {
                document.getElementById("erroremail").innerHTML =
                    this.responseText + "❌";
                document.getElementById("erroremail").style.color = "orange";
            } else {
                document.getElementById("erroremail").innerHTML =
                    this.responseText;
                document.getElementById("erroremail").style.color = "red";
            }
        } else {
            document.getElementById("erroremail").innerHTML = this.status;
        }
    };
    xhttp.open(
        "POST",
        "../../../controller/authentication/registration/checkEmailProcess.php",
        true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("Email=" + Email);
}

function getReviewErrorMsg(form) {
    let emailValue = form.fullName.value;
    let passwordValue = form.password.value;

    // console.log(emailValue, passwordValue);
    if (!emailValue && !passwordValue) {
        document.getElementById("fullNameErrorMsg").style.color = "white";
        document.getElementById("fullNameErrorMsg").innerText =
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
        document.getElementById("fullNameErrorMsg").style.color = "white";
        document.getElementById("fullNameErrorMsg").innerText =
            "Please provide your name ! from js validation";
        return false;
    } else {
        /// amra ekhane review pull korbo ajax er maddhome .. page reload na kore ..

        return true;

        /// ekhon post hoye gese ... AJAX er maddhome .. ekhon abar review reload kora chara .. pull kore
        // niye ashte hobe ..

        // return true; // return true korle .. php process page e giye post hobe ..
    }
}
