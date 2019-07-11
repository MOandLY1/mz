function grzx1(){
    $("#grzx1").attr("style","display:none;");
    $("#grzx2").attr("style","display:block;");
}
function aaa(){
    alert('00');
}




$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
