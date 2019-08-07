
$().ready(function() {


    // validate signup form on keyup and submit
    $("#registration").validate({
        rules: {

            firstname: {
                required: true,
                lettersonly:true
            },
            lastname:{
                required:true,
                lettersonly :true
            },
            dob:{
                required:true,
            },
            gender:{
                required:true,
            },

            seeking:{
                required:true,
            },
            phone:{
                required:true,
                maxlength:10,
            },
            city:"required",
            state:"required",
            country:"required",
            languages:"required",
            image:"required",
            friendshipBetweenPartners:"required",
            occupation:"required",
            income:"required",
            exercise:"required",
            education_level:"required",
            longest_relationship:"required",
            medication:"required",
            sexual_compatibility:"required"
        },
        messages: {
            firstname: {
                required: "Please enter firstname",
                lettersonly:"Please enter only letters"
            },
            lastname: {
                required: "Please enter lastname",
                lettersonly:"Please enter only letters"
            },
            phone:{
                maxlength:"Your phone number must be less then 10 digits"
            }
        }
    });
});
