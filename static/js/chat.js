$(document).ready(function() {
	$(".chatIni button").on("click" , validaChat);
	function validaChat(){
		$(".inicia").html('<div class="loading"><p>Cargando..</p><ul><li></li><li></li><li></li><li></li><li></li></ul></div>');
		history.pushState(null, "", "User/");
	};
});