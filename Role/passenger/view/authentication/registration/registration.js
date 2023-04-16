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
