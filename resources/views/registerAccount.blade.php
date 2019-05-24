@include('header')
<div class="container-fluid">
	<div class="col-md-12 col-sm-12">
		<h4>Cadastro de conta</h4>
	</div>
	<div class="col-md-12 col-sm-12">




<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="consumer-tab" data-toggle="tab" href="#consumer" role="tab" aria-controls="consumer" aria-selected="true">Consumidor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">Lojista</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="consumer" role="tabpanel" aria-labelledby="consumer-tab">







<form id="register" action="{{URL::to('/api/register/newuser')}}" method="post">
			<div class="form-group">
				<label for="formUserNome">Nome Completo</label>
				<input type="text" class="form-control" id="formUserNome" name="UserNome" placeholder="Nome completo" value="" required="required">
			</div>
			<div class="form-group">
				<label for="formUserCpf">CPF</label>
				<input type="text" class="form-control" id="formUserCpf" name="UserCpf" placeholder="000.000.000-00" value="" required="required">
			</div>
			<div class="form-group">
				<label for="formUserPhone">Telefone</label>
				<input type="text" class="form-control" id="formUserPhone" name="UserPhone" placeholder="(00) 00000.0000" value="" required="required">
			</div>
			<div class="form-group">
				<label for="formUserEmail">Email</label>
				<input type="email" class="form-control" id="formUserEmail" name="UserEmail" placeholder="seu@email.com" value="" required="required">
			</div>
			<div class="form-group">
				<label for="formUserPassword">Senha</label>
				<input type="password" class="form-control" id="formUserPassword" name="UserPassword" placeholder="" value="" required="required">
			</div>
			<div class="alert alert-success" role="alert" style="display: none;">
				Salvo com sucesso!
			</div>
			<div class="alert alert-danger" role="alert" style="display: none;">
				Erro ao salvar!
			</div>
			<button type="submit" class="btn btn-primary submitButton">Salvar</button>
		</form>
	</div>

	<script>
		var frm = jQuery('#register');
		frm.submit(function (e) {
			e.preventDefault();
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "{{URL::to('/api/register/newuser')}}",
				data: dados,
				success: function( data )
				{
					if(data==true){
						$('.alert-success').show();
					}else{
						$('.alert-danger').show();
					}
				}
			});
		});
	</script>








  </div>
  <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">seller</div>
</div>



















	
		

</div>
@include('footer')