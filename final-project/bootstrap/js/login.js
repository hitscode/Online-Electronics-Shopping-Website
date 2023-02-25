$(document).ready(function(){
    $("#log_in").click(function(){
var email=$("#login_email").val();
var password=$("#login_pass").val();
var isvalid=true;
if(email == ''){
    isvalid=false;
    $("#erroremail").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong>Email Field Cannot Be Empty .</div>");
}else{
    $("#erroremail").html("");
}
if(password == ''){
    isvalid=false;
    $("#errorpassword").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong>Password Field Cannot Be Empty .</div>");
}else{
    $("#errorpassword").html("");
}

if(isvalid == true){
    $.ajax({
        url: "../../login_script.php",
        type:"POST",
        data:{
            email:email,
            password:password
        }
        
    });
    
}else{
    return false;
}
        
        
    });
    
    $(".modal").on("hidden.bs.modal",function(){
        $(this).find(":text, :password").val('').end();
        $("#erroremail").html("");
        $("#errorpassword").html("");
        $(".alert-danger").remove();
        $(".alert").remove();
    });
    
    
    
});