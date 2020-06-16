$("#add").click(function(){
   
    var data =$("#myform:input").serializeArray();
    
    $.post($("#myform").attr("action"),data,function(noti){ alert("inserted"); } );
});


$("#myform").submit(function (){
    
    return false;
});