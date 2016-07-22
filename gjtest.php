<?php
	require_once('support/config.php');
	addHead('General Journal');
	addNavBar();
	addSideBar();
?>

<div class="content-wrapper">
	
<section class="content-header">
	<h2> General Journal </h2>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
		</div>
	<div class="box-body">
		<table id="table" class="table responsive-table table-bordered table-striped">
			<thead>
				<tr class="tableheader">
					<th>JE No.</th>
					<th>DATE OF ENTRY</th>
					<th>ACCOUNT TITLE</th>
					<th>DEBIT</th>
					<th>CREDIT</th>
					<th>ACTIONS</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$entriestable = $connection -> myQuery("SELECT 
							journal_entries.journal_entry_no,
							date_of_entry,
							description
						FROM journal_entries
						INNER JOIN journal_details on journal_entries.journal_entry_no = journal_details.journal_entry_no  
						where journal_entries.journal_id=0 
						GROUP by journal_entries.journal_entry_no");
						
					$entrydetailtable=$connection -> myQuery("SELECT
					journal_entries.journal_entry_no,
					journal_entries.date_of_entry,
					journal_details.account_id,
                    accounts.name,
					journal_details.amount,
					journal_details.is_debit
					
						FROM journal_entries
						INNER JOIN journal_details on journal_entries.journal_entry_no = journal_details.journal_entry_no
                        INNER JOIN accounts on accounts.acc_id = journal_details.account_id						
						where journal_entries.journal_id=0");
	
					while($rows = $entriestable->fetch(PDO::FETCH_ASSOC)){
						$entryno = $rows['journal_entry_no'];
						$countentryspan = $connection -> myQuery("SELECT COUNT(journal_details.journal_entry_no) as count 
																FROM journal_details where 
																journal_details.journal_entry_no=$entryno")->fetch(PDO::FETCH_ASSOC);
						$rowspan = $countentryspan['count']+1;
				?>
				<tr>
					<td rowspan='<?php echo $rowspan;?>' style="border-bottom:1pt solid black;" ><?php echo htmlspecialchars(substr_replace($entryno,'-',4,0));?></td>
					<td rowspan='<?php echo $rowspan;?>' style="border-bottom:1pt solid black;" ><?php echo htmlspecialchars($rows['date_of_entry']);?></td>
				<?php
					for($count=1;$count<= $rowspan-1;$count++){
						$row=$entrydetailtable->fetch(PDO::FETCH_ASSOC);
						$isDebit=$row['is_debit'];
						if($count==1){
				?>
					<td><?php
						if($isDebit==0){
							echo "<p style='text-indent:10vh;'>".htmlspecialchars($row['name'])."</p>";
						}else{
							echo htmlspecialchars($row['name']);
						}
						?>
					</td>
					<td><?php if($isDebit==1){echo htmlspecialchars($row['amount']);}?></td>
					<td><?php if($isDebit==0){echo htmlspecialchars($row['amount']);}?></td>
					<td rowspan='<?php echo $rowspan;?>' class='text-center' style="border-bottom:1pt solid black;">
						<a href='#' class='btn btn-success btn-sm'><span class='fa fa-pencil'></span></a>
						<a href='#' onclick="" class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></a>
					</td>
					</tr>
				<?php
						}else{
							
						
				?>
				<tr>
					<td>
						<?php
						if($isDebit==0){
							echo "<p style='text-indent:10vh;'>".htmlspecialchars($row['name'])."</p>";
						}else{
							echo htmlspecialchars($row['name']);
						}
						?>	
					</td>
					<td><?php if($isDebit==1){echo htmlspecialchars($row['amount']);}?></td>
					<td><?php if($isDebit==0){echo htmlspecialchars($row['amount']);}?></td>
				</tr>
				<?php
							
						}
						
					}
					
				?>
				<tr>
					<td style="border-bottom:1pt solid black;" ><?php echo '*'.htmlspecialchars($rows['description']);?></td>
					<td style="border-bottom:1pt solid black;" ></td>
					<td style="border-bottom:1pt solid black;" ></td>
				</tr>
				
					<?php
				}
			
				?>
				
				
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