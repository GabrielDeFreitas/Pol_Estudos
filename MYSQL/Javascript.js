$("#FormCadastro").on('submit',function(event){
	event.preventDefault();
	var Dados=$(this).serialize();

	$.ajax({ 
		url: 'Controllers/Cadastro.php',
		type: 'post',
		dataType: 'html',
		data: Dados,
		success:function(Dados){
			$('.Resultado').show().html(Dados);
		}
    })
});

