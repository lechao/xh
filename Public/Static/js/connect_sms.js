    function get_sms_captcha(type){
        if($("#mobile").val().length == 11){
            var ajaxurl = 'index.php?act=login&op=get_captcha&nchash=1&type='+type;
            ajaxurl += '&captcha='+$('#captcha').val()+'&phone='+$('#mobile').val();
            $.ajax({
                type: "GET",
                url: ajaxurl,
                dataType:'json',
                success: function(rs){
                    if(rs.state) {
                        $('#sms_captcha1').hide();
                        $('#sms_captcha2').show();
                        $.ncDialog({msg:'短信动态码已发出'});
                        $('#sms_captcha2').html('等待<em>'+rs.msg+'</em>秒后重新获取验证码');
                        var _sms_time = parseInt(rs.msg);
                        var times_Countdown = setInterval(function(){
                            _sms_time--
                            if (_sms_time == 0) {
                                $('#sms_captcha2').hide();
                                $('#sms_captcha1').show();
                                clearInterval(times_Countdown);
                            } else {
                                $('#sms_captcha2').html('等待<em>'+_sms_time+'</em>秒后重新获取验证码');
                            }
                        },1000);
                    } else {
                        console.log(rs.msg);
                        $.ncDialog({msg:rs.msg});
                        document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&type=50,120&t=' + Math.random();
                    }
                }
            });
        }
    }
    function check_captcha(){
        if($("#mobile").val().length == 11 && $("#d_captcha").val().length == 6){
            var ajaxurl = 'index.php?act=login&op=check_captcha';
            ajaxurl += '&sms_captcha='+$('#d_captcha').val()+'&phone='+$('#mobile').val();
            $.ajax({
                type: "GET",
                url: ajaxurl,
                async: false,
                success: function(rs){
                    if(rs == 'true') {
                        $('#register_form1').hide();
                        $('#register_form2').show();
                        $.getJSON('index.php?act=login&op=get_member&mobile='+$('#mobile').val(), function(result){
                            $('input[name="mobile"]').val($('#mobile').val());
                            $('input[name="d_captcha"]').val($('#d_captcha').val());
                            $('#user_name').val(result.name);
                            });
                    } else {
                        $.ncDialog({msg:rs});
                        document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&type=50,120&t=' + Math.random();
                    }
                }
            });
        }
    }