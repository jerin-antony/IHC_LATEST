function sendOTP() {
    $(".error").html("").hide();
    var number = $("#mobile").val();
    if (number.length == 10 && number != null){
        var input = {
            "mobile_number" : number,
            "action" : "send_otp"
        };
        $.ajax({
            URL : 'controller.php',
            type : 'POST',
            data : input,
            success : function(respopnse){
                $(".container").html (response);
                }
        });
    } 
    else {
        $(".error").html('please enter a valid number!')
        $(".error").show();
    } 
    
}