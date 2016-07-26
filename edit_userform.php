<?php
	require_once('support/config.php');
	if(loggedId() && isset($_GET['id'])){
		addHead('Edit User');
		addNavBar();
		addSideBar();
		$userid = $_GET['id'];
		$query = $connection->myQuery("Select * From users where user_id = $userid")->fetch(PDO::FETCH_ASSOC);
		$username = $query['username'];
		$fullname = $query['full_name'];
		
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
	
	
		
		
?>

	<div class="content-wrapper">

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" align='center'>
                    <h1 class="page-header">Edit User</h1>
					<?php
						Alert();
						unsetAlert();
					?>
                </div>

                <!-- /.col-lg-12 -->;
            </div>
            <!-- /.row -->
            <div class="row" align='center'>
                <div class='col-lg-12'> 
                    <div class='row'>
                    	<div class='col-sm-12 col-md-8 col-md-offset-2'>
                    		<form class='form-horizontal' method='POST' enctype="multipart/form-data" action='php/edit_user.php'>
                                <input type='hidden' name='id' value=<?php echo $userid?> >
                    			
                                <div class='form-group' align='left'>
                                    <label class='col-sm-12 col-md-3 control-label'>UserName</label>
                                    <div class='col-sm-12 col-md-6'>
                                        <input type='text' class='form-control' name='username'  value=<?php echo $username;?> required>
                                    </div>
                                </div>
								
								 <div class='form-group' align='left'>
                                    <label class='col-sm-12 col-md-3 control-label'>FirstName</label>
                                    <div class='col-sm-12 col-md-6'>
                                        <input type='text' class='form-control' name='name' placeholder='FirstName' value=<?php echo $fullname;?> required>
                                    </div>
                                </div>
								 <div class='form-group' align='left'>
                                    <label class='col-sm-12 col-md-3 control-label'>Password</label>
                                    <div class='col-sm-12 col-md-6'>
                                        <input type='text' class='form-control' name='password' placeholder='Enter new password' value='' required>
                                    </div>
                                </div>
								<div class='form-group' align='center'>
								 <label class='col-sm-12 col-md-3 control-label'>User Type</label>
									<div class='col-sm-12 col-md-6'>
										<select class="form-control" name='account' required>
											<option> </option>
											<option value="admin"> Administrator </option>
											<option value="Accountant"> Accountant </option>
										</select>
									</div>
								</div>

                                <div class='form-group' align='left'>
                                    <div class='col-sm-12 col-md-9 col-md-offset-3 '>
                                        <button type='submit' class='btn btn-success'> <span class='fa fa-check'></span> Save</button>
                                        <a href='users.php' class='btn btn-default'>Cancel</a>
                                    </div>
                                    
                                </div>                    		
                    		</form>
                    	</div>
                    </div>

                </div>
            </div>
		  
</div>

<?php
	addFoot();
?>
