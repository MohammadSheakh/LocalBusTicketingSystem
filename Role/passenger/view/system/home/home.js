function getReviewErrorMsg(form) {
    let emailValue = form.name.value;
    let passwordValue = form.review.value;

    // console.log(emailValue, passwordValue);
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
        /// amra ekhane review pull korbo ajax er maddhome .. page reload na kore ..

        let xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            console.log(this.reponseText);
        };
        xhttp.open("POST", "../../../controller/system/home/homeProcess.php");
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        xhttp.send("name=" + emailValue + "&review=" + passwordValue);

        // post done ..
        //////////////////////////////////////////////////////////////////////////////////
        // now load all review in ajax

        xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            let resp = JSON.parse(this.responseText);
            console.log(resp);

            let t = "<div class='allReview'>";
            for (let i = 0; i < resp.length; i++) {
                console.log(typeof resp[i].fullName);

                t +=
                    "<td><div class='singleReview'>" +
                    "<h5 class='reviewTitle'>" +
                    resp[i].fullName +
                    "</h5>" +
                    "<pre class='reviewBody'>" +
                    resp[i].review +
                    "</pre>" +
                    "<div>" +
                    "<button class='bookNowBtn'> <a class='innerBtn' href='./updateLikeProcess.php?updateId=" +
                    resp[i].reviewId +
                    "'>" +
                    "<img  class='innerBtn' src='../image/home/like.png' alt=''>" +
                    "   <span class='innerBtn'>" +
                    resp[i].likeNumber +
                    "</span>" +
                    "</a>" +
                    "</button>" +
                    "<button class='bookNowBtn'>" +
                    "<a class='innerBtn' href='./updateDislikeProcess.php?updateId=" +
                    resp[i].reviewId +
                    "'> " +
                    "<img class='innerBtn' src='../image/home/dislike.png' alt=''>" +
                    "    <span class='innerBtn'>" +
                    resp[i].dislikeNumber +
                    "</span>" +
                    "</a>" +
                    "</button>" +
                    " </div>" +
                    " </div>" +
                    "</td>";
            }
            t += "</div>";

            // console.log(t);

            document.getElementById("i2").innerHTML = t;
        };
        xhttp.open(
            "GET",
            "/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/system/home/showReviewProcess.php",
            false
            // true
        );
        xhttp.send();

        return false;

        /// ekhon post hoye gese ... AJAX er maddhome .. ekhon abar review reload kora chara .. pull kore
        // niye ashte hobe ..

        // return true; // return true korle .. php process page e giye post hobe ..
    }
}

function showAllReview() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        let resp = JSON.parse(this.responseText);
        console.log(resp);

        let t = "<div class='allReview'>";
        for (let i = 0; i < resp.length; i++) {
            console.log(typeof resp[i].fullName);

            t +=
                "<td><div class='singleReview'>" +
                "<h5 class='reviewTitle'>" +
                resp[i].fullName +
                "</h5>" +
                "<pre class='reviewBody'>" +
                resp[i].review +
                "</pre>" +
                "<div>" +
                "<button class='bookNowBtn'> <a class='innerBtn' href='./updateLikeProcess.php?updateId=" +
                resp[i].reviewId +
                "'>" +
                "<img  class='innerBtn' src='../image/home/like.png' alt=''>" +
                "   <span class='innerBtn'>" +
                resp[i].likeNumber +
                "</span>" +
                "</a>" +
                "</button>" +
                "<button class='bookNowBtn'>" +
                "<a class='innerBtn' href='./updateDislikeProcess.php?updateId=" +
                resp[i].reviewId +
                "'> " +
                "<img class='innerBtn' src='../image/home/dislike.png' alt=''>" +
                "    <span class='innerBtn'>" +
                resp[i].dislikeNumber +
                "</span>" +
                "</a>" +
                "</button>" +
                " </div>" +
                " </div>" +
                "</td>";
        }
        t += "</div>";

        // console.log(t);

        document.getElementById("i2").innerHTML = t;
    };
    xhttp.open(
        "GET",
        "/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/controller/system/home/showReviewProcess.php",
        false
        // true
    );
    xhttp.send();
}

showAllReview();
// setInterval(postAReview, 4000);
