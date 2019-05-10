/*custom js*/

$(function () {



    $('#i_agree').click(function(e) {
        //$("#toggle").toggle(this.checked);

        e.preventDefault();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email_id = $("#email_id").val();

        $.ajax({
            type: "POST",
            url: "include/serverresponse.php",
            data: {
                first_name : first_name,
                last_name : last_name,
                email_id : email_id,
                type : "UserInsert"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    window.location.href = "choose.php?email="+email_id+"&first_name="+first_name+"&last_name="+last_name;
                }else{
                    alert(data.msg);
                }

            }
        });

    });

    //User insert from landing page
    $('#userInsert').submit( function (e) {
        e.preventDefault();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email_id = $("#email_id").val();

        $.ajax({
            type: "POST",
            url: "include/serverresponse.php",
            data: {
                first_name : first_name,
                last_name : last_name,
                email_id : email_id,
                type : "UserInsert"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    window.location.href = "choose.php?email="+email_id+"&first_name"+first_name+"&last_name"+last_name;
                }else{
                    alert("Something went wrong pleae try again.");
                }

            }
        });


    });

    // Count character in comment
    $('#comment').keyup(function () {
        max = this.getAttribute("maxlength");
        var len = $(this).val().length;
        if (len >= max) {
            $('#charNum').text('you have reached the limit');
        } else {
            var char = max - len;
            $('#charNum').text(char);
        }
    });

    //ajax to save data post
    $("#upload_data").submit( function (e) {

        e.preventDefault();
        var comment = $("#comment").val();
        $(".btn-post-disabled").attr("disabled", "disabled");

        if (comment == ''){
            $('#comment_msg').fadeIn().delay(2000).fadeOut();
            $(".btn-post-disabled").removeAttr("disabled");
            return false;
        }
        $('.spinner').show();
        var formData = new FormData($(this)[0]);

        setTimeout(function() {
            $.ajax({
                type: "POST",
                url: "include/serverresponse.php",
                data: formData,
                cache: false,
                processData: false,
                async: false,
                contentType: false,
                /*beforeSend: function(){
                  $('.spinner').show();
                },
                complete: function() {
                    $('.spinner').hide();
                },*/
                //data: form.serialize(),
                success: function (data) {
                    var data = JSON.parse(data);
                    if (data.success) {
                        $('.spinner').hide();
                        $(".btn-post-disabled").removeAttr("disabled");
                        //$('#post_msg').fadeIn().delay(2000).fadeOut();
                        //$('#loading-image').hide();
                        $('#comment, #uploads').val('');
                        $('#fileName').empty();
                        $('#charNum').text(140);
                        var body = '';
                        body += '<div class="box-wrapper">\n' +
                            '<div class="well">\n' +
                            '<div class="namer-wrapper">\n' +
                            '<h2 id="reply_' + data.user_post_id + '">' + data.first_name + ' ' + data.last_name + '<span class="unbold"></span></h2>\n' +
                            '<h5 class="small">' + data.date + ' at ' + data.time + '</h5>\n' +
                            '</div>\n' +
                            '<div class="comment-box">\n' +
                            comment +
                            '</div>\n' +
                            '</div>\n';

                        if (data.filename != '') {
                            body += '<div class="comment-box">\n' +
                                '<img src="uploads/' + data.filename + '" class="img-responsive">\n' +
                                '</div>\n';
                        }

                        body += '<div class="well2">\n' +
                            '<ul>\n' +
                            '<li></li>\n' +
                            '<li> <span id="replace_' + data.user_post_id + '"><a href="javascript:void(0)" class="click-like" id="like_' + data.user_post_id + '" data-user-id=' + data.user_post_id + ' ><i class="far fa-heart"></i><span id="count_like_' + data.user_post_id + '">  0</span></a></span></li>\n' +
                            '<li><a href="comment.php?user_id=' + data.user_id + '&user_post_id=' + data.user_post_id + '"><i class="far fa-comment-alt" id="comment_' + data.user_post_id + '" data-user-id="' + data.user_post_id + '"></i></a><span style="margin-left: 8px;">0</span></li>\n' +
                            '</ul>\n' +
                            '</div>\n' +
                            '</div>';

                        $("#post_msg_div").prepend(body);
                        //$("#post_msg_div").append(body);
                    } else {
                        //alertify.error(data.msg);
                    }

                }
            });
        }, 900);//time in milliseconds



    });

    //ajax to increase count
    //$(".click-like").click( function (e) {
    $(document).on('click', '.click-like',function(e) {
        e.preventDefault();
        var data_user_id = $(this).attr("data-user-id");
        //alert(data_user_id);
        $.ajax({
            type: "POST",
            url: "include/serverresponse.php",
            data: {
                data_id : data_user_id,
                type : "like"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    $( "#count_like_"+data_user_id).text('');
                    $( "#replace_"+data_user_id ).html(' ');
                    $( "#replace_"+data_user_id ).html('<span id="unreplace_'+data_user_id+'"><a href="javascript:void(0)" class="click-unlike" id="unlike_'+data_user_id+'" data-user-id="'+data_user_id+'"><i class="fas fa-heart"></i> <span id="count_unlike_'+data_user_id+'">'+data.count_like+'</span></a></span>');
                    //$( "#like_"+data_user_id ).html('<a href="javascript:void(0)" class="click-unlike" id="unlike_'+data_user_id+'" data-user-id="'+data_user_id+'"><i class="fas fa-heart"></i> <span id="count_unlike_'+data_user_id+'">'+data.count_like+'</span></a>');
                    $("#response_msg_like_"+data_user_id).text("You like this post");
                }else{

                }

            }
        });

    });

    //ajax to increase count
    //$(".click-unlike").click( function (e) {
    $(document).on('click', '.click-unlike',function(e) {
        e.preventDefault();
        var data_user_id = $(this).attr("data-user-id");
        $.ajax({
            type: "POST",
            url: "include/serverresponse.php",
            data: {
                data_id : data_user_id,
                type : "Unlike"
            },
            success: function(data)
            {
                var data = JSON.parse(data);
                if(data.success){
                    $( "#count_unlike_"+data_user_id).text('');
                    $( "#unreplace_"+data_user_id ).html(' ');
                    $( "#unreplace_"+data_user_id ).html('<span id="replace_'+data_user_id+'"><a href="javascript:void(0)" class="click-like" id="like_'+data_user_id+'" data-user-id="'+ data_user_id +'"><i class="far fa-heart"></i> <span id="count_like_'+ data_user_id +'">'+ data.count_unlike +'</span></a></span>');
                    $("#response_msg_like_"+data_user_id).text("You un-like this post");
                }else{

                }

            }
        });

    });

    //post
    /*$("#uploads").change( function (e) {
        var fileName = e.target.files[0].name;
        $( "#fileName" ).html( fileName );
    });*/

    //Add comment
    $("#add_comment").submit( function (e) {

        e.preventDefault();
        $(".btn-post-disabled").attr("disabled", "disabled");

        var comment = $("#comment").val();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();

        if (comment == ''){

            $('#comment_msg').fadeIn().delay(2000).fadeOut();
            $(".btn-post-disabled").removeAttr("disabled");
            return false;
        }

        $('.spinner').show();
        var formData = new FormData($(this)[0]);

        setTimeout(function() {

            $.ajax({
                type: "POST",
                url: "include/serverresponse.php",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                //data: form.serialize(),
                success: function(data)
                {
                    var data = JSON.parse(data);
                    if(data.success){

                        $('.spinner').hide();
                        $(".btn-post-disabled").removeAttr("disabled");
                        $('#post_msg').fadeIn().delay(2000).fadeOut();
                        $('#comment, #uploads').val('');
                        $('#charNum').text(140);
                        //
                        var body = '';
                        body += '<div class="box-wrapper" style="clear:both;">' +
                            '<div class="well">' +
                            '<div class="namer-wrapper">'+
                            '</div>' +
                            '<div class="namer-wrapper">' +
                            '<h2>'+  first_name  +" "+ last_name +'</h2>' +
                            '<h5 class="small">'+ data.date + " at " + data.time + '</h5>' +
                            '<span>'+ comment +'</span>' +
                            '</div>'+
                            '</div>' +
                            '</div>';

                        $("#post_msg_div").prepend(body);

                    }else{
                        //alertify.error(data.msg);
                    }

                }
            });

        }, 900);//time in milliseconds

    });

    //Post image size validation not greater than 5MB
    $('#uploads').bind('change', function(e) {
        var a=(this.files[0].size);
        var fileName = e.target.files[0].name;
        $(".btn-post-disabled").attr("disabled", "disabled");
        if(a > 5000000) {
            bootbox.alert("Image should not be greater than 5MB!");
            //alert('Image should not be greater than 5MB');
            $('#uploads').empty();
            $( "#fileName" ).hide();
            $('#fileSizeMsg').show();
            $('#fileSizeMsg').css("color","red");
        }else{
            $(".btn-post-disabled").removeAttr("disabled");
            $( "#fileName" ).show();
            $( "#fileName" ).html( fileName );
            $('#fileSizeMsg').hide();
        }
    });

    //Group page on change remove disabled page
    $( "#group_id" ).change( function () {

        var groupValue = $( "#group_id" ).val();
        if(groupValue == '0'){
            $("#submit_value").attr("disabled","disabled");
        }else{
            $('#submit_value').removeAttr("disabled");
        }

    });



});