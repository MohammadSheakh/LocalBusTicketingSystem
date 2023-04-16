function showmyuser() {
    var Email = document.getElementById("email").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("erroremail").innerHTML = this.responseText;
            //document.getElementById("CheckEmail").innerHTML ="Helllllloooooooooooooo";
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
