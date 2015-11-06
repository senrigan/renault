function guardarTablero(){
	var table=document.getElementById("table2");
	//console.log("table"+table);
	var tecnicos=[];
	for(var i=3,row; row=table.rows[i] ;i++){
		///console.log("row"+i+"data"+row.innerHTML)
		if(esImpar(i)){//planeando
			console.log("planeando ****");
			var tab_tecnico=[];
			var planeado=[];
			var trabajando=[];

			var tecnico=row.cells[0];
			tab_tecnico.push(tecnico.id);

			//console.log(tecnico);
			console.log("id tecnico"+tecnico.id);
			var imagen=row.cells[1];
			var status=row.cells[2];
			console.log("status"+status.innerHTML);
			console.log("status"+row.cells[0].innerHTML);
			var h0800=row.cells[3].innerHTML;
			planeado.push(h0800);
			var h0830=row.cells[4].innerHTML;
			planeado.push(h0830);
			var h0900=row.cells[5].innerHTML;
			planeado.push(h0900);
			var h0930=row.cells[6].innerHTML;
			planeado.push(h0930);
			var h1000=row.cells[7].innerHTML;
			planeado.push(h1000);
			var h1030=row.cells[8].innerHTML;
			planeado.push(h1030);
			var h1100=row.cells[9].innerHTML;
			planeado.push(h1100);
			var h1130=row.cells[10].innerHTML;
			planeado.push(h1130);
			var h1200=row.cells[11].innerHTML;
			planeado.push(h1200);
			var h1230=row.cells[12].innerHTML;
			planeado.push(h1230);
			var h1300=row.cells[13].innerHTML;
			planeado.push(h1300);
			var h1330=row.cells[14].innerHTML;
			planeado.push(h1330);
			var h1400=row.cells[15].innerHTML;
			planeado.push(h1400);
			var h1430=row.cells[16].innerHTML;
			planeado.push(h1430);
			var h1500=row.cells[17].innerHTML;
			planeado.push(h1500);
			var h1530=row.cells[18].innerHTML;
			planeado.push(h1530);
			var h1600=row.cells[19].innerHTML;
			planeado.push(h1600);
			var h1630=row.cells[20].innerHTML;
			planeado.push(h1630);
			var h1700=row.cells[21].innerHTML;
			planeado.push(h1700);
			var h1730=row.cells[22].innerHTML;
			planeado.push(h1730);
			var h1800=row.cells[23].innerHTML;
			planeado.push(h1800);
			var h1830=row.cells[24].innerHTML;
			planeado.push(h1830);
			var h1900=row.cells[25].innerHTML;
			planeado.push(h1900);
			var h1930=row.cells[26].innerHTML;
			planeado.push(h1930);
			var lavado=row.cells[27].innerHTML;
			planeado.push(lavado);
			var control=row.cells[28].innerHTML;
			planeado.push(control);
			var term=row.cells[29].innerHTML;
			planeado.push(term);
			var tot=row.cells[30].innerHTML;
			planeado.push(tot);
			var partes=row.cells[31].innerHTML;
			planeado.push(partes);
			var aut=row.cells[32].innerHTML;
			planeado.push(aut);
			tab_tecnico.push(planeado);
		}else{//trabajndo
			console.log("trabajando ****");
			//console.log(tecnico);
			console.log("id tecnico"+tecnico.id);
			var status=row.cells[0];
			console.log("status"+status.innerHTML);
			var h0800=row.cells[1];
			var h0830=row.cells[2];
			var h0900=row.cells[3].innerHTML;
			var h0930=row.cells[4].innerHTML;
			var h1000=row.cells[5];
			var h1030=row.cells[6].innerHTML;
			var h1100=row.cells[7].innerHTML;
			var h1130=row.cells[8].innerHTML;
			var h1200=row.cells[9].innerHTML;
			var h1230=row.cells[10].innerHTML;
			var h1300=row.cells[11].innerHTML;
			var h1330=row.cells[12].innerHTML;
			var h1400=row.cells[13].innerHTML;
			var h1430=row.cells[14].innerHTML;
			var h1500=row.cells[15].innerHTML;
			var h1530=row.cells[16].innerHTML;
			var h1600=row.cells[17].innerHTML;
			var h1630=row.cells[18].innerHTML;
			var h1700=row.cells[19].innerHTML;
			var h1730=row.cells[20].innerHTML;
			var h1800=row.cells[21].innerHTML;
			var h1830=row.cells[22].innerHTML;
			var h1900=row.cells[23].innerHTML;
			var h1930=row.cells[24].innerHTML;
			var lavado=row.cells[25].innerHTML;
			var control=row.cells[26].innerHTML;
			var term=row.cells[27].innerHTML;
			var tot=row.cells[28].innerHTML;
			var partes=row.cells[29].innerHTML;
			var aut=row.cells[30].innerHTML;
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
			console.log("tecnicos"+tecnicos);



		}
		
		
		


		/*for(var j=0,col; col=row.cells[j] ;j++){
			console.log("col"+col.innerHTML);
		}*/
	}
	var tab=JSON.stringify(tecnicos);
	console.log("tab"+tab);
	/*$.post("../controller/gestionar_tablero.php?tablero="+tab,function(data,status){
		console.log("recibiendo data"+data);
	});
*/
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

}
function esImpar(num){
	if(num %2==0){
		return false;
	}else{
		return true;
	}
}