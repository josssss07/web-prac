$(document).ready(function(){
    $("#loginform").submit(function(event)){
        var username = $("#username").val();
        var password = $("#password").val();
        var valid = true;

        $(".error").text("");

        //validate username

        if(username === ""){
            $("#usernameError").text("Username is required.");
            valid = false;

        }

        if(password === ""){
            $("#passwordError").text("Password is required.");
        }
    }
})