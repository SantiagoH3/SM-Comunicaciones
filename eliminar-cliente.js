$(document).ready(function(){
	$(".eliminar").click(function(){
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
		},function(e){
			window.location.href="clientes.php";
		});
	});

	$('#limpiar-nc').click(function() {
		$('#nombre').val('');
		$('#localidad').val('');
		$('#telefono').val('');
		$('#ip').val('');
	});
});