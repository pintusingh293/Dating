
$().ready(function() {


    // validate signup form on keyup and submit
    $("#signupForm").validate({
        rules: {

            name: {
                required: true,
            },

            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#user_password"
            },


            email: {
                required: true,
                email: true,
                //  remote:{
                //    url: "/check-email",
                //    type:"post"
                //  }
            },

            agree: "required",
        },
        messages: {
            name: {
                required: "Please enter name",
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: {
                required:"Please enter a valid email address",
                remote: "This email has already exist"
            },
            agree: "Please accept our policy",
        }
    });
    $('#myfriends').DataTable();
});
