;(function($){
    $(document).ready(function(){
        // alert('hello world');
        $("#btn1 #login").on('click', function(){
            $("#form01 h3").html("Login");
            $("#action").val("login");
            $("#login a").html("Create a new account.");
            $("#login").attr("id","register");
            // $("#register").show();
            // this.hide();
            
        });
        $("#btn1 #register").on('click', function(){
            $("#form01 h3").html("Register");
            $("#action").val("register");
            $("#register a").html("Already have an account.");
            $("#register").attr("id","login");
        });
    })
})(jQuery);

