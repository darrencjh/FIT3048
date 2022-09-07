$(() => {
    let verifyUsername = (adminUsername) => {
        if (adminUsername == "") {
            $("#msg-uname").text("Please enter your username")
            $("#loginUsername").addClass("is-invalid")
            return false
        } else {
            $("#loginUsername").removeClass("is-invalid")
            return true
        }
    }

    let verifyPassword = (adminPassword) => {
        if (adminPassword == "") {
            $("#msg-pwd").text("Please enter your password")
            $("#loginUserPassword").addClass("is-invalid")
            return false
        } else {
            $("#loginUserPassword").removeClass("is-invalid")
            return true

        }
    }


    // When leave the input,check
    $("#loginUsername").blur(function () {
        verifyUsername(this.value)
    });
    $("#loginUserPassword").blur(function () {
        verifyPassword(this.value)
    });
    // When change the value in the inout,check
    // $("#loginUsername").change(function () {
    //     verifyUsername(this.value)
    // });
    // $("#loginUserPassword").change(function () {
    //     verifyPassword(this.value)
    // });

    $("#loginSubmit").click(function () {
        let nameResult = verifyUsername(loginUsername.value)
        let pwdResult = verifyPassword(loginUserPassword.value)

        if (!nameResult || !pwdResult) {
            return false
        } else {
            $('form').trigger("submit");
            return true;
        }
    });


    //js method to the the url
    var urlParams = new URLSearchParams(window.location.search);
    console.log(urlParams.get('action'));
    if (urlParams.get('action') == 'error') {

    }


})

