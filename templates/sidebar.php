<div class="main-sidebar">
  <!-- Inner sidebar -->
  <div class="sidebar">
  
  <ul class="sidebar-menu">
      <li class="header">Accounting Tools</li>
      <!-- Optionally, you can add icons to the links -->
		<li class="treeview">
			<a href="#">
				<i class="glyphicon glyphicon-list-alt"></i> 
				<span>General Journal</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>View General Journal</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>New Journal Entry</span>
						</a>
					</li>
			</ul>
		<li class="treeview">
			<a href="#">
				<i class="glyphicon glyphicon-book"></i> 
				<span>Ledger</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa fa-file-text"></i>
						<span>General Ledger</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text"></i>
						<span>Trial Balance</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text"></i>
						<span>Archived Ledger</span>
						</a>
					</li>
			</ul>
      <li class="treeview">
			<a href="#">
				<i class="glyphicon glyphicon-stats"></i>
				<span>Financial Statement</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa fa-bar-chart"></i>
						<span>Balance Sheet</span>
						</a>
					</li>
					<li><a href="#">
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
	  
	  
	  <!-- USER VALIDATION -->
	  <?php
	  
	  if($_SESSION[APPNAME]['UserType'] = "admin"){
		echo "<li class='treeview'>
				<a href='#'>
					<i class='fa fa-gear'></i>
					<span>Settings</span>
				</a>
					<ul class='treeview-menu menu-open'>
						<li><a href='#'>
							<i class='fa  fa-users'></i>
							<span>Users</span>
							</a>
						</li>
						<li><a href='#'>
							<i class='fa fa-folder'></i>
							<span>Chart of Accounts</span>
							</a>
						</li>
						<li><a href='#'>
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
				</li>"}
	  else {
		echo "<li class='treeview'>
				<a href='#'>
					<i class='fa fa-gear'></i>
					<span>Settings</span>
				</a>
					<ul class='treeview-menu menu-open'>
						<li><a href='#'>
							<i class='fa fa-folder'></i>
							<span>Chart of Accounts</span>
							</a>
						</li>
						<li><a href='#'>
							<i class='fa fa-folder-o'></i>
							<span>Audit Trail</span>
							</a>
						</li>
					</ul>
				</li>"} 
		?>
    </ul><!-- /.sidebar-menu -->
  </div>
</div><!-- /.main-sidebar -->