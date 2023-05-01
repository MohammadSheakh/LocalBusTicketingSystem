function getData() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        const resp = JSON.parse(this.responseText);
        console.log(resp);
        // document.getElementById("i2").innerHTML = resp;
    };
    xhttp.open(
        "GET",
        "../../../controller/passengerProfile/passengerNotification/showNotificationProcess.php"
        // true
    );
    xhttp.send();

    // return false;
}
setInterval(getData, 2); // mili second por por ami call korbo .
