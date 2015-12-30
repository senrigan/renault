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
 	var localurl=location.href;

 	localurl=localurl.replace("#",'');
    localurl=localurl.substring(0,localurl.indexOf("/app/"));
    localurl=localurl+"/app/";
     $("#regtec").click(function () {
    var loadUrl =localurl+"view/"+"registro_tecnico.html";
    $("#container").load(loadUrl);
	});

	$("#modtec").click(function () {
	    var loadUrl = localurl+"view/"+"modificar_tecnico.php";
	    $("#container").load(loadUrl);
	});
 });
