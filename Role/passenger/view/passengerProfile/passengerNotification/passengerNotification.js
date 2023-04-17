function getData() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        const resp = JSON.parse(this.responseText);
        let t = "<table border='1px'>";
        t += "<tr>";
        t += "<th>";
        t += "id";
        t += "</th>";
        t += "<th>";
        t += "username";
        t += "</th>";
        t += "<th>";
        t += "password";
        t += "</th>";
        t += "</tr>";
        for (let i = 0; i < resp.length; i++) {
            t += "<tr>";
            t += "<td>";
            t += resp[i].id;
            t += "</td>";
            t += "<td>";
            t += resp[i].username;
            t += "</td>";
            t += "<td>";
            t += resp[i].password;
            t += "</td>";
            t += "</tr>";
        }
        t += "</table>";
        document.getElementById("i1").innerHTML = t;
    };
    xhttp.open("GET", "Data.php", false);
    xhttp.send();

    document.getElementById("i2").innerHTML = "Just a message";
    return false;
}
