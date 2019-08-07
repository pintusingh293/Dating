$().ready(function() {
$("#contactForm").validate({
    rules: {

        fullname: {
            required: true,
            minlength:3,
            lettersonly:true
        },
        email: {
            required: true,
            email: true,
            // remote:{
            //     url: "/check-email",
            //     type:"get"
            // }
        },
        sub: {
            required: true,
            minlength: 5
        },
        comments:{
            required:true,
            minlength:50
        },
    },
    messages: {
        fullname: {
            required: "Please enter fullname",
            lettersonly:"Please enter only letters"
        },
        email: {
            required:"Please enter a valid email address",
            remote: "This email has already contacted"
        },
        sub: {
            required:"Please accept our policy",
            minlength:" Must be more than 5 characters"

    },
    comments: {
        required:"Please enter comments",
        minlength: "Must be more than 50 characters",
    }
}
});

})
