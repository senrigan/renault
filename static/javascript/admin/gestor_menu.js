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
    var loadUrl =adminview+"registro_tecnico.html";
    $("#container").load(loadUrl);
	});

	$("#modtec").click(function () {
	    var loadUrl = adminview+"modificar_tecnico.php";
	    $("#container").load(loadUrl);
	});
 });
