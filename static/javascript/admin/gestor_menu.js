var regtecactive=false;
var reguseractive=false;
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
    	regtecactive=true;
    	reguseractive=false;
    //var loadUrl =adminview+"registro_tecnico.php";
    //$("#container").load(loadUrl);
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
	    reguseractive=true;
	    regtecactive=false;
	    //var loadUrl = adminview+"registro_usuario.php";
	    //$("#modalcontent").load(loadUrl);
	    //$("#modalreg").modal('show');
	});
 });
