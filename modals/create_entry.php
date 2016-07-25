
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
	
				<div class="input-group date" data-provide="datepicker">
					<input type="text" placeholder="mm/dd/yyyy" name="date" class="form-control" required>
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</div>
				</div>
            </div>
			
			
			
			<div class="form-group col-lg-6" onload="makeDTableFix();">
						<label>Debit</label>		
						<label>Accounts:</label>					
						<select class="form-control">
							<!-- Insert Options -->
							<?php
								$accounttable =$connection -> myQuery("SELECT name FROM accounts;");
			
									while($result = $accounttable->fetch(PDO::FETCH_ASSOC)){
									$DebitTitle= $result['name'];
		
						?>
									<option value="$DebitTitle"><?php echo "$DebitTitle"; }; ?></option>
						</select>
						<label> Amount: </label>	
						<div class="input-group margin">
							<input type="text" class="form-control" placeholder="Amount">
						<span class="input-group-btn">
							<button type="button" class="btn btn-primary btn-flat">Add Debit</button>
						</span>
						</div>
			

					<table class="table table-striped" id="DebitTable">
						<thead id="tblHead">
							<tr>
							<th>Accounts</th>
							<th class="text-right">Amount</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>Cash</td>
							<td class="text-right">45001</td>
						</tr>
						<tr>
							<td>Office Equipment</td>
							<td class="text-right">76455</td>
						</tr>
						</tbody>
					</table>
				</div>
			
				<div class="form-group col-lg-6" onload="makeCTableFix();">
					<label>Credit</label>	
					<label>Accounts:</label>
						<select class="form-control">
						<!-- Insert Options -->
						<?php
								$accounttable =$connection -> myQuery("SELECT name FROM accounts;");
			
									while($result = $accounttable->fetch(PDO::FETCH_ASSOC)){
									$CreditTitle= $result['name'];
		
						?>
									<option value="$CreditTitle"><?php echo "$CreditTitle"; }; ?></option>
						</select>
					<div ><label > Amount: </label>	
						<div class="input-group margin">
							<input type="text" class="form-control"  placeholder="Amount">
						<span class="input-group-btn">
							<button type="button" class="btn btn-primary btn-flat">Add Credit</button>
						</span>
					</div>
					</div>
					<table class="table table-striped" id="CreditTable">
						<thead id="tblHead">
						<tr>
							<th>Accounts</th>
							<th class="text-right">Amount</th>
						</tr>
							</thead>
							<tbody>
							<tr>
								<td>Accounts Payable</td>
								<td class="text-right">45001</td>
							</tr>
							<tr>
								<td>Mr. X, Drawing</td>
								<td class="text-right">76455</td>
							</tr>
						</tbody>
					</table>
				</div>
			
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-default">Create Entry</button>				
			</div>
			
		</div>		
	</div>
</div>

  <script type="text/javascript">
    function createEntry(){
            $('#modal_createentry').modal('show');	
        }
	function makeDTableFix() {
            // Constant retrieved from server-side via JSP
            var maxRows = 4;
			var table = document.getElementById('DebitTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
		}
	function makeCTableFix() {
            // Constant retrieved from server-side via JSP
            var maxRows = 4;
			var table = document.getElementById('DebitTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
		}
  </script>