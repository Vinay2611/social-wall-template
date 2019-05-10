/*Admin script written here*/

$( function () {

    /*login admin */
    $("#adminLogin").submit( function (e) {
        e.preventDefault();
        var userName = $("#username").val();
        var password = $("#password").val();
        if( userName == '' || password == '' ){
            alertify.error('User name and Password  cannot be empty!');
            return false;
        }else{
            $.ajax({
                type: "POST",
                url: "../include/adminresponse.php",
                data: {
                    user_name : userName,
                    password : password,
                    type : "AdminLogin"
                },
                success: function(data)
                {
                    var data = JSON.parse(data);
                    console.log(data);
                    if(data.success){
                        alertify.success(data.msg);
                        setTimeout(function(){
                            window.location.href = "index.php";
                        },3000);
                    }else{
                        alertify.error(data.msg);
                        /*setTimeout(function(){
                            location.reload();
                        },3000);*/
                    }
                }
            });
        }
    });


    /*User Active and inactive*/
    $(document).on('click', '.userActive',function(e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "../include/adminresponse.php",
            data: {
                data_id : data_id,
                type : "UserActive"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    setTimeout(function(){ location.reload(); }, 3000);
                    alertify.success(data.message);
                }else{
                    setTimeout(function(){ location.reload(); }, 3000);
                    alertify.error(data.message);
                }

            }
        });

    });


    /*User Post Accept and Reject*/
    $(document).on('click', '.userPost',function(e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "../include/adminresponse.php",
            data: {
                data_id : data_id,
                type : "UserPost"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    alertify.success(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }else{
                    alertify.error(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }

            }
        });

    });


    /*User Comment Accept and Reject*/
    $(document).on('click', '.userComment',function(e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "../include/adminresponse.php",
            data: {
                data_id : data_id,
                type : "UserComment"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    alertify.success(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }else{
                    alertify.error(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }

            }
        });

    });


    /*Group User Post Accept and Reject*/
    $(document).on('click', '.groupUserPost',function(e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "../include/adminresponse.php",
            data: {
                data_id : data_id,
                type : "GroupUserPost"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    alertify.success(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }else{
                    alertify.error(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }

            }
        });

    });


    /*Group User Comment Accept and Reject*/
    $(document).on('click', '.GroupUserComment',function(e) {
        e.preventDefault();
        var data_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "../include/adminresponse.php",
            data: {
                data_id : data_id,
                type : "GroupUserComment"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    alertify.success(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }else{
                    alertify.error(data.message);
                    setTimeout(function(){ location.reload(); }, 3000);
                }

            }
        });

    });

});