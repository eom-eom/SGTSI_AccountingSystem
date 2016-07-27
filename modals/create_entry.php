
<style>.datepicker{z-index:1200 !important;}</style>

<div class="modal fade" id='modal_createentry'>
	<div class="modal-dialog">
	
		<div class="modal-content">
		
			<div class="modal-header" style="background-color:#3c8dbc;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
					<h3 class="modal-title" style="color:#fff;">New Journal Entry</h3>
					
					
				<div class="col-lg-6" style="color:#fff;">
					Journal Entry No:
					
					 <?php 
						
						$JournalNumber = ""; 
								if( isset( $_GET['id'])) {
										$JournalNumber = $_GET['id']; 
									} 				
									
						$JournalYear=$connection->myQuery("SELECT EXTRACT(YEAR FROM journal_date) AS JournalYear FROM journals WHERE journal_id=$JournalNumber ORDER BY journal_id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
						$JournalMonth=$connection->myQuery("SELECT EXTRACT(MONTH FROM journal_date) AS JournalMonth FROM journals WHERE journal_id=$JournalNumber ORDER BY journal_id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
						$JournalEntryCount=$connection->myQuery("SELECT COUNT(*) AS JournalEntryCount FROM journal_entries WHERE journal_id = $JournalNumber")->fetch(PDO::FETCH_ASSOC);
						
											$JournalYear = implode( " ",$JournalYear);
											$JournalMonth = implode(" ",$JournalMonth);
											$JournalMonth= sprintf("%02s", $JournalMonth);	
											$JournalEntryCount = implode( " ",$JournalEntryCount);
											
											echo  substr($JournalYear,2).$JournalMonth.'-'.($JournalEntryCount+1); 
											
						?>
	
				</div>
	
				<div class="input-group date input-group-sm" data-provide="datepicker">
					<input type="text" placeholder="mm/dd/yyyy" name="date" class="form-control" required>
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</div>
				</div>
            </div>
			
	<div class="modal-body" >
			
				<form class="col-lg-6" method="post">
				<div class="form-group form-group-sm">
						<label>Debit</label>		
						<label>Accounts:</label>					
						<select class="form-control" id="selectdr">
							<!-- Insert Options -->
							<?php
								$accounttable =$connection -> myQuery("SELECT name,acc_id FROM accounts;");
			
									while($result = $accounttable->fetch(PDO::FETCH_ASSOC)){
									$DebitTitle= $result['name'];
									$AcctID = $result['acc_id'];
		
						?>
									<option id = "<?php echo '$AcctID' ?>"  value="<?php echo "$DebitTitle"; ?>"><?php echo "$DebitTitle"; }; ?></option>
						</select>
						
						<div class="input-group margin input-group-sm">
							<input type="text" class="form-control" placeholder="Amount" id = "AmountDr">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary btn-flat " onclick="return Dr(this);">Add Debit</button>
							<button type="reset" class="btn btn-danger btn-flat">Cancel</button>
						</span>
						</div>
			
			
			
			
					<div style="overflow: auto; height: 180px;">
					<table class="table table-striped" id="DebitTable">
						<thead id="tblHead">
							<tr>
							<th>Accounts</th>
							<th class="text-right">Amount</th>
							<th class = "col-lg-2">Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					</div>
				</form>
			</div>
				
				
				
				
	
			
				
			<form class="col-lg-6" method="post">
				<div class="form-group form-group-sm">
					<label>Credit</label>	
					<label>Accounts:</label>
						<select class="form-control" id="selectcr">
						<!-- Insert Options -->
						<?php
								$accounttable =$connection -> myQuery("SELECT name,acc_id FROM accounts;");
			
									while($result = $accounttable->fetch(PDO::FETCH_ASSOC)){
									$CreditTitle= $result['name'];
									$AcctID = $result['acc_id'];
		
						?>
						
						
						
									<option id = "<?php echo '$AcctID' ?>"  value="<?php echo "$CreditTitle"; ?>"><?php echo "$CreditTitle"; }; ?></option>
						</select>
						
						
						
						<div class="input-group margin input-group-sm">
							<input type="text" class="form-control" placeholder="Amount" id = "AmountCr">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary btn-flat " onclick="return Cr()">Add Credit</button>
							<button type="reset" class="btn btn-danger btn-flat ">Cancel</button>
						</span>
						</div>
					
					
					
					<div style="overflow: auto; height: 180px;">
					<table class="table table-striped" id="CreditTable">
						<thead id="tblHead">
						<tr>
							<th>Accounts</th>
							<th class="text-right">Amount</th>
							<th class="col-lg-2">Action</th>							
						</tr>
						</thead>
							<tbody>
							</tbody>
					</table>
				</div>				
		
			</div>
		</form>
		
			<div class="form-group">
                  <label>Description:</label>
                  <input class="form-control" placeholder="Description"></input>
                </div>
				

</div>
		
		
				<div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" onclick="clearTable()">Close</button>   
					<button type="button" class="btn btn-primary" >Save changes</button>
			  </div>
			
	</div>
</div>
</div>
</form>

 <script type="text/javascript" src="js/CreateEntry_Functions.js"></script>