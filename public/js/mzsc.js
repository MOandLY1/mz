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




function Secondary_navigation(a){          //鼠标移动到导航栏，展示二级导航
       var v = a+'bb';
       $('.Secondary_navigation').css("display","none")
       $('.'+v).css("display","block")
}

function Secondary_navigation_(a){        //鼠标离开导航栏，关闭二级导航栏
       var v = a+'bb';
    // $('.Secondary_navigation').css("display","none");
    // $('.'+v).css("display","none");

    var div = document.getElementById(".Secondary_navigation");
    var x=event.clientX;
    var y=event.clientY;
    var divx1 = div.offsetLeft;
    var divy1 = div.offsetTop;
    var divx2 = div.offsetLeft + div.offsetWidth;
    var divy2 = div.offsetTop + div.offsetHeight;
    if( x < divx1 || x > divx2 || y < divy1 || y > divy2){
        $('.Secondary_navigation').css("display","none");
        $('.'+v).css("display","none");

    }

}

function leave_secondary_nav(){          //鼠标离开二级导航栏，关闭二级导航栏
    var v = a+'bb';
    $('.Secondary_navigation').css("display","none");
    $('.'+v).css("display","none");
}




function jump_homepage(){             //点击各个页面的页首导航图片回主页
    window.location.href="/mzsc1";
}
function Jump_Personal_Center(){      //跳转到个人中心页面
    window.location.href="/Personal_Center";
}

//Personal_Center 页面的JS效果
function Change_Password(){                     //打开更改密码的窗口
    $('#Change_Password').css("display", "none");
    $('#Change_Password_').css("display", "block");
}
function Change_Password_(){                   //关闭更改密码的窗口
    $('#Change_Password').css("display", "block");
    $('#Change_Password_').css("display", "none");

}
function Change_Mailbox(){                    //打开更改邮箱的窗口
    $('#Change_security').css("display", "none");
    $('#Change_security_').css("display", "block");

}
function Change_Mailbox_(){                    //关闭更改邮箱的窗口
    $('#Change_security').css("display", "block");
    $('#Change_security_').css("display", "none");
}
function Change_phone(){                   //打开更改手机的窗口
    $('#Change_phone').css("display", "none");
    $('#Change_phone_').css("display", "block");

}
function Change_phone_(){                    //关闭改手机的窗口
    $('#Change_phone').css("display", "block");
    $('#Change_phone_').css("display", "none");
}
function Change_Password_insurance(){        //关闭更改密保的窗口
    $('#Change_Password_insurance').css("display", "none");
    $('#Change_Password_insurance_').css("display", "block");

}
function Change_Password_insurance_(){         //关闭更改密保的窗口
    $('#Change_Password_insurance').css("display", "block");
    $('#Change_Password_insurance_').css("display", "none");
}
function modify_name(){          //打开修改用户名的窗口
    $('#user_name').css("display", "none");
    $('#user_name_').css("display", "block");

}
function modify_name_(){          //关闭修改用户名的窗口
    $('#user_name').css("display", "block");
    $('#user_name_').css("display", "none");
}


function New_username(){
    var modify_name  = $('#modify_name').val();
    $.ajax({
        type: 'GET',
        url: './New_username',
        data: {modify_name:modify_name},
        dataType: "json",
        success: function (data) {
            alert(data.info);
            if(data.code==1){
                modify_name_();
                $('#user_name').html('用户**'+modify_name+'<img onclick="modify_name()" src="./img/35.png" alt="">');
            }
        },
    });
}        //更改用户名

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
}     //更改密码

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
                $('#mailbox').html(mailbox);
            }
        }

    })
}             //绑定邮箱

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
                $('#Password_Protection').html(Password_Protection);
                $('#Password_Protection_Answers').html(Password_Protection_Answers);
            }
        }
    })
}                  //绑定手机

function Submission_Password_protection(){      //密保问题与答案
    var Password_Protection = $('#Password_Protection').val();
    var Password_Protection_Answers = $('#Password_Protection_Answers').val();
    $.ajax({
        type:'GET',
        url:'./Submission_Password_protection',
        data:{Password_Protection:Password_Protection,Password_Protection_Answers:Password_Protection_Answers},
        dataType:"json",
        success: function(data){
            alert(data.info);
            if(data.code==1){
                Change_Password_insurance_();
                $('#Password_Protection').attr("placeholder","Password_Protection");
                $('#Password_Protection_Answers').attr("placeholder","Password_Protection_Answers");
            }
        }
    })
}        //密保问题与答案


                                   //购买详情页面


function Details_page_Number_1(){             //点击购买数+1
    Details_page_Number_2
}
function Details_page_Number_1_(){            //点击购买数-1

}

function Details_page_purchase(){                //鼠标移入立即购买
    $('#Details_page_purchase').css("background", "#23A0E5");
}
function _Details_page_purchase(){              //鼠标移出立即购买
    $('#Details_page_purchase').css("background", "#27B3FF");
}
function Details_page_purchase_(){                //鼠标移入加入购物车
    $('#Details_page_purchase_').css("background", "#EEF8FD");
}
function _Details_page_purchase_(){              //鼠标移出加入购物车
    $('#Details_page_purchase_').css("background", "white");
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
