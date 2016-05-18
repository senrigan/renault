$(document).ready(function() // or $(function()
 {
	 $('td').on('update', function(){
    console.log('updates  en la tabla .');
		});

		$("td").on("change", function() {
    console.log("changes en la tabla");
		});


		$("td").on("ondrag", function() {
		console.log("changes en la tabla");
		});

		var x = document.getElementsByClassName("c1");
		var tip="update";
		addListener(x,"onupdate");
		tip="change";
		addListener(x,"onchange");

		tip="ondrag";
		addListener(x,"ondrag");
		console.log("hola iniciando los listener");
 });

function addListener(x, type){
	console.log(x.length);
	for(var i = 0; i<x.length; i++){
		console.log(x[i]);
		x[i].addEventListener(""+type,function(){
 			console.log("estan ocurriendo cambios"+type);
 		});
	}

}
function guardarTablero(){
	var table=document.getElementById("table2");
	//console.log("table"+table);
  $.post("../controller/limpiar_elementos.php",{
    command:"clean"
    },function(data,status){
    console.log("data es "+data);
    if(data==null){
      console.log(data);
    }else{
      console.log("Cambios Guardados con exito");
    }
  });
	var tecnicos=[];
  var size=table.rows.length;
  var continueSave=true;
	for(var i=3,row; row=table.rows[i] ;i++){
		///console.log("row"+i+"data"+row.innerHTML)
		if(esImpar(i)){//planeando
			//console.log("planeando ****");
			var tab_tecnico=[];
			var planeado=[];
			var trabajando=[];

			var tecnico=row.cells[0];
			tab_tecnico.push(tecnico.id);

			console.log(tecnico);
			console.log("id tecnico"+tecnico.id);
			var imagen=row.cells[1];
			var status=row.cells[2];
			///console.log("status"+status.innerHTML);
			//console.log("status"+row.cells[0].innerHTML);
			var h0800=obtenerCelda(3,row);
			planeado.push(h0800);
			var h0830=obtenerCelda(4,row);;
			planeado.push(h0830);
			var h0900=obtenerCelda(5,row);;
			planeado.push(h0900);
			var h0930=obtenerCelda(6,row);;
			planeado.push(h0930);
			var h1000=obtenerCelda(7,row);;
			planeado.push(h1000);
			var h1030=obtenerCelda(8,row);;
			planeado.push(h1030);
			var h1100=obtenerCelda(9,row);;
			planeado.push(h1100);
			var h1130=obtenerCelda(10,row);;
			planeado.push(h1130);
			var h1200=obtenerCelda(11,row);;
			planeado.push(h1200);
			var h1230=obtenerCelda(12,row);;
			planeado.push(h1230);
			var h1300=obtenerCelda(13,row);;
			planeado.push(h1300);
			var h1330=obtenerCelda(14,row);;
			planeado.push(h1330);
			var h1400=obtenerCelda(15,row);;
			planeado.push(h1400);
			var h1430=obtenerCelda(16,row);;
			planeado.push(h1430);
			var h1500=obtenerCelda(17,row);;
			planeado.push(h1500);
			var h1530=obtenerCelda(18,row);;
			planeado.push(h1530);
			var h1600=obtenerCelda(19,row);;
			planeado.push(h1600);
			var h1630=obtenerCelda(20,row);;
			planeado.push(h1630);
			var h1700=obtenerCelda(21,row);;
			planeado.push(h1700);
			var h1730=obtenerCelda(22,row);;
			planeado.push(h1730);
			var h1800=obtenerCelda(23,row);;
			planeado.push(h1800);
			var h1830=obtenerCelda(24,row);;
			planeado.push(h1830);
			var h1900=obtenerCelda(25,row);;
			planeado.push(h1900);
			var h1930=obtenerCelda(26,row);;
			planeado.push(h1930);
			var lavado=obtenerCelda(27,row);;
			planeado.push(lavado);
			var control=obtenerCelda(28,row);;
			planeado.push(control);
			var term=obtenerCelda(29,row);;
			planeado.push(term);
			var tot=obtenerCelda(30,row);;
			planeado.push(tot);
			var partes=obtenerCelda(31,row);;
			planeado.push(partes);
			var aut=obtenerCelda(32,row);;
			planeado.push(aut);
      console.log("planeado");
      console.log(planeado);
			tab_tecnico.push(planeado);

			var plan={
				"h0800":h0800,
				"h0830":h0830,
				"h0900":h0900,
				"h0930":h0930,
				"h1000":h1000,
				"h1030":h1030,
				"h1100":h1100,
				"h1130":h1130,
				"h1200":h1200,
				"h1230":h1230,
				"h1300":h1300,
				"h1330":h1330,
				"h1400":h1400,
				"h1430":h1430,
				"h1500":h1500,
				"h1530":h1530,
				"h1600":h1600,
				"h1630":h1630,
				"h1700":h1700,
				"h1730":h1730,
				"h1800":h1800,
				"h1830":h1830,
				"h1900":h1900,
				"h1930":h1930,
				"lavado":lavado,
				"control_calidad":control,
				"terminado":term,
				"tot":tot,
				"partes":partes,
				"aut":aut
			};
      console.log("planb -");
      console.log(plan);
		}else{//trabajndo
			//console.log(tecnico);
			var status=obtenerCelda(0,row);
			var h0800=obtenerCelda(1,row);
			var h0830=obtenerCelda(2,row);
			var h0900=obtenerCelda(3,row);
			var h0930=obtenerCelda(4,row);
			var h1000=obtenerCelda(5,row);
			var h1030=obtenerCelda(6,row);
			var h1100=obtenerCelda(7,row);
			var h1130=obtenerCelda(8,row);
			var h1200=obtenerCelda(9,row);
			var h1230=obtenerCelda(10,row);
			var h1300=obtenerCelda(11,row);
			var h1330=obtenerCelda(12,row);
			var h1400=obtenerCelda(13,row);
			var h1430=obtenerCelda(14,row);;
			var h1500=obtenerCelda(15,row);
			var h1530=obtenerCelda(16,row);
			var h1600=obtenerCelda(17,row);
			var h1630=obtenerCelda(18,row);
			var h1700=obtenerCelda(19,row);
			var h1730=obtenerCelda(20,row);
			var h1800=obtenerCelda(21,row);
			var h1830=obtenerCelda(22,row);
			var h1900=obtenerCelda(23,row);
			var h1930=obtenerCelda(24,row);
			var lavado=obtenerCelda(25,row);
			var control=obtenerCelda(26,row);
			var term=obtenerCelda(27,row);
			var tot=obtenerCelda(28,row);
			var partes=obtenerCelda(29,row);
			var aut=obtenerCelda(30,row);
			trabajando.push(h0800);
			trabajando.push(h0830);
			trabajando.push(h0900);
			trabajando.push(h0930);
			trabajando.push(h1000);
			trabajando.push(h1030);
			trabajando.push(h1100);
			trabajando.push(h1130);
			trabajando.push(h1200);
			trabajando.push(h1230);
			trabajando.push(h1300);
			trabajando.push(h1330);
			trabajando.push(h1400);
			trabajando.push(h1430);
			trabajando.push(h1500);
			trabajando.push(h1530);
			trabajando.push(h1600);
			trabajando.push(h1630);
			trabajando.push(h1700);
			trabajando.push(h1730);
			trabajando.push(h1800);
			trabajando.push(h1830);
			trabajando.push(h1900);
			trabajando.push(h1930);
			trabajando.push(lavado);
			trabajando.push(control);
			trabajando.push(term);
			trabajando.push(tot);
			trabajando.push(partes);
			trabajando.push(aut);
			tab_tecnico.push(trabajando);
			tecnicos.push(tab_tecnico);
      console.log("tarbaajndo");
      console.log(trabajando);
			//console.log("tecnicos"+tecnicos);
			/*$.POST("../controller/gestionar_tablero.php?id="+tecnico.id,{
				planeado: planeado,
				trabajando: trabajando
			},function(data,status){
				console.log("data"+data);

			});

*/
			var trab={
				"h0800":h0800,
				"h0830":h0830,
				"h0900":h0900,
				"h0930":h0930,
				"h1000":h1000,
				"h1030":h1030,
				"h1100":h1100,
				"h1130":h1130,
				"h1200":h1200,
				"h1230":h1230,
				"h1300":h1300,
				"h1330":h1330,
				"h1400":h1400,
				"h1430":h1430,
				"h1500":h1500,
				"h1530":h1530,
				"h1600":h1600,
				"h1630":h1630,
				"h1700":h1700,
				"h1730":h1730,
				"h1800":h1800,
				"h1830":h1830,
				"h1900":h1900,
				"h1930":h1930,
				"lavado":lavado,
				"control_calidad":control,
				"terminado":term,
				"tot":tot,
				"partes":partes,
				"aut":aut
			};
      console.log("trab");
      console.log(trab);
      console.log("plan");
      console.log(plan);

      console.log("insertando en la base");
			$.post("../controller/gestionar_tablero.php",{
				id:tecnico.id,
				planeado:plan,
				trabajando:trab,
				},function(data,status){
				console.log("data es "+data);
				if(data==null){
					alert("ocurrio un error al guardar");
				}else{
          //console.log("validando i"+i+"size"+size);
          if(continueSave){
              continueSave=false;
          }
				}
			});
			/* $.ajax({
			     type: 'POST',
			     url: '../controller/gestionar_tablero.php',
			     data: { planeado: planeado,
				trabajando: trabajando,
				id:tecnico
				},
			     beforeSend: function()
			     {
			         alert('Fetching....');
			     },
			     success: function(data , status)
			     {
			         alert('Fetch Complete'+data);
			     },
			     error: function()
			     {
			         alert('Error');
			     },
			     complete: function()
			     {
			         alert('Complete')
			     }
			 });
			*/

		}





		/*for(var j=0,col; col=row.cells[j] ;j++){
			console.log("col"+col.innerHTML);
		}*/
	}

  if(continueSave){
    alert("cambios guardados con exito");
  }
	//var tab=JSON.stringify(tecnicos);
	//console.log("tab"+tab);
	/*$.post("../controller/gestionar_tablero.php?tablero="+tab,function(data,status){
		console.log("recibiendo data"+data);
	});
*/
	/*
	$.ajax({
    type: 'POST',
    url: '../controller/gestionar_tablero.php',
    data: tab,
    dataType: 'json'
	})
	.done( function( data ) {
	    console.log('done');
	    console.log(data);
	})
	.fail( function( data ) {
	    console.log('fail');
	    console.log(data);
	});
*/

}
function esImpar(num){
	if(num %2==0){
		return false;
	}else{
		return true;
	}
}

function obtenerCelda(num , fila){
	var celda=fila.cells[num].firstChild;
	if(celda){
		var id=celda.id;
		if(id){
			var content={};
			if(id.indexOf("food")==-1 && id.indexOf("birthday")==-1 ){

				if(id.indexOf("yellow")!=-1){
					id="yellow";
				}else if(id.indexOf("blue")!=-1){
					id="blue";
				}else if(id.indexOf("red")!=-1){
					id="red";
				}else if(id.indexOf("white")!=-1){
					id="white";
				}
				content["text"]=celda.textContent;

			}else{
				if(id.indexOf("food")!=-1){
					id="food";
					content["text"]=id;
				}else if(id.indexOf("birthday")!=-1){
					id="birthday";
					content["text"]=id;
				}

			}
			content["id"]=id;

			console.log(content);
			return content;
	}
	return celda;

	}else{
		celda="-";
		console.log(celda);
		return celda;
	}
}


function regresarMenu(){
			  window.location.assign('../../admin/index.php');
}
