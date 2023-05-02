function getStartAreaErrorMsg(form) {
    let emailValue = form.startAreaName.value;

    // console.log(emailValue, passwordValue);
    if (!emailValue) {
        console.log("start area is not given");
        document.getElementById("emailErrorMsg").style.color = "white";
        document.getElementById("emailErrorMsg").innerText =
            "Select an area ! from js validation";
        return false;
    } else {
        console.log("all are given ");

        return true; // return true korle .. php process page e giye post hobe ..
    }
}

function getEndAreaErrorMsg(form) {
    let passwordValue = form.destinationAreaName.value;
    let dateForTicketBooking = form.dateForTicketBooking.value;

    // console.log(emailValue, passwordValue);
    if (!passwordValue && !dateForTicketBooking) {
        console.log("all are not given");
        document.getElementById("passErrorMsg").style.color = "white";
        document.getElementById("passErrorMsg").innerText =
            "Select an destination area and journey date ! from js validation";
        return false;
    } else if (!passwordValue) {
        console.log("destination area is not given");
        document.getElementById("passErrorMsg").style.color = "white";
        document.getElementById("passErrorMsg").innerText =
            "Select an destination area ! from js validation";
        return false;
    } else if (!dateForTicketBooking) {
        console.log("destination area is not given");
        document.getElementById("passErrorMsg").style.color = "white";
        document.getElementById("passErrorMsg").innerText =
            "Select a proper date ! from js validation";
        return false;
    } else {
        console.log("all are given ");

        return true; // return true korle .. php process page e giye post hobe ..
    }
}
