function update(){
    var nameUp = $('#updateName').val();
    var emailUp = $('#updateEmail').val();
    var mobileUp = $('#updateMobile').val();
    var placeUp = $('#updatePlace').val();

    $.ajax({
        url:'/php/profile.php',
        type:'GET',
        // data:{
        //     nameSend:nameUp,
        //     emailSend:emailUp,
        //     mobileSend:mobileUp,
        //     placeSend:placeUp,
        // },
            success:function(response){
            console.log(response);

        }
    });
}