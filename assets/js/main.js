;(function($){
    $(document).ready(function(){
        // alert('hello world');
        $("#login").on('click', function(){
            $("#form01 h3").html("Login");
            $("#action").val("login");
            $(".fname").hide();
            $(".lname").hide();
            $("#login").hide();
            $("#register").show();
            // $("#register").show();
            // this.hide();
            
        });
        $("#register").on('click', function(){
            $("#form01 h3").html("Register");
            $("#action").val("register");
            $(".fname").show();
            $(".lname").show();
            $("#register").hide();
            $("#login").show();
        });
    })
})(jQuery);

