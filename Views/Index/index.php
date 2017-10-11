<div class="container">
	<div class="card card card-container">
		<h2 class="form-signin-heading text-center" style="color: #2F2F2F;"><strong>I</strong>niciar <strong>S</strong>esión</h2>
		<form class="form-signin" id="Session" name="Session" method="POST">	
			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" id="email" class="form-control" name="email" placeholder="Email" required autofocus>
			<label for="inputPassword" class="sr-only">Contraseña</label>
			<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
			<button class="btn btn-lg btn-block" id="btnLogin" type="submit">Ingresar</button>
		</form><br/>
	</div>
</div>

<script>
    $(document).ready(login);

	$(function(){
		$('#btnLogin').click(function(){
			var datos = $("#Session").serialize();
			
			//var email = $('form[name=Session] input[name=email]')[0].value;
			//var password = $('form[name=Session] input[name=password]')[0].value;

			/*if (email == "" || password == "") {
				alert("Campos Vacios");
			}else{*/
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>User/user/userLogin',
					data: datos,
					success: function(response){
						if (response == 1) {
							document.location = '<?php echo URL;?>Home/principal/principal';
						} else {
							alert("Email o contraseña incorrectos");
						}
					}
				});
				return false; //Evitar submit del formulario
			//}
		});
	});
</script>