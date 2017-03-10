$(document).ready(function(){

	$("#menu").click(function () {
		var menu = $("#menu");
		var classe = $('#menu').attr('class');
		if ($('#menu').attr('class') == 'menu'){
			$('#menu').attr('class', 'menu responsivo');
		}
		else
			$('#menu').attr('class', 'menu');
	});

	$("#myModal").on('show.bs.modal', function (event) {
		var botao = $(event.relatedTarget);
		var estiloNome = botao.data('estilo');

		var modal = $(this);
		modal.find(".estilo-nome").text(estiloNome);
		$(".deletar-sim").attr('data-id', botao.data('id'));
	});


	$(".deletar-sim").on('click', function () {
		var estiloId = $(this).attr('data-id');
		var url = location.href;
		url = url.split('/');
		$.ajax({
			url: '/painel/'+url[4]+'/excluir/'+estiloId,
			method: 'post',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(resposta) {
				if (resposta.sucesso) {
					$('#snackbar').addClass('show');
					$('#snackbar').text(resposta.mensagem
					);
					//setTimeout(function(){ $('#snackbar').removeClass('show'); }, 3000);
					setTimeout("location.reload()", 2000);
				}
			}
		});
	});





		// var $url = location.href;
		// console.log($url);
		//$(".form-pesquisar").attr('action'))
	//{{ route('painel.') }}



});




/*
var menu = function(){
	var x = document.getElementById('menu');

	if (x.className == "menu") {
		x.className += " responsivo";
	} else {
		x.className = "menu";
	}
}
	*/