function cancel(){
    window.location = 'index.html';
}

function register(){
    var fullnameRegi = $('#registerName').val();
    var usernameRegi = $('#registerUsername').val();
    var emailRegi = $('#registerEmail').val();
    var dateRegi = $('#registerDate').val();
    var mobileRegi = $('#registerMobile').val();
    var placeRegi = $('#registerPlace').val();
    var passwordRegi = $('#registerPassword').val();
    var passwordConfRegi = $('#registerConfPassword').val();
    var genderRegi = $('input[name="gender"]:checked').val();


        if(passwordRegi !== passwordConfRegi){
            alert("Password Doesn't Match")
        }else{
        $.ajax({
            url:"/php/register.php",
            type:"POST",
            data:{
                nameSend:fullnameRegi,
                usernameSend:usernameRegi,
                emailSend:emailRegi,
                dateSend:dateRegi,
                mobileSend:mobileRegi,
                placeSend:placeRegi,
                genderSend:genderRegi,
                passwordSend:passwordRegi,
                passwordConfSend:passwordConfRegi
            },
            success:function(data,status){
                console.log(status);
                window.location = 'login.html';
            }
        });
    }
}