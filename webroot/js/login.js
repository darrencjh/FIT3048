$("#loginUsername").blur(function(){
    var $this=$(this);
    if(!$this.val()){
        $('.msg-uname').html("*username cannot be empty");
    }else{
        $('.msg-uname').html("");
    }
});
$("#loginUserPassword").blur(function(){
    var $this=$(this);
    if(!$this.val()){
        $('.msg-pwd').html("*password cannot be empty");
    }else{
        $('.msg-pwd').html("");
    }
});
$("#loginSubmit").on("click", function () {
    var uname=$("#loginUsername").val();
    var pwd=$("#loginUserPassword").val();
    if(!uname){
        $('.msg-uname').html("*username cannot be empty");
        if(!pwd){
            $('.msg-pwd').html("*password cannot be empty");
        }
        return false;
    }
    $('form').trigger("submit");
    return true;
});

var urlParams = new URLSearchParams(window.location.search);
console.log(urlParams.get('action'));
if(urlParams.get('action')=='error'){
    $('.msg-uname').html("*username or password is wrong");
    $('.msg-pwd').html("*username or password is wrong");
}
