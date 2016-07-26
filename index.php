
<?php
	require_once('support/config.php');
	if(loggedId()){
		redirect('dash.php');
	}else{
		addHead();
	}
?>







<div class="login-box box box-solid box-primary" style="background-color:#3c8dbc;" align= "center">
	<div class="login-box-header" style="color:#fff;" ><strong><h3>SGTSI Accounting System</h3></strong></div>
		
	<div class="login-box-body">
		<h4>Login to your Account</strong></h4><br>
		<div class="form-horizontal" >
		<?php
			Alert();
			unsetAlert();
		?>
			<form method="POST" action='php/LoggingIn.php'>
				<div class="form-group has-feedback">
				<input class="form-control" type="text"  name="username" placeholder="Username" required></input>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
				<input class="form-control" type="password" name="password" placeholder="Password" required></input>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<a href="#"><h5>Forgot Password?</strong></h5></a>
				<br>
				<button type="submit" class="btn btn-primary">Log In</button>
			</form>
		</div>
		
		
	</div>
</div>




<?php
	addFoot();
?>
