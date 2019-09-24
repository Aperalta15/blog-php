$(function() {
	$("#ingUsuario").submit(function(){
		var url = $(this).attr('action');//Captura el valor del action
		var datos = $(this).serialize();

		$.post(url, datos, function(e){
			$.notify({
				title: '<strong>Inicio</strong>',
				message: e.texto
			},{
				type: e.estado,
				timer: 500
			});
		}, 'json');

		return false;
	});
	$("#regUsuario").submit(function(){
		var url = $(this).attr('action');//Captura el valor del action
		var datos = $(this).serialize();

		$.post(url, datos, function(e){
			$.notify({
				title: '<strong>Registro</strong>',
				message: e.texto
			},{
				type: e.estado,
				timer: 500
			});
		}, 'json');

		return false;
	});

});
