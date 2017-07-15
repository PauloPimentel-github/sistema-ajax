$(function(){
	// Formata Input do Formulário
	$('.js-currency').maskMoney({decimal: ',', thousands: '.', allowZero: true});

	// Fecha a exibida Front
	$('.j_close').on('click', function() {

		$('.trigger').fadeOut(300);
	});
	
	// Controla os dados do formulário
	$('.j_submit').submit(function(){

		// Armazena os dados enviados pelo formulário em em um e armazena na variável data
		var data = $(this).serialize();

		// Ajax, envia o dados do formulário para o arquivo ajax.php que retorna os dados no formato json podendo manipular como objeto
		$.ajax({
			url: 'ajax/ajax.php',
			data: data,
			type: 'POST',
			dataType: 'json',
			beforeSend: function () {

			},
			success: function (data) {
				
				// Cálculo de notas por valor 
				var res = data.valor / data.nota;

				// Formata a div de msg
				$('div').addClass("trigger trigger-accept radius");
				// Escreve a msg na trigger e exibe ao usuário
				$('p').html("O número de notas para este valor é: " + Math.round(res));
				// Adiciona um close para fechar a msg exibida
				$('.trigger-close').html("X");
			}
		});

		return false;

	});
});