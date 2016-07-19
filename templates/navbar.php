
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
			<li><a data-toggle="control-sidebar"><i class="glyphicon glyphicon-th"></i> <span>Multi-Function Calculator</span></a></li>
			<li><a href="#">Log-Out</a></li>
		</ul>
	</div>	
	
  </nav>
</header>


<div class="content-wrapper">
<aside class="control-sidebar control-sidebar-dark">
  <!-- Content of the sidebar goes here -->
  
  <div class="box box-info">
        <div class="box-header with-border">
          <h5 class="box-title">Cost Of Goods Sold</h5>
        </div><!-- /.box-header -->
        <div class="box-body">
		<form method="">
          <div class="input-group">
                <input class="form-control input-sm" placeholder="Beginning Inventory" name="beg_inv" type="text">
           </div>
		   +
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Purchases" name="purchase" type="text">
           </div>
		   -
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Ending Inventory" name="end_inv"  type="text">
           </div>
		   =
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Cost Of Goods Sold" name="cod" disabled type="text">
           </div>
		   <br>
			<button type="submit" class="btn bg-olive btn-xs">Compute</button>
		</form>
        </div><!-- /.box-body -->
      </div>
	  
	  
	  <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">Depreciation Value</h4>
        </div><!-- /.box-header -->
        <div class="box-body">
			<div class="row">
				<div class="col-lg-5">
					 <input class="form-control input-sm" placeholder="(Initial" type="text">
				</div>
				<div class="col-lg-1">-</div>
				<div class="col-lg-5">
					<input class="form-control input-sm" placeholder="Scrap)" type="text">
				</div>
			</div>
			 ___________________________<br></br>
			<div class="input-group">
				<input class="form-control input-sm" placeholder="Life Expectancy" type="text">
				<span class="input-group-addon input-sm">yrs</span>
			</div>
				=
			<div class="input-group">
				<input class="form-control input-sm" placeholder="Depreciation Expense" disabled type="text">
			</div>
			<br>
			<button type="button" class="btn bg-olive btn-xs">Compute</button>
        </div><!-- /.box-body -->
      </div>
	  
	    <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">Balance Reduction</h4>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="input-group">
               <input class="form-control input-sm" placeholder="(Initial Cost" type="text">
           </div>
		   -
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Accumulated Depreciation" type="text">
           </div>
		   -
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Scrap Value)" type="text">
           </div>
		   *
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Percentage" type="text">
           </div>
		   =
		   <div class="input-group">
                <input class="form-control input-sm" placeholder="Annual Depreciation Expense" disabled type="text">
           </div>
		   <br>
			<button type="button" class="btn bg-olive btn-xs">Compute</button>
        </div><!-- /.box-body -->
      </div>
	  
 </div>
</aside>
<div class="control-sidebar-bg"></div>
</div>
