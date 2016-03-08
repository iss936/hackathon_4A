<form role="form" method="POST" action="<?php echo ADRESSE_SITE; ?>index/login">
	<div class="form-group">
		<label class="control-label">Login: </label>
		<input type="text" value="" name="login" class="form-control"/>
	</div>
	<div class="form-group">
		<label class="control-label">Mot de passe</label>
		<input type="text" value="" name="mdp" class="form-control"/>
	</div>
	
	<div class="">
		<button type="submit" class="btn green-haze">
		Se connecter </button>
		<button type="reset" class="btn default">Annuler </button>
	</div>
</form>