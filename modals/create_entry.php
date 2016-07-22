


<div class="modal fade" id='modal_createentry'>
	<div class="modal-dialog">
	
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
					<h3 class="modal-title">New Journal Entry</h3>
					
				<div class="col-lg-6">
					Journal Entry No: <?php ?>
				</div>
				<div class="col-lg-6 input-group date" data-provide="datepicker">
					<input type="text" class="form-control" required>
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</div>
				</div>
            </div>
			
			
			
			<div class="form-group col-lg-6" onload="makeDTableFix();">
					
						<label>Accounts:</label>					
						<select class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-live-search="true" style="width: 100%;">
							<!-- Insert Options -->
						</select>
						<label> Amount: </label>	
						<input class="form-control input-sm" placeholder="Amount" type="text">
			

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
					<label>Accounts:</label>
					
						<select class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-live-search="true" style="width: 100%;">
						<!-- Insert Options -->
						</select>
					<label> Amount: </label>	
					<input class="form-control input-sm" placeholder="Amount" type="text">
			
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