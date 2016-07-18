<?php
	require_once('support/config.php');
	addHead();
?>


	

<header class="main-header" >
   <a href="dash.php" class="logo">
	<span class="logo-lg">
		Accounting System
	</span>
	<span class="logo-lg-mini">
		AS
	</span>
   </a>
  <nav class="navbar navbar-static-top">
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      </a>
	  

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li><a data-toggle="control-sidebar">Multi-Function Calculator</a></li>
			<li><a href="#">Log-Out</a></li>
		</ul>
	</div>	  
	
  </nav>
</header>



<div class="main-sidebar">
  <!-- Inner sidebar -->
  <div class="sidebar">
  
  <ul class="sidebar-menu">
      <li class="header">Accounting Tools</li>
      <!-- Optionally, you can add icons to the links -->
		<li class="treeview">
			<a href="#">
				<i class="fa fa-file-text"></i> 
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
				<i class="fa fa-file-text"></i> 
				<span>Ledger</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>General Ledger</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>Trial Balance</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>Archived Ledger</span>
						</a>
					</li>
			</ul>
      <li class="treeview">
			<a href="#">
				<i class="fa fa-file-text"></i>
				<span>Financial Statement</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>Balance Sheet</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>Income Statement</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-file-text-o"></i>
						<span>Cash Flow</span>
						</a>
					</li>
			</ul>
      </li>
	  <li class="treeview">
			<a href="#">
				<i class="fa fa-gear"></i>
				<span>Settings</span>
			</a>
			<ul class="treeview-menu menu-open">
					<li><a href="#">
						<i class="fa  fa-users"></i>
						<span>Users</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-folder"></i>
						<span>Chart of Accounts</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-database"></i>
						<span>Backup Restore</span>
						</a>
					</li>
					<li><a href="#">
						<i class="fa fa-folder-o"></i>
						<span>Audit Trail</span>
						</a>
					</li>
			</ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </div>
</div><!-- /.main-sidebar -->



<div class="content-wrapper">
<aside class="control-sidebar control-sidebar-dark">
  <!-- Content of the sidebar goes here -->

</aside>
<div class="control-sidebar-bg"></div>
</div>


<?php
	addFoot();
?>
