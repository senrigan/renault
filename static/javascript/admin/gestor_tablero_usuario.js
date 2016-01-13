$(document).ready(function (){
var table=document.getElementById("table2");
	//console.log("table"+table);
	var tecnicos=[];
	

	for(var i=3,row; row=table.rows[i] ;i++){
		var planeado=[];
		var trabajando=[];
		if(esImpar(i)){//planeando
			console.log("NUEVO TECNICO"+i);
			var tab_tecnico=[];
			

			var tecnico=row.cells[0];
			tab_tecnico.push(tecnico.id);

			//console.log(tecnico);
			//console.log("id tecnico"+tecnico.id);
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
			
			//tab_tecnico.push(planeado);
			console.log(planeado);
			for(indice in planeado){
				var actualElemento=planeado[indice];
				if(actualElemento!="-"){
					for(var j=parseInt(indice)+1;j<planeado.length;j++){
						var nuevoElemento=planeado[j];
						console.log("indice"+indice);
						console.log(actualElemento);
						console.log("variable i"+j);
						console.log("nuevo elementos"+nuevoElemento);
						if(nuevoElemento!="-"){
							console.log(actualElemento.text +" "+ nuevoElemento.text);
							if(actualElemento.text==nuevoElemento.text && 
								actualElemento.id==nuevoElemento.id){
								console.log("elemento repitido"+actualElemento.text + actualElemento.id);
							}else{
								break;
							}
						}else{
							break;
						}
					}		
				}
			}
		}else{//trabajndo
			//console.log(tecnico);
			console.log("trabajando");
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
			//tab_tecnico.push(trabajando);
			//tecnicos.push(tab_tecnico);
			console.log("TRABAJANDO//////////////");
			console.log(trabajando);
			var elementosRepetidosTrab=[];
			for(indice in trabajando){
				var actualElemento=trabajando[indice];
				if(actualElemento!="-"){
					//var colnum=actualElemento.getAttribute("colspan");
					for(var j=parseInt(indice)+1;j<trabajando.length;j++){
						var nuevoElemento=trabajando[j];
						console.log("indice"+indice);
						console.log(actualElemento);
						console.log("variable i"+j);
						console.log("nuevo elementos"+nuevoElemento);
						if(nuevoElemento!="-"){
							if(actualElemento.text==nuevoElemento.text && 
								actualElemento.id==nuevoElemento.id){
								console.log("elemento repitido"+actualElemento.text + actualElemento.id);
								
								var celda=obtenerCeldaObjecto(indice,row);
								console.log(celda.colSpan);
								var celdaN=obtenerCeldaObjecto(j,row);
								celdaN.innerHTML="";
								row.deleteCell(j);
								celda.colSpan=parseInt(celda.colSpan)+1;
								console.log(celda.colSpan);

							}else{
								break;
							}
						}else{
							break;
						}
					}		
				}
			}

		}
	}
	//console.log(planeado);
	

});

function esImpar(num){
	if(num %2==0){
		return false;
	}else{
		return true;
	}
}

function obtenerCelda(num , fila){
	var celda=fila.cells[num].firstChild;
	//console.log(fila.cells[num]);
	//console.log(fila.cells[num].colSpan);
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
				}else if(id.indexOf("birthday")!=-1){
					id="birthday";
				}

			}
			content["id"]=id;

			return content;
	}
	return celda;
			
	}else{
		celda="-";
		return celda;
	}
}

function obtenerCeldaObjecto(num, fila){
	var celda=fila.cells[num];
	return celda;
}