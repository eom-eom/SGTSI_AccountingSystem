<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('Trial Balance');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
?>



<div class="content-wrapper">

	<div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Trial Balance</h3></center>
			  <center><h5 class="box-title"><?php  ?></h5></center>
				<!-- Split button -->	
				<div class="btn-group">
					<button type="button" class="btn btn-flat btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-calendar"></i><span> Select Month</span>
					<i class="glyphicon glyphicon-chevron-down"></i></button>
					<ul class="dropdown-menu">
						<li class="dropdown-item"><a  href="#">Month 1</a></li>
						<li class="dropdown-item"><a  href="#">Month 2</a></li>
						<li class="dropdown-item"><a  href="#">Month 3</a></li>
					</ul>
				</div>
				
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Account Title</th>
                  <th>Debit</th>
                  <th>Credit</th>
                </tr>
                <tr>
                  <td>Clean database</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Cron job running</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Fix and squish bugs</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
	</div>
		  
</div>

<?php
	addFoot();
?>
