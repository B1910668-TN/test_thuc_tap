$("#update_ad").click(function(){
    $.post($("#myform").attr("action"),
            $("#myform").serializeArray(),        
            function(thongtin){ 
                $("#ack").empty();
                $("#ack").html(thongtin);
            });
    $("#myform").submit(function(){
        return false;
    });
});