<div id="main">
	<div class="col-lg-6 col-md-6 col-sm-6 col-md-offset-2 col-lg-offset-2 col-sm-offset-2">
		<?php include 'view/front/flashMessage.php'; ?>

		<form action="/index/loginCheck" method="post" name="auth" class="form-signin">
		<h1>Connexion</h1><br>
		<input type="text" class="form-control" name="login" placeholder="login" required="" autofocus="" />
		<br>
		<input type="password" class="form-control" name="password" placeholder="mot de passe" required="" autofocus="" />
		<br>
		<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Se connecter" type="Submit">Se connecter</button>
		</form>
	</div>
</div>
