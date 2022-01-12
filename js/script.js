$( document ).ready(function() {
    $("#btn_send").click(
		function(){
			$.ajax({
                url:     "/admin/add",
                type:     "POST",
                dataType: "html", 
                data: $("#send_post").serialize(),
                success: function(response) {
                    $('#result').html(response);
                    $("#send_post").remove();
                    $("#result"). after("<br><a href='/admin'>Добавить еще пост</a><br>");
                },
                error: function(response) { 
                    $('#result').html('Ошибка. Данные не отправлены.');
                }
             });
			return false; 
		}
	);
});