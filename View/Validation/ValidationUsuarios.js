$(".btnEliminar").click(function() {
	var i = 0;
	var lista = new Array();
	var idpersona = $(this).data("idpersona");

	$(this).parents("tr").find("td").each(function() {
		lista[i] = $(this).html();
		console.log(lista[i]);
		i++;
	});

	console.log("----");

	$("#idpersona_e").val(idpersona);
	$("#nombres_e").val(lista[1]);
	$("#apellidos_e").val(lista[2]);
	$("#fecha_nacimiento_e").val(lista[3]);
	
});

$(".btnModificar").click(function() {
	var i = 0;
	var lista = new Array();
	var idpersona = $(this).data("idpersona");

	$(this).parents("tr").find("td").each(function() {
		lista[i] = $(this).html();
		console.log(lista[i])
		i++;
	});

	$("#idpersona_m").val(idpersona);
	$("#nombres_m").val(lista[1]);
	$("#apellidos_m").val(lista[2]);
	$("#fecha_nacimiento_m").val(lista[3]);
});


function validarMinMax(el) {
	if (el.value != "") {
	  if (parseInt(el.value) < parseInt(el.min)) {
		el.value = el.min;
	  }
	  if (parseInt(el.value) > parseInt(el.max)) {
		el.value = el.max;
	  }
	}
  }