
<?php
	require_once('support/config.php');
	addHead();
?>







<div class="login-box box box-solid box-primary" align= "center">
	<div class="login-box-header"><h4>Accounting System</h4></div>

	<div class="login-box-body">
		<div class="form-horizontal" >
			<form method="POST" action='php/LoggingIn.php'>
				<div class="form-group has-feedback">
				<input class="form-control" type="text"  name="username" placeholder="Username" required></input>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
				<input class="form-control" type="password" name="password" placeholder="Password" required></input>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Log In</button>
			</form>
		</div>
		
		
	</div>
</div>




<?php
	addFoot();
?>
