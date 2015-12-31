function loadContent(page){
	$.ajax({
	  url: ''+page,
	  success: function(data) {
	    $('#container').html(data);
	    alert('Load was performed.');
	  }
	});
}

$(document).ready(function() // or $(function()
 {
 	
     $("#regtec").click(function () {
    var loadUrl =adminview+"registro_tecnico.php";
    $("#container").load(loadUrl);
	});

	$("#modtec").click(function () {
	    var loadUrl = adminview+"consultar_tecnicos.php";
	    $("#container").load(loadUrl);
	});
	$("#moduser").click(function () {
	    var loadUrl = adminview+"consultar_usuarios.php";
	    $("#container").load(loadUrl);
	});
	$("#reguser").click(function () {
	    var loadUrl = adminview+"registro_usuario.html";
	    $("#container").load(loadUrl);
	});
 });
