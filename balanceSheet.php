<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('Balance Sheet');
		addNavBar();
		addSideBar();
		if(isset($_POST['fromDate'])&&isset($_POST['toDate'])){
			if($_POST['fromDate']<=$_POST['toDate']){
				$fromdate = $_POST['fromDate'];
				$todate = $_POST['toDate'];
			}else{
				$fromdate = $_POST['toDate'];
				$todate = $_POST['fromDate'];
			}
		}
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
?>

<div class="content-wrapper fixed">

<section class="content-header">
	<h1>Balance Sheet</h1> 
	<?php
			$journalsTable=$connection->myQuery("SELECT * FROM journals WHERE is_archived != 1");
		if(isset($_POST['fromDate'])&&isset($_POST['toDate'])){
			$fromDate = $connection->myQuery("SELECT journal_date FROM journals WHERE journal_id = $fromDate")->fetch(PDO::FETCH_ASSOC);
			$toDate = $connection->myQuery("SELECT journal_date FROM journals WHERE journal_id = $toDate")->fetch(PDO::FETCH_ASSOC);
			echo "<h3><center><b>".date("F d Y",strtotime($from_date['journal_date']))."</b> to <b>". date("F d Y",strtotime($to_date['journal_date'])) ."</b</center></h3>";
		} 
	?>
<form action="balanceSheet.php" method="POST">
	<div class="row">

                  <label class="col-xs-1 control-label" >From:</label>
				  <div class= "col-xs-2">
					<select class="form-control">
						<option disabled selected>Date</option>
						<?php 
						while($row=$journalsTable->fetch(PDO::FETCH_ASSOC)){
									?>
						<option value=<?php echo $row['journal_id'];?>><?php echo htmlspecialchars($row['journal_date']); ?></option>
						<?php } ?>
					</select>
					</div>
		 

                 <label class="col-xs-1 control-label">To:</label>
				 <div class= "col-xs-2">
					<select class="form-control">
						<option disabled selected>Date</option>
							<?php 
							$journalsTable=$connection->myQuery("SELECT * FROM journals WHERE is_archived != 1");
							while($row=$journalsTable->fetch(PDO::FETCH_ASSOC)){
									?>
						<option value=<?php echo $row['journal_id'];?>><?php echo htmlspecialchars($row['journal_date']); ?></option>
							<?php } ?>
                  </select>
				</div>

		 <button type="submit" class="btn bg-olive">Generate</button>
		 <button type="button" class="btn btn-success">Print</button>
		 
	</div>
</form>				 
</section>





<section class ="content">
	<div class="row">
	<div class= "col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
              <h3 class="box-title">Assets</h3>
            </div>
	<table class="table">
		<thead >
			<tr>
				<th></th>
				<th class="text-right">Amount</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if(isset($_POST['fromDate'])&&isset($_POST['toDate'])){
					$query = $connection -> myQuery("SELECT account_name, SUM(amount) AS aTotal 
																		FROM journal_details 
																		INNER JOIN accounts ON accounts.acc_id = journal_details.account_id 
																		INNER JOIN journal_entries ON journal_entries.journal_entry_no = journal_details.journal_entry_no 
																		WHERE (journal_entries.date_of_entry BETWEEN $fromDate AND $toDate) 
																		AND (type = 4 OR type = 5 OR type = 11) AND (is_debit = 1) 
																		GROUP BY accounts.account_name ");
					$totalAssets = 0;
						while($row=$query->fetch(PDO::FETCH_ASSOC)){
							$totalAssets = $totalAssets + $row['aTotal'];
				?>
				
					<tr>
						<td><b>ASSET</b></td>
						<td></td>
					</tr>
					<tr>
						<td><p style='text-indent:10vh;'><?php echo $row['account_name'];?></td>
						<td><?php echo number_format($row['aTotal']); ?></td>
					</tr>
						<?php
								}
						?>					
					<tr>
						<td><b>Total Assets</b></td>
						<td><?php echo number_format($totalAssets); ?></td>
					</tr>
		</tbody>

		<?php
				}
		?>

	</table>
	</div>
</div>



	<div class= "col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
              <h3 class="box-title">Liabilities and Equity</h3>
            </div>
	<table class="table">
		<thead >
			<tr>
				<th></th>
				<th class="text-right">Amount</th>
			</tr>
		</thead>
		<tbody>
		
		</tbody>

	</table>
	</div>
	</div>
	
	
</div>
</section>
</div>


<?php
	
addFoot();
?>