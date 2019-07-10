function grzx1(){
    $("#grzx1").attr("style","display:none;");
    $("#grzx2").attr("style","display:block;");
}
function aaa(){
    alert('00');
}
function c(){
    $("#main_input_password").attr("type","text");
}
var isShow=true;
function change(){
    var v=document.getElementById("ps");
    if (isShow) {
        v.type="text";
        isShow=false;
    }else{
        v.type="password";
        isShow=true;
    }
}
