
<?php
	require_once('support/config.php');
	addHead();
?>







<div class="login-box box box-solid box-primary" align= "center">
	<div class="login-box-header"><h4>Accounting System</h4></div>

	<div class="login-box-body">
		<div class="form-horizontal" >
			<div class="input-group">
			<input class="form-control" type="text"  placeholder="Username"></input>
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="input-group">
			<input class="form-control" type="password"  placeholder="Password"></input>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<br>
			
		</div>
		
		<button type="button" class="btn btn-primary">Log In</button>
		<button type="button" class="btn btn-danger">Cancel</button>
	</div>
</div>




<?php
	addFoot();
?>
