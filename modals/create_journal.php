
<div class="modal" id='modal_createjournal'>
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action='addjournal.php'>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Create A Journal</h4>
          </div>
          <div class="modal-body" >
            <div class='form-group'>
				DATE OF JOURNAL
				<div class="input-group date" data-provide="datepicker">
					<input type="text" class="form-control" required>
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
				</div>
				DESCRIPTION
				 <textarea name='desc' required="" placeholder="Enter Journal Description" class='form-control' style='resize: none' rows='4'></textarea>
				
            </div>
          </div>
          <div class="modal-footer">
		  
            <button type="submit" class="btn btn-brand btn-flat">Create</button>
			<button type="button" data-dismiss="modal" class="btn btn-brand btn-flat">Cancel</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <script type="text/javascript">
    function createJournal(){
            $('#modal_createjournal').modal('show');	
        }
  </script>
 
 