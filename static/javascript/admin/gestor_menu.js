var regtecactive=false;
var reguseractive=false;
var modtecactive=false;
$.ajax({
  xhr: function()
  {
    var xhr = new window.XMLHttpRequest();
    //Upload progress
    xhr.upload.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        //Do something with upload progress
        console.log(percentComplete);
      }
    }, false);
    //Download progress
    xhr.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        //Do something with download progress
        console.log(percentComplete);
      }
    }, false);
    return xhr;
  },
  type: 'POST',
  url: "/",
  data: {},
  success: function(data){
    //Do something success-ish
  }
});

function loadContent(page){
	$.ajax({
	  url: ''+page,
	  success: function(data) {
	    $('#container').html(data);
	    alert('Load was performed.');
	  }
	});
}
function hola(id){
$.post("controller/consultar_usuario.php",{idusuario:id},function(data){
		var dat=JSON.parse(data);
		if(dat){
			var cuent=dat[0];
			var usuario=cuent.cuenta;
			var password=cuent.password;
			var privileges=cuent.privileges;
			$("#moduser").val(usuario);
			$("#modpassword").val(password);
			switch(privileges){
				case 1:
					$("#modtypecount").val(1);
					break;
				case 2:
					$("#modtypecount").val(2);
					break;
			}
			document.location.href = "#modusermodal";
			moduseractive=true;

			
		}else{
			alert("no se pueden consultar los datos del usuario");
		}
	});
}
function modificarTecnico(id){
	$.post("controller/consultar_tecnico.php",{idTecnico:id},function(data){
			var dat=JSON.parse(data);
			if(dat){
				var tec=dat[0];
				var nombre=tec.nombre;
				var apaterno=tec.a_paterno;
				var amaterno=tec.a_materno;
				var imagen=tec.imagen_perfil;
				$("#modfirstname").val(nombre);
				$("#modlastnamepatern").val(apaterno);
				$("#modlastnamemother").val(amaterno);
				$("#idtec").val(id);
				var firts=$("modfirstname");
				if(imagen){
					$("#modwizardPicturePreview").attr("src","../../media/userImage/"+imagen)

				}else{
					$("#modwizardPicturePreview").attr("src","../../media/userImage/static/tecnico.png");
				}
				document.location.href = "#modtecmodal";
				modtecactive=true;

			
			}else{
				alert("existe un error al intentar modificar al tecnico");
			}
			
	});
}

function eliminarTecnico(id){
	if (confirm('Realmente deseas borrar el Tenico ')) {
		$.post("controller/eliminar_tecnico.php",{idTecnico:id},function(data){
				alert(data);
				var loadUrl = adminview+"consultar_tecnicos.php";
	    		$("#container").load(loadUrl);
		});
	} else {

	}

	
}

function modificarUsuario(id){
	alert(id);
	$.post("controller/consultar_usuario.php",{idusuario:id},function(data){
		var dat=JSON.parse(data);
		if(dat){
			var cuent=dat[0];
			var usaurio=cuent.cuenta;
			var password=cuent.password;
			var privileges=cuent.privileges;
			$("#moduser").val(usuario);
			$("#modpassword").val(password);
			switch(privileges){
				case 1:
					$("#modtypecount").val(1);
					break;
				case 2:
					$("#modtypecount").val(2);
					break;
			}
			document.location.href = "#modusermodal";
			moduseractive=true;

			
		}else{
			alert("no se pueden consultar los datos del usuario");
		}
	});
}

function eliminarUsuario(id){
	if(confirm("Realmente deseas Eliminar esta cuenta ")){
		$.post("controller/eliminarUsuario.php",{idusuario:id},function(data){
			if(data==1){
				alert("la cuenta a sido eliminada correctamente");
			}else{
				alert("la cuenta no pudo ser eliminada");
			}
		});
	}else{

	}
}


$(document).ready(function() // or $(function()
 {
 	
    $("#regtec").click(function () {
    	regtecactive=true;
    	reguseractive=false;
    	modtecactive=false;
    //var loadUrl =adminview+"registro_tecnico.php";
    //$("#container").load(loadUrl);
	});

	$("#modtec").click(function () {
	    var loadUrl = adminview+"consultar_tecnicos.php";
	    $("#container").load(loadUrl);
	    modtecactive=false;
	});
	$("#moduser").click(function () {
	    var loadUrl = adminview+"consultar_usuarios.php";
	    $("#container").load(loadUrl);
	});
	$("#reguser").click(function () {
	    reguseractive=true;
	    regtecactive=false;
	    modtecactive=false;
	    //var loadUrl = adminview+"registro_usuario.php";
	    //$("#modalcontent").load(loadUrl);
	    //$("#modalreg").modal('show');
	});

	
 });
