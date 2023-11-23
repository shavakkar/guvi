function cancel(){
    window.location = 'index.php';
}

function login(){
    var emailLog = $('#loginEmail').val();
    var passwordLog = $('#loginPassword').val();

    $.ajax({
        url:"/php/login.php",
        method:"POST",
        data:{
            emailSend:emailLog,
            passwordSend:passwordLog,
        },
        // success:function(data,status){
        //     console.log(data);
        //     console.log(status);
        //     // window.location = 'profile.html';
        // }
    });
}