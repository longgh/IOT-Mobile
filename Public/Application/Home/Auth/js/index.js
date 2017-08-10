/**
 * Created by Administrator on 2017/8/1.
 */
$('.submit').click(function () {
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    $.ajax({
        type:"POST",
        url:"/Home/Auth/login",
        dataType:"json",
        data:{'username':username, 'password':password},
        success:function(data){
            if(data == '验证成功') location.href = '/';
            else alert(data);
        }
    });
})