$("#departamento").change(function(event){

	$.get("Ciudades/"+event.target.value+"",function(response, departamento){
		console.log(response);
		$("#ciudad").empty();
		for ( i = 0 ;  i<response.length ;  i++) {
			$("#ciudad").append("<option value='"+response[i].idCiudad+"'> "+response[i].nombreCiudad+"</option>");
		}
	});

});