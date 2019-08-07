$().ready(function() {


    // validate signup form on keyup and submit
    $("#postform").validate({
        rules: {

            title: {
                required: true,
                minlength:5,
            },

            short_description: {
                required: true,
                minlength: 5,
                maxlength: 30,
            },
            long_description: {
                required: true,
                minlength: 50,
                maxlength:300,
            },
            description:"required",
            featuredimage:"required",
            image:"required",

        },
        messages: {
            title: {
                required: "Please enter title",
                minlength:"Title should be at least 5 characters long"
            },
            short_description: {
                required: "Please enter a short description about title",
                minlength: "Must be at least 5 characters long",
                maxlength: "Must be less than 30 characters",
            },
            long_description: {
                required: "Please enter a long description about title",
                minlength: "Must be at least 50 characters long",
                maxlength: "Must be less than 300 character "
            },

            description:{
                required:"Please enter some description about the title",
            },

            image: {
                required:"Please upload an image",
            },

            featuredimage: {
                required:"Please upload an image",
            }
        }
    });
});
