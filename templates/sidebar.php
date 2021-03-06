<div class="main-sidebar">
  <!-- Inner sidebar -->
  <div class="sidebar">
  
  <ul class="sidebar-menu">
      <li class="header">Accounting Tools</li>
      <!-- Optionally, you can add icons to the links -->
		<li class="treeview">
				<a href="dash.php">
				<i class="fa fa-dashboard"></i> 
				<span>Dashboard</span>
			</a>
		</li>
		<li class="treeview">
				<a>
				<i class="glyphicon glyphicon-list-alt"></i> 
				<span>General Journal</span>
				</a>
			<ul class="treeview-menu menu-open">
					<li><a href="general_journal.php">
						<i class="glyphicon glyphicon-list-alt"></i>
						<span>View General Journal</span>
						</a>
					</li>
					<li><a href="archived_journals.php">
						<i class="glyphicon glyphicon-list-alt"></i>
						<span>Archived Journals</span>
						</a>
					</li>
					
			</ul>
		</li>
		
		
		<li class="treeview">
			<a href="#">
				<i class="glyphicon glyphicon-book"></i> 
				<span>Ledger</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="general_ledger.php">
						<i class="fa fa-file-text"></i>
						<span>General Ledger</span>
						</a>
					</li>
					<li><a href="trial_balance.php">
						<i class="fa fa-file-text"></i>
						<span>Trial Balance</span>
						</a>
					</li>
					
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="glyphicon glyphicon-stats"></i>
				<span>Financial Statement</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="balanceSheet.php">
						<i class="fa fa-bar-chart"></i>
						<span>Balance Sheet</span>
						</a>
					</li>
					<li><a href="income_statement.php">
						<i class="fa fa-bar-chart"></i>
						<span>Income Statement</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-bar-chart"></i>
						<span>Cash Flow</span>
						</a>
					</li>
			</ul>
		</li>
	  

	  <?php
	  
	  if($_SESSION[APPNAME]['UserType']== "admin" ){
			echo" <li class='treeview'>
				<a href='#'>
					<i class='fa fa-gear'></i>
					<span>Settings</span>
				</a>
					<ul class='treeview-menu menu-open'>
						<li><a href='users.php'>
							<i class='fa fa-users'></i>
							<span>Users</span>
							</a>
						</li>
							<li><a href='chart_of_accounts.php'>
							<i class='fa fa-folder'></i>
							<span>Chart of Accounts</span>
							</a>
						</li>
						
						<li><a href='archived_accounts.php'>
							<i class='fa fa-folder'></i>
							<span>Archived Accounts</span>
							</a>
						</li>
						<li><a onclick='databaseModal();' role='button'>
							<i class='fa fa-database'></i>
							<span>Backup Restore</span>
							</a>
						</li>
						<li><a href='#'>
							<i class='fa fa-folder-o'></i>
							<span>Audit Trail</span>
							</a>
						</li>
					</ul>
				</li>";}	
			else{
				echo"<li class='treeview'>
				<a href='#'>
					<i class='fa fa-gear'></i>
					<span>Settings</span>
				</a>
					<ul class='treeview-menu menu-open'>
						<li><a href='chart_of_accounts.php'>
							<i class='fa fa-folder'></i>
							<span>Chart of Accounts</span>
							</a>
						</li>
						
						<li><a href='archived_accounts.php'>
							<i class='fa fa-folder'></i>
							<span>Archived Accounts</span>
							</a>
						</li>
						<li><a href='#'>
							<i class='fa fa-folder-o'></i>
							<span>Audit Trail</span>
							</a>
						</li>
					</ul>
				</li>";}
				
				
		?>
		
	</ul><!-- /.sidebar-menu -->
  </div>
</div><!-- /.main-sidebar -->

