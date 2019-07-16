function grzx1(){
    $("#grzx1").attr("style","display:none;");
    $("#grzx2").attr("style","display:block;");
}
function Advertisement_Close(){
    $('#Advertisement').css("display", "none");
    $('#Advertisement_Close').css("display", "none");
}
function aaa(){
    alert('00');
}

//Personal_Center 页面的JS效果
function Change_Password(){
    $('#Change_Password').css("display", "none");
    $('#Change_Password_').css("display", "block");
}
function Change_Password_(){
    $('#Change_Password').css("display", "block");
    $('#Change_Password_').css("display", "none");

}
function Change_Mailbox(){
    $('#Change_security').css("display", "none");
    $('#Change_security_').css("display", "block");

}
function Change_Mailbox_(){
    $('#Change_security').css("display", "block");
    $('#Change_security_').css("display", "none");
}
function Change_phone(){
    $('#Change_phone').css("display", "none");
    $('#Change_phone_').css("display", "block");

}
function Change_phone_(){
    $('#Change_phone').css("display", "block");
    $('#Change_phone_').css("display", "none");
}
function Change_Password_insurance(){
    $('#Change_Password_insurance').css("display", "none");
    $('#Change_Password_insurance_').css("display", "block");

}
function Change_Password_insurance_(){
    $('#Change_Password_insurance').css("display", "block");
    $('#Change_Password_insurance_').css("display", "none");
}

function Change_Password_Submission(){   //提交给后台的修改密码
    var password  = $('#password').val();
    var confirm_password  = $('#confirm_password').val();
    $.ajax({
        type: 'GET',             //设定提交方式,get或post
        url: './Modify_personal_information',         //提交的url
        data: {password:password,confirm_password:confirm_password},    //第一个参数相当于form表单的name，第二个参数则是里面的内容
        //提交给服务器的数据
        dataType: "json",            //服务器返回的数据格式
        success: function (data) {        //执行成功的方法
            alert(data.info);
            if(data.code==1){
                $('#Change_Password').css("display", "block");
                $('#Change_Password_').css("display", "none");    //直接调用JS方法

            }
        },
    });
}

function Binding_Mailbox(){             //绑定邮箱
    var mailbox = $('#mailbox').val();
    $.ajax({
        type: 'GET',
        url: './Binding_Mailbox',
        data: {mailbox:mailbox},
        dataType:"json",
        success: function (data){
            alert(data.info);
            if(data.code==1){
                Change_Mailbox_();
            }
        }

    })
}
function binding_phone(){       //绑定手机
    var phone = $('#phone').val();
    $.ajax({
        type:'GET',
        url:'./binding_phone',
        data:{phone:phone},
        dataType:"json",
        success: function(data){
            alert(data.info);
            if(data.code==1){
                Change_phone_();
            }
        }
    })
}



function c(){
    var v = $('#main_input_password').css("display")

    if(v=='block') {
        var password = $('#main_input_password').val();
        // alert(password)
        $('#main_input_password').css("display", "none");
        $('#main_input_password_').css("display", "block");
        $('#main_input_password_').val(password);
    }else{
        var password = $('#main_input_password_').val();
        $('#main_input_password').css("display", "block");
        $('#main_input_password_').css("display", "none");
        $('#main_input_password').val(password);
    }
}

    // var password  = $('#main_input_password_').val();
    // // alert(password)
    // $('#main_input_password_').css("display","none");
    // $('#main_input_password').css("display","block");
    // $('#main_input_password').val(password);

function Personal_Center(){
    $("#user_state_details").attr("style","display:block;");
}
function Personal_Center_(){

    var div = document.getElementById("user_state_details");
    var x=event.clientX;
    var y=event.clientY;
    var divx1 = div.offsetLeft;
    var divy1 = div.offsetTop;
    var divx2 = div.offsetLeft + div.offsetWidth;
    var divy2 = div.offsetTop + div.offsetHeight;
    if( x < divx1 || x > divx2 || y < divy1 || y > divy2){
        $('#user_state_details').css("display","none");

    }

}
function user_state_details(){
    $("#user_state_details").css("display","none");
}
function Jump_land(){
    window.location.href="/land";
}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
