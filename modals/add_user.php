<div class="modal fade" id='modal_createjournal'>
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form method="POST" action=''>
          <div class="modal-header" style="background-color:#3c8dbc;">
            <h4 class="modal-title" style="color:#fff;"> <strong> Add User </strong> </h4>
          </div>
          <div class="modal-body" >
            <div class='form-group'>
				User ID
					<input type="text" class="form-control" required>
        Full Name
          <input type="text" class="form-control" required>
        Username
          <input type="text" class="form-control" required>
        User Type
          <br>
          <select required class="form-control">
            <option> </option>
            <option value="Administrator"> Administrator </option>
            <option value="Accountant"> Accountant </option>
          </select>				
            </div>
          </div>
          <div class="modal-footer">
		  
      <button type="submit" class="btn btn-brand btn-success"> Add </button>
			<button type="button" data-dismiss="modal" class="btn btn-brand btn-danger"> Cancel </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
    function addUser(){
            $('#modal_createjournal').modal('show');	
        }
  </script>
 
 