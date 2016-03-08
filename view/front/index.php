<div class="row">
	<div class="wrapper">
		<?php include 'view/front/flashMessage.php'; ?>

		<form action="/index/loginCheck" method="post" name="auth" class="form-signin">       
		<h1>Connexion</h1>
		<input type="text" class="form-control" name="login" placeholder="login" required="" autofocus="" />
		<br>
		<input type="text" class="form-control" name="password" placeholder="mot de passe" required="" autofocus="" />
		<br>
		<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Se connecter" type="Submit">Se connecter</button>			
		</form>			
	</div>
</div>
