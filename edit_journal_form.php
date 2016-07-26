<?php
	require_once('support/config.php');
	if(loggedId() && isset($_GET['id'])){
		addHead('Edit Journal');
		addNavBar();
		addSideBar();
		$journal_id = $_GET['id'];
		$query = $connection->myQuery("Select * From journals where journal_id = $journal_id")->fetch(PDO::FETCH_ASSOC);
		$description = $query['description'];
		$journal_date = $query['journal_date'];
		
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
	
	
		
		
?>

	<div class="content-wrapper">

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" align='center'>
                    <h1 class="page-header">Edit General Journal</h1>
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
                    		<form class='form-horizontal' method='POST' enctype="multipart/form-data" action='php/edit_journal.php'>
                                <input type='hidden' name='id' value=<?php echo $journal_id?> >
                    			
                                <div class='form-group' align='left'>
                                    <label class='col-sm-12 col-md-3 control-label'>Description</label>
                                    <div class='col-sm-12 col-md-6'>
                                         <textarea name='desc' required maxlength="100" placeholder="" class='form-control' style='resize: none' rows='4'><?php echo $description;?></textarea>
                                    </div>
                                </div>
								
								<div class="input-group date" data-provide="datepicker">
									<label class='col-sm-12 col-md-3 control-label'>Date: </label>
									<div class='col-sm-12 col-md-6'>
										<input type="text" placeholder="mm/dd/yyyy" name="date" class="form-control" value=<?php echo $journal_date;?> style="position: relative; z-index: 100000;" required>
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</div>
										
										
									</div>
									
									
								</div>
								<br>
								

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
