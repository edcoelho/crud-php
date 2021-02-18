$("#mensagem-erro-login").hide();
$('#login-btn').click((e) => {
	let dados = $("#form-login").serialize();
	$.ajax({
		type: 'POST',
		url: '../login/iniciarSessao.php',
		data: dados,
		dataType: 'html',
	}).done(function(resposta){
		if(resposta == 1){
			window.location.href = "../";
		}else{
			$("#mensagem-erro-login").html(resposta);
			$("#mensagem-erro-login").show();
		}
	});
	e.preventDefault();
});
