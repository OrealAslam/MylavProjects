$(document).ready(function(){
   
    let _token = $('input[name="_token"]').val();

    // check uniqueness of email field

    $("#email").blur(function(){

        $.ajax({
            type:'post',
            url: "/checkEmail",
            data:{_token:_token, uniqueEmail:$("#email").val()},
            success:function(responce){
                $("#eemail").html(responce);
            }
        });
    });


    // register user (code)

    $("#regForm").submit(function(e){

    // avoid page reload
        e.preventDefault();

        // retrieving form values

        var name = $("#name").val();
        var email = $("#email").val();
        var pass = $("#pass").val();

        if(name.length == 0){
            $("#ename").text('username required');
        }

        if(name.length < 8){
            $("#ename").text('username must be greater or equal to 8 characters');
        }

        if(email.length == 0){
            $("#eemail").text('email mandatory');
        }

        if(pass.length == 0 || pass.length < 8){
            $("#epass").text('required or must be atleast 8 characters');
        }

        // submitting form data to Laravel Server

        $.ajax({
            type: 'post',
            url: '/register',
            data: {_token:_token, name: name, email: email, pass: pass},
            success: function(responce){
                $('#formResponce').html(responce);
            }
        });
    });
                
});